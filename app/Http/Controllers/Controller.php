<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function reset(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'token' => 'required',
        'password' => 'required|confirmed|min:8',
    ]);

    $reset = DB::table('password_resets')
                ->where('email', $request->email)
                ->first();

    if (!$reset || !Hash::check($request->token, $reset->token)) {
        return response()->json(['error' => 'Token tidak valid.'], 400);
    }

   
    $user = User::where('email', $request->email)->first();
    $user->password = Hash::make($request->password);
    $user->save(); 


    DB::table('password_resets')->where('email', $request->email)->delete();

    return response()->json(['message' => 'Password berhasil direset.']);
}

}
