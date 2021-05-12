<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request) {
        $user = User::where('name', '=', $request->input('name'))
        ->where('email', '=', $request->input('email'))
        ->first();
        if (!empty($user)) {
            $pass = $user["password"];
            if ($pass == $request->input('password')) {
                return 'login!';
            }
        }
        return $request;
    }
}

