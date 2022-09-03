<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function error($message, $status = 422, $error = null)
    {

        $response = ['success' => false, 'message' => $message];

        if ($error != null) {
            $response['error'] = $error;
        }
        return response()->json($response, $status);
    }

    public function success($message, $status = 200, $data = null)
    {

        $response = ['success' => true, 'message' => $message];
        if ($data != null) {
            $response['data'] = $data;
        }

        return response()->json($response, $status);
    }
}
