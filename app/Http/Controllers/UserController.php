<?php

namespace App\Http\Controllers;

use App\Models\User; // Agrega esta línea
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }
}