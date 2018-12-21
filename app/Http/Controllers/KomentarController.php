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
            // $this->sendPushNotification($title, $message);
        }
    }

    public function sendPushNotification(/*$title, $message*/){
      $url = 'https://fcm.googleapis.com/fcm/send';
      $title="HALOO";
      $message="Inibodymessagenya";
      $fields = array (
              'registration_ids' => array (
                      "d-lXURdftII:APA91bEAyjpdX75Qngcl7ZzDLKWoVpAsbgwxKVh_ttUSD6j1Zixl3mhhygWqH9sBLCW2y_8o8XvI4Abne679bGniZPkzpyp7fOI32qNXtpiUu8wYAX9n9hNZmPIivSz-ELlTg9i83pyf",
                      
              ),
              'data' => array (
                      "title" => $title,
                      "message" => $message
              )
      );
      $fields = json_encode ( $fields );

      $headers = array (
              'Authorization: key=' . "AAAADtdgGVg:APA91bESK-YASd1Qpxd644DdbxAX1DshlRTtyKSB-v3_sGt01BbaQYdJqe7UVI5HBLcKmOGx_-h48_i-AdFockKV3ZRKeXnZi1el6ciDZAGwPlZbcnM8nMaicqTKRo0b2T84hzJVzmHJ ",
              'Content-Type: application/json'
      );

      $ch = curl_init ();
      curl_setopt ( $ch, CURLOPT_URL, $url );
      curl_setopt ( $ch, CURLOPT_POST, true );
      curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
      curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
      curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

      $result = curl_exec ( $ch );
      echo $result;
      curl_close ( $ch );
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
        $validator = Validator::make($request->all(),[
            'isi_komentar' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false
            ]);
        } else {
        	Komentar::where('id_komentar', $id)->update([
        		'isi_komentar' => $request->isi_komentar
        	]);
            // Komentar::update([
            //     'id_pelanggan' => $request->id_pelanggan,
            //     'isi_komentar' => $request->isi_komentar,
            // ]);
            return response()->json([
                'success' => true
            ]);
        }
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
        return response()->json([
            'success' => true
        ]);
    }
}
