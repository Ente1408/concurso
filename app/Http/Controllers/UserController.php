<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|alpha',
                'lastname' => 'required|alpha',
                'document' => 'required|numeric|unique:users',
                'department_id' => 'required|numeric',
                'city_id' => 'required|numeric',
                'phone' => 'required|numeric',
                'email' => 'required|email|unique:users',
            ]);
    

        
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->document = $request->document;
            $user->department_id = $request->department_id; 
            $user->city_id = $request->city_id;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->habeas_data = ($request->habeas_data == 'on') ? true : false;
            $user->save();
        } catch (Exception $e) {
            return redirect('/')->with('error', 'Error al guardar el registro: ' . $e->getMessage());
        }

        return redirect('/')->with('success', 'Registro exitoso');
    }

    public function showWinner()
    {
        $users = User::all();

        if ($users->count() < 5) {
            return redirect('/')->with('error', 'No hay suficientes usuarios para seleccionar un ganador.');
        }

        $winner = $users->random();
        return view('winner', compact('winner'));
    }
}