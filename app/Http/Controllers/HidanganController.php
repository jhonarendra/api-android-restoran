<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hidangan;
use Validator;

class HidanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // fungsi insert menu baru
    public function menubaru(Request $request){
        $validator = Validator::make($request->all(),[
            'nama_hidangan' => 'required',
            'deskripsi_hidangan' => 'required',
            'harga_hidangan' => 'required',
            'kategori_hidangan' => 'required',
            'foto_hidangan' => 'required',
        ]);
            // data validator untuk proses validasi data 
            //if success
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'gagal tambah data'
            ]);
            // if not 
        } else {
            Hidangan::create([
                'nama_hidangan' => $request->nama_hidangan,
                'deskripsi_hidangan' => $request->deskripsi_hidangan,
                'harga_hidangan' => $request->harga_hidangan,
                'kategori_hidangan' => $request->kategori_hidangan,
                'foto_hidangan'=>$request->foto_hidangan
            ]);
            // respon dalam bentuk json
            return response()->json([
                'success' => true,
                'message' => 'data sudah masuk'
            ]);
        }
    }

    

   

        
    



    public function index()
    {
        return response()->json([
            'hidangan' => Hidangan::all()
        ]);
    }

    public function menuLimit(){
        return response()->json([
            'hidangan' => Hidangan::limit(5)->get()
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
        $hidangan = Hidangan::where('id_hidangan',$id)->get();
        return response()->json(['hidangan' => $hidangan]);
    }
    public function showKategori($id)
    {
        $hidangan = Hidangan::where('kategori_hidangan',$id)->get();
        return response()->json(['hidangan' => $hidangan]);
    }
    public function showLimitKategori($id)
    {
        $hidangan = Hidangan::where('kategori_hidangan',$id)->limit(4)->get();
        return response()->json(['hidangan' => $hidangan]);
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
        Hidangan::where('id_hidangan', $id)->update([
            'nama_hidangan' => $request->nama_hidangan,
            'harga_hidangan' => $request->harga_hidangan,
            'deskripsi_hidangan' => $request->deskripsi_hidangan
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
        Hidangan::where('id_hidangan', $id)->update([
            'status' => 'Dihapus'
        ]);
        return response()->json([
            'success' => true               
        ]);

    }
}
