<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use Validator;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
    	$username_pelanggan = $request->username_pelanggan;
    	$password_pelanggan = md5($request->password_pelanggan);

    	$row = Pelanggan::where('username_pelanggan', $username_pelanggan)->where('password_pelanggan', $password_pelanggan)->where('status', '!=', 'Dihapus')->exists();
    	$rows = $row['exists'];

        $pelanggan = null;
        
    	if($row){
    		$success = true;
            $data = Pelanggan::where('username_pelanggan', $username_pelanggan)->where('password_pelanggan', $password_pelanggan)->get();

            $i = 0;
            foreach ($data as $key) {
                $pelanggan[0] = $key;
                $i++;
            }
    	} else {
    		$success = false;
    	}

		return response()->json([
		    'success' => $success,
		    'pelanggan' => $pelanggan
		]);
    }

    
    // fungsi register bukan ya ini john ?
    public function register(Request $request){
    	$validator = Validator::make($request->all(),[
            'nama_pelanggan' => 'required',
            'email_pelanggan' => 'required|unique:tb_pelanggan',
            'username_pelanggan' => 'required|unique:tb_pelanggan',
            'password_pelanggan' => 'required'
        ]);
        // hasil jsonnya bakalan diubah ?
        // yang ini nanti ada hubungannya sama android studio di value.java 
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan data'
            ]);
        } else {
            $pelanggan = null;
        	Pelanggan::create([
        	    'nama_pelanggan' => $request->nama_pelanggan,
        	    'email_pelanggan' => $request->email_pelanggan,
        	    'username_pelanggan' => $request->username_pelanggan,
        	    'password_pelanggan' => md5($request->password_pelanggan),
        	]);
        	return response()->json([
                'success' => true,
            ]);
        }

    }


    public function index()
    {
    	return response()->json([
            'result' => Pelanggan::all()
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
        $data = Pelanggan::where('id_pelanggan', $id)->get();

        $i = 0;
        foreach ($data as $key) {
            $pelanggan[0] = $key;
            $i++;
        }
    	return response()->json([
            'pelanggan' => $pelanggan,
        ]);
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
    	Pelanggan::where('id_pelanggan', $id)->update([
    	    'nama_pelanggan' => $request->nama_pelanggan,
    	    'email_pelanggan' => $request->email_pelanggan,
    	    'username_pelanggan' => $request->username_pelanggan

    	]);
    	return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelanggan::where('id_pelanggan', $id)->update([
            'status' => 'Dihapus'
        ]);
        return response()->json([
            'success' => true,
        ]);
    }
}
