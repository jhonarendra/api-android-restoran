<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //login buat pegawai
    public function login(Request $request){
        $username_pegawai = $request->username_pegawai;
        $password_pegawai = md5($request->password_pegawai);

        $row = Admin::where('username_pegawai', $username_pegawai)->where('password_pegawai', $password_pegawai)->exists();
        $rows = $row['exists'];
        
        $admin = null;

        if($row){
            $success = true;
            $data = Admin::where('username_pegawai', $username_pegawai)->where('password_pegawai', $password_pegawai)->get();

            $i = 0;
            foreach ($data as $key) {
                $admin[0] = $key;
                $i++;
            }
        } else {
            $success = false;

        }
        return response()->json([
            'success' =>$success,
            'admin' =>$admin
        ]);
    }

    public function index()
    {   
        return response()->json([
            'result' => Admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
