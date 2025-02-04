<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use App\Models\Preco;

class DashboardController extends Controller
{
    public function index()
    {
        $precos = Preco::all(); // Busca todos os preços do banco de dados
        return view('dashboard', compact('precos')); // Envia os preços para a view
    
       $servicos = Servico::all();
        return view('dashboard', compact('servicos'));
    }
    

    
   
}








