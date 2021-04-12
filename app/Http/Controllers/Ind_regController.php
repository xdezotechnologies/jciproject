<?php

namespace App\Http\Controllers;

use App\Models\Ind_reg;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Input;

class Ind_regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individualreg = Ind_reg::all();
        return view("back.individual-registration", compact("individualreg"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.individual-registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $individualreg = new Ind_reg();
        $individualreg->d_cat = request('d_cat');
        $individualreg->r_type = request('r_type');
        $individualreg->f_name = request('f_name');
        $individualreg->lom_area = request('lom_area');
        $individualreg->lom_id = request('lom_id');
        $individualreg->position = request('position');
        $individualreg->gender = request('gender');
        $individualreg->contact = request('contact');
        $individualreg->email = request('email');
        $individualreg->spouse = request('spouse');
        $individualreg->package_id = request('package_id');
        $individualreg->d_deposit = request('d_deposit');
        $individualreg->d_amt = request('d_amt');

        $ext = $request->u_vou->extension();
        $finalname = 'voucher'.time().'.'.$request->u_vou->extension();
        $request->u_vou->move(public_path('uploads/files/'),$finalname);

        $individualreg->u_vou = $finalname;
        $individualreg->u_pho = request('u_pho');
        $individualreg->hp1 = request('hp1');
        $individualreg->hp2 = request('hp2');
        $individualreg->hp3 = request('hp3');
        $individualreg->f_pre = request('f_pre');
        $individualreg->save();
        return redirect("/individualreg")->with('message','Page is Added Successfully.');;
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
