<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $postData = $request->all();

        $oldUser = User::find($request->user()->id);

        if($oldUser->password == bcrypt($postData['oldPassword'])) {
            $affectedRows = User::where('id', '=', $request->user()->id)->update(array('password' => bcrypt($postData['newPassword'])));

            if($affectedRows > 0) {
                $data=array(
                    'currentUser' => $request->user(),
                    'error' => '修改密码成功',
                );
                return view('memberarea.password')->with($data);
            } else {
                $data=array(
                    'currentUser' => $request->user(),
                    'error' => '修改密码失败',
                );
                return view('memberarea.password')->with($data);
            }


        } else {
            $data=array(
                'currentUser' => $request->user(),
                'error' => '原密码输入错误，请重新输入',
            );
            return view('memberarea.password')->with($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
