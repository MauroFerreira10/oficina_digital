<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        // Recupera todos os serviços cadastrados
        $servicos = Servico::all();
        return view('servicos.index', compact('servicos'));
    }
}
