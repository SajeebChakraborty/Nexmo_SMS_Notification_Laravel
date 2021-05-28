<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;

class SmsController extends Controller
{
    public function send_message()
	{

		Nexmo::message()->send([
	    'to'   => '8801824072334',
	    'from' => '8801824072334',
	    'text' => 'Just Test SMS Notification'
		]);

		return "SMS send successfully";


	}
}
