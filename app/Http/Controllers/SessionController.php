<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create(){
        return view("auth.login");
    }

    public function store(Request $request){
       request()->validate([
        'email'=>['required','email'],
        'password'=>['required',''],
       ]);
       $password = $request->password;
       $email = $request->email;
       $isLoginSucced = Auth::attempt(['email'=>$email,'password'=>$password]);
       if(! $isLoginSucced){
  throw ValidationException::withMessages(['email'=>'Invalid credentials']);

       }else{
        $request->session()->regenerate();
        return redirect('/jobs');
       }
    }

    public function destroy(Request $request){
        Auth::logout();
        return redirect("/");
   }

}
