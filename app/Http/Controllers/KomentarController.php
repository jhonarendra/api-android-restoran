<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Validator;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['komentar' => Komentar::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_pelanggan' => 'required',
            'isi_komentar' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false
            ]);
        } else {
            Komentar::create([
                'id_pelanggan' => $request->id_pelanggan,
                'isi_komentar' => $request->isi_komentar,
            ]);
            return response()->json([
                'success' => true
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['komentar' => Komentar::where('id_pelanggan',$id)->get()]);
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
        Komentar::where('id_komentar', $id)->delete();
        return response()->json(['success' => true]);
    }
}
