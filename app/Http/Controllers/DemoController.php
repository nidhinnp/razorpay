<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function index(Request $request)
    {
        info($request->all());


        $signature = $request->header('Signature');
        $payloadJson = json_encode($request->all());
        info($signature);
//        info($request->secret);
//        info($request->signUsingSecret);
        $signature = hash_hmac('sha256', $payloadJson, $request->secret);
//        $demo = new Demo();
//        $demo->data = json_encode($request->all());;
//        $demo->save();

        return $this->success("Success.", 200);
    }

}
