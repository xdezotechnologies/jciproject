<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;

use App\Models\User;

class AjaxController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->paginate(8);

        return view('list',$data);
    }

    public function show($id)
    {
        $where = array('id' => $id);
        $user  = User::where($where)->first();

        return Response::json($user);
    }
}
