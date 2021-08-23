<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOfficeRequest;
use App\Models\Office;
use App\Models\Province;
use App\Models\User;
use App\Models\UserOffice;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::all();
        return  view("panel.office.index",compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provines = Province::all();
        return view('panel.office.create',compact('provines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOfficeRequest $request)
    {
        Office::create($request->validated());
        Alert::toast('ثبت اداره با موفقیت انجام شد', 'success');
        return redirect(route('office.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {

        return view('panel.office.show',compact('office'));
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
        Office::whereId($id)->delete();
    }

    /**
     * Add user to speacial office
     * @param int $id => office id
     *
     */
    public function showOfficeUsers($id){
        $office = Office::findOrFail($id);
        $users = User::whereNotIn('id',UserOffice::get('user_id'))->get();
        return view('panel.office.users',compact('office','users'));
    }

    /**
     * save office users
     * @param Request $request
     * @param $id
     */
    public function saveOfficeUsers(Request $request , $id){
        UserOffice::where('office_id',$id)->delete();
        foreach ($request->users as $user ){
            UserOffice::create([
                'office_id'=>$id,
                'user_id'=>$user
            ]);
        }
        Alert::toast('ثبت کاربران اداره با موفقیت انجام شد', 'success');
        return back();
    }
}
