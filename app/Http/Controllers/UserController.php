<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function index() {
        return view('welcome');
    }

     public function principal() {
        return view('principal');
    }
    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             return view('principal');
        }else{
            dd('Voce não esta logado');
        }
    }

}
