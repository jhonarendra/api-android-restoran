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
    	$fields = array(
    		'registration_ids' => $request->token,
    		'data' => $message
    	);
    	$headers = array(
    		'Authorization:key = YOUR_KEY',
    		'Content-Type: aplication/json'
    	);

    	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);
	    if ($result === FALSE) {
	       die('Curl failed: ' . curl_error($ch));
	    }
		curl_close($ch);
		   return $result;
		}

		$token = FCM::all();

		while ($row = mysqli_fetch_assoc($result)) {
			$tokens[] = $row["Token"];
		}

		$message = array("message" => " FCM PUSH NOTIFICATION TEST MESSAGE");
		$message_status = send_notification($tokens, $message);
    	return response()->json([
		    'message_status' => $message_status
		]);
    }
}
