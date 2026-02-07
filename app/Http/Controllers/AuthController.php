<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        $data['title'] = "Some Shop";
        return view ('login', $data);
    }
    public function loginHandle(Request $r) {
        $validateData = $r->validate(
            [
                'login' => ['required', 'exists:users', 'max:15'],
            ],[
            'login.exists'=>'This login does not exist',
            ]);
        $successful= Auth::attempt(['login'=>$r->login,'password'=>$r->pass],$r->rememberMe);
        if ($successful) {
            return redirect('/admin');
        }
        return redirect('/login')->withErrors(['password.check'=>'Password incorrect']);
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
 
    public function cabinet() {
        $data['title'] = "some shop";
        return view('cabinet', $data);
    }
  
}
