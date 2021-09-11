<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanRequest;
use App\Models\Plan;
use App\Models\PlanFund;
use App\Models\PlanMeta;
use App\Models\PlanSkill;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();

        return view("panel.plan.index", compact("plans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has("user_id")) {
            $executers = User::where([
                ["user_type", "مددجو"],
                ["id", $request->user_id],
            ])
                ->whereHas("office")
                ->get();
            if (count($executers) != 1) {
                $executers = User::where("user_type", "مددجو")
                    ->whereHas("office")
                    ->get();
            }
        } else {
            $executers = User::where("user_type", "مددجو")
                ->whereHas("office")
                ->get();
        }

        return view("panel.plan.create", compact("executers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePlanRequest $request)
    {
        $plan = Plan::create([
            "executor_id" => $request["executor_id"],
            "group" => $request["group"],
            "title" => $request["title"],
            "type" => $request["type"],
            "source" => $request["source"],
            "bank" => $request["bank"],
            "date" => $request["date"],
            "code" => $request["code"],
            "space" => $request["space"],
            "employment" => $request["employment"],
        ]);
        //        PlanFund::create([
        //            "executor_id" => $request->executor_id,
        //            "plan_id" => $plan->id,
        //            "executer_fund" => $request->executer_fund,
        //            "summery" => $request->summery,
        //            "fund" => $request->fund,
        //            "executer_summery" => $request->executer_summery,
        //        ]);
        foreach ($request->skillType as $key => $value) {
            PlanSkill::create([
                "executor_id" => $request->executor_id,
                "type" => $value,
                "value" => $request->skillValue[$key],
            ]);
        }
        foreach ($request->metaType as $key => $value) {
            PlanMeta::create([
                "executor_id" => $request->executor_id,
                "plan_id" => $plan->id,
                "type" => $value,
                "value" => $request->metaValue[$key],
                "active" => $request->metaActive[$key] == true,
            ]);
        }
        Alert::toast("ثبت طرح با موفقیت انجام شد", "success");
        return redirect(route("plan.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::whereId($id)->first();
        return view("panel.plan.show", compact("plan"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * get executer Skill
     * @param Request $request
     */
    protected function skills(Request $request)
    {
        $skill = PlanSkill::where("executor_id", $request->id)->get();
        return response()->json($skill);
    }

    /**
     * active or de active plan meta
     * @param $id
     */
    public function PlanMeta($id)
    {
        $meta = PlanMeta::whereId($id)->first();
        $meta->update([
            "active" => !$meta->active,
        ]);
        Alert::toast(" با موفقیت انجام شد", "success");

        return back();
    }

    public function print($id)
    {
        $plan = Plan::whereId($id)->first();
        return view("panel.plan.print", compact("plan"));
    }
}
