<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\hours;
use App\User;
use Response;

class AjaxController extends Controller
{
    //
    public function getTimes($id, Request $request) {

        //$times = hours::all();
        //$times = hours::where('user_id', $id)->get();
        //$hours = new hours;
        //$times = hours::all();
        //return Response::json($hours->all());
        //return $hours->all();
//        if ($request->isMethod('post')) {
//            //return "a b c d e f g h i jklmao";
//            return hours::where('user_id', $id)->get();
//        }
        return hours::where('user_id', $id)->get();

        //return Response::json(array('msg' => 'test');

        return $times;
        //return response()->json(array('times' => $times), 200);
    }
}
