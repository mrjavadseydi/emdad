<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanRequest;
use App\Models\Plan;
use App\Models\PlanFund;
use App\Models\PlanMeta;
use App\Models\Skill;
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
        return view('panel.plan.index',compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $executers = User::where('user_type','مددجو')->whereHas('office')->get();
        $users = User::where('user_type','!=','مددجو')->whereHas('office')->get();
        return view('panel.plan.create',compact('executers','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePlanRequest $request)
    {
        $plan = Plan::create($request->validated());
        PlanFund::create([
            'executor_id'=>$request->executor_id,
            'plan_id'=>$plan->id,
            'executer_fund'=>$request->executer_fund,
            'summery'=>$request->summery,
            'fund'=>$request->fund,
            'executer_summery'=>$request->executer_summery,
        ]);
        foreach ($request->skillType as $key => $value){
            Skill::create([
                'executor_id'=>$request->executor_id,
                'type'=>$value,
                'value'=>$request->skillValue[$key]
            ]);
        }
        foreach ($request->metaType as $key =>$value){
            PlanMeta::create([
                'executor_id'=>$request->executor_id,
                'plan_id'=>$plan->id,
                'type'=>$value,
                'value'=>$request->metaValue[$key],
                'active'=>($request->metaActive[$key]==true)
            ]);
        }
        Alert::toast('ثبت طرح با موفقیت انجام شد', 'success');
        return redirect(route('plan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
