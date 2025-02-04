<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preco;

class PrecoController extends Controller
{
    public function index()
    {
        $precos = Preco::all();
        return view('precos.index', compact('precos'));
    }
}
