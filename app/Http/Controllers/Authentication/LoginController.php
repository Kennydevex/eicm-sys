<?php

namespace EICM\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use EICM\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
  public function authenticate()
  {
    if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
      // Authentication passed...
      return redirect()->intended('dashboard');
    }

    //A opção que vamos dotar: É calro temos de declarar a variavel $request como parametro da função
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      // Authentication passed...
      return redirect()->intended('dashboard');
      //return redirect()->route('dashboard');
    }

    /*if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
      // The user is active, not suspended, and exists.
    }*/
  }
}
