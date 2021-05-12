<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class LetterController extends Controller
{
    public function index(Request $request) {
        // $user = DB::table('users')
        // ->where('name', '=', $request->input('name'))
        // ->where('email', '=', $request->input('email'))
        // ->get();
        // if (!empty($user)) {
        //     $pass = $user->password;
        //     if ($pass == $request->input('password')) {
        //         return 'login!';
        //     }
        // }
        return $request;
    }
}

