<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Jobs\SendPasswordSms;
use App\Models\Office;
use App\Models\User;
use App\Models\UserOffice;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('panel.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = Office::all();
        return view('panel.user.create',compact('offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        if($request->user_type!="مددجو"){
            SendPasswordSms::dispatch($request->mobile,$request->name,$request->password);
        }
        $request->password = bcrypt($request->password);
        $user = User::create($request->all());
        if($request->office_id != 0){
            UserOffice::create([
                'user_id'=>$user->id,
                'office_id'=>$request->office_id
            ]);
        }

        Alert::toast('ثبت نام کاربر با موفقیت انجام شد', 'success');
        if ($request->has('create_new')){
            return redirect(route('users.create'));
        }elseif($request->has('create_plan')){
            return redirect(route('plan.create').'/?user_id='.$user->id);
        }else{
            return redirect(route('users.index'));

        }
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
        User::whereId($id)->delete();
    }
}
