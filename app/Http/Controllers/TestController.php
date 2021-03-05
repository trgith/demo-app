<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function show()
    {
        $test = Test::all();
        return view('test')->with('test', $test);
    }

    public function save(Request $request){
        $data = $request->all();
        return response()->json(['response'=>$data]);
    }

    public function validateUser(Request $request){
        return $request->email;
    }
}
