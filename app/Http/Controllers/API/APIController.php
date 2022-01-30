<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(Request $request)
    {
        if( fsockopen( $request->search , 80 , $errno , $errstr , 30 ) ){
            return response()->json(["message"=>"Site online"],200);
        } else {
            return response()->json(["message"=>"Site offline"],500);
        }
    }
}
