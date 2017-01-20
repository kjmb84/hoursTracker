<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\hours;
use App\User;

class AjaxController extends Controller
{
    //
    public function getTimes($id) {

        //$times = hours::where('user_id', $id)->get();
        $times = "a b c d e f g h i jklmao";

        return $times;
        //return response()->json(array('times' => $times), 200);
    }
}
