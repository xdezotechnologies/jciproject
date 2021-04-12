<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileCreateRequest;
use Illuminate\Http\Request;

use App\Models\File as FileModel;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Input;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $files = new FileModel;
        $files = $files->latest()->get();

        return view('admin.files.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileCreateRequest $request)
    {
        $filename = str_replace(' ','',request('name'));
        $ext = $request->file_link->extension();
        $finalname = $filename.'_'.time().'.'.$request->file_link->extension();
        $request->file_link->move(public_path('uploads/files/'),$finalname);

        $file = new FileModel;
        $file->name = $request->name;
        $file->link = $finalname;
        $file->ext = $ext;

        $file->save();

        return redirect('file')->with('message','File Uploaded Successfully.');
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
        $file = new FileModel;
        $file = FileModel::where('id',$id)->first();
            $last_file = public_path().'/uploads/files/'.$file->link;
            File::delete($last_file);
            $file->delete();
            return redirect('file')->with('message','File is deleted Successfully.');
    }
}
