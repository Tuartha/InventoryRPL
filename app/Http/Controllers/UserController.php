<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function allUser() {
        return view("user");
    }

    function verifUser() {
        return view("verif_user");
    }
}
