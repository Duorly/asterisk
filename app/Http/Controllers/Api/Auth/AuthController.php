<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\VicidialUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //

    public function authenticate(Request $request){

        $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        // $user = User::where('email', $request->email)->first();

        $user = VicidialUser::where('user', $request->user)->first();

        if (! $user || ! ($request->pass == $user->pass) ) {
            return [
                'status' => 'error',
                'token' => 'identifiant ou mot de passe incorrect',
            ];
        }



        // if (! $user || ! Hash::check($request->password, $user->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }

        return [
            'status' => 'success',
            'token' => $user->createToken($request->pass)->plainTextToken
        ];


    }
}
