<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\hours;

class HoursController extends Controller
{
    public function showAll () {

        $users = User::all();

        return view('unorganized', compact('users'));
    }

    public function show ($id) {

        $user = User::find($id);
        //return $user;

        return view('organized', compact('user'));
    }

    public function listAllUsers() {
        $users = User::all();

        return view('users', compact('users'));
    }
}
