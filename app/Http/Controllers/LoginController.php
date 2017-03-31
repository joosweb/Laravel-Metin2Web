<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function getLogin(Request $request)
    {
        /**
         * Mysql 5.* password() replacement.
         *
         * @param $password
         * @return string
         */
        $password = '*' . strtoupper(sha1(sha1($request["password"], true)));

        if ($Account = Account::where('login', $request['login'])->where('password', $password)->first()) {
            Auth::loginUsingId($Account->id, true);
            return redirect()->intended('/');
        } else {
            return redirect()->intended('/')->with('error', 'Error de inicio de sesión');
        }
    }
}
