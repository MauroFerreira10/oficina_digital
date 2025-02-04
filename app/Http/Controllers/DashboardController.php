<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        // Se desejar, remova o dd() depois que confirmar os dados
        // dd($servicos);
        return view('dashboard', compact('servicos'));
    }
}

