<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FCM;


class FCMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertToken(Request $request){
    	$token = $request->token;
    	FCM::create([
    		'token' => $token
    	]);
    	return response()->json([
		    'success' => true
		]);

  //   	$username_pelanggan = $request->username_pelanggan;
  //   	$password_pelanggan = md5($request->password_pelanggan);

  //   	$row = Pelanggan::where('username_pelanggan', $username_pelanggan)->where('password_pelanggan', $password_pelanggan)->exists();
  //   	$rows = $row['exists'];

  //       $pelanggan = null;
        
  //   	if($row){
  //   		$success = true;
  //           $data = Pelanggan::where('username_pelanggan', $username_pelanggan)->where('password_pelanggan', $password_pelanggan)->get();

  //           $i = 0;
  //           foreach ($data as $key) {
  //               $pelanggan[0] = $key;
  //               $i++;
  //           }
  //   	} else {
  //   		$success = false;
  //   	}

		// return response()->json([
		//     'success' => $success,
		//     'pelanggan' => $pelanggan
		// ]);
    }

    
    public function sendPushNotification(Request $request){
      $url = 'https://fcm.googleapis.com/fcm/send';
      $fields = array (
              'registration_ids' => array (
                      "",
                      ""
              ),
              'data' => array (
                      "title" => $title,
                      "message" => $message
              )
      );
      $fields = json_encode ( $fields );

      $headers = array (
              'Authorization: key=' . "AAAADtdgGVg:APA91bESK-YASd1Qpxd644DdbxAX1DshlRTtyKSB-v3_sGt01BbaQYdJqe7UVI5HBLcKmOGx_-h48_i-AdFockKV3ZRKeXnZi1el6ciDZAGwPlZbcnM8nMaicqTKRo0b2T84hzJVzmHJ",
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
}
