<?php

namespace App\Http\Controllers;

use App\Exports\HotelsExport;
use App\Http\Requests\HotelCreateRequest;
use Illuminate\Http\Request;

use App\Models\Hotel;

use App\Imports\HotelsImport;

use Maatwebsite\Excel\Facades\Excel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels = new Hotel;
        $hotels = $hotels->latest()->get();
        return view('admin.hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelCreateRequest $request)
    {
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->website = $request->website;

        $hotel->save();

        return redirect('hotel')->with('message','Hotel is Added Successfully.');
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
        $hotel = new Hotel;
        $hotel = $hotel->where('id',$id)->first();
        return view('admin.hotels.create',compact('hotel'));
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
        $hotel = Hotel::where('id',$id)->first();
        $hotel->name = $request->name;
        $hotel->website = $request->website;
        $hotel->update();
        return redirect('hotel')->with('message','Hotel is Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::where('id',$id)->first();
        $hotel->delete();
        return redirect('hotel')->with('message','Hotel is Deleted Successfully.');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);
        Excel::import(new HotelsImport, request()->file('file'));
        return back()->with('message','Hotels Imported Sucessfully.');;
    }

    public function export()
    {
        return Excel::download(new HotelsExport, 'hotels.xlsx');
    }
}
