<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
class UserController extends Controller {
    public function showRegisterForm()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'document' => 'required|numeric|unique:users',
            'department' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'habeas_data' => 'required|boolean',
        ]);
 
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->document = $request->document;
        $user->department = $request->department;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->habeas_data = $request->habeas_data;
        $user->save();
 
        return redirect('/')->with('success', 'Registro exitoso');
    }

    public function showWinner() {
        $users = User::all();
 
        if ($users->count() < 5) {
            return redirect('/')->with('error', 'No hay suficientes usuarios para seleccionar un ganador.');
        }
 
        $winner = $users->random();
        return view('winner', compact('winner'));
    }
 
 
}
