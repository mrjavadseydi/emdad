<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBankRequest;
use App\Models\Bank;
use App\Models\Province;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("panel.bank.index", ["banks" => Bank::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("panel.bank.create", ["provinces" => Province::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBankRequest $request)
    {
        Bank::create($request->validated());
        Alert::toast("ثبت بانک با موفقیت انجام شد", "success");
        return redirect(route("bank.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = Bank::findOrFail($id);
        return view("panel.bank.show", compact("bank"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::findOrFail($id);
        $provinces = Province::all();
        return view("panel.bank.edit", compact("bank", "provinces"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBankRequest $request, $id)
    {
        Bank::findOrFail($id)->update($request->validated());
        Alert::toast("ویرایش بانک با موفقیت انجام شد", "success");
        return redirect(route("bank.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bank::whereId($id)->delete();
    }

    /**
     *
     * @param $id
     */
    public function users($id)
    {
    }
}
