<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Se for necessário

class UserController extends Controller
{
    public function index()
    {
        return view('users.index'); // Exemplo de retorno
    }
}
