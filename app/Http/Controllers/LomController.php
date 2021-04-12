<?php

namespace App\Http\Controllers;

use App\Exports\LomsExport;
use App\Http\Requests\LomCreateRequest;
use Illuminate\Http\Request;

use App\Models\Lom;

use App\Imports\LomsImport;

use Maatwebsite\Excel\Facades\Excel;

class LomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loms = new Lom;
        $loms = $loms->latest()->get();
        return view('admin.loms.index',compact('loms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Loms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LomCreateRequest $request)
    {
        $lom = new Lom;
        $lom->name = $request->name;
        $lom->save();
        return redirect('lom')->with('message','Lom is Added Successfully.');
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
        $lom = new Lom;
        $lom = $lom->where('id',$id)->first();
        return view('admin.loms.create',compact('lom'));
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
        $lom = Lom::where('id',$id)->first();
        $lom->name = $request->name;
        $lom->update();
        return redirect('lom')->with('message','Lom is Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lom = Lom::where('id',$id)->first();
        $lom->delete();
        return redirect('lom')->with('message','Lom is Deleted Successfully.');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);
        Excel::import(new LomsImport, request()->file('file'));
        return back()->with('message','Loms Imported Sucessfully.');;
    }

    public function export()
    {
        return Excel::download(new LomsExport, 'Loms.xlsx');
    }
}
