<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Http\Requests\API\AuthRequest;
use App\Http\Requests\API\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
        // Capturar el usuario
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages(['message'=> ['Credenciales son Incorrectas']]);
        }
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            "message" => "Bienvenido, ".$user->name,
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