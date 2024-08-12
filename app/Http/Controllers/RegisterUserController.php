<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create(){
   return view('auth.register');
    }

    public function store(Request $request){
 $validatedAttributes = $request->validate([

  'first_name'=> ['required','max:50'],
  'last_name'=> ['required','max:50'],
  'email'=> ['required','max:254','email'],
  'password'=> ['required',Password::min(6),'confirmed'],
 ]);
 $validatedAttributes['isAdmin'] = false;
$user = User::create($validatedAttributes);
Auth::login($user);
return redirect('/');
    }
};
