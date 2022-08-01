<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    public function registro(RegisterRequest $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json([
            'message' => 'Usuario Registrado Correctamente'
        ],201);
    }

    public function acceso(AuthRequest $request){

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages([
                'message'=> ['Credenciales son Incorrectas']
            ]);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            "message" => "OK",
            "token" => $token
        ]);

    }

    public function salida( Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message'=> 'Has Salido del sistema'
        ]);
    }

}