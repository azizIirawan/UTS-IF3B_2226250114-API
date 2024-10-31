<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $user = user::all();
        $succes['data'] = $user;
        return $this->sendResponse($succes, 'Data user.');
    }
}
