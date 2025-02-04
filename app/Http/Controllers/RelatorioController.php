<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viatura;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    public function index()
    {
        $totalViaturas = Viatura::count();
        $concluidas = Viatura::where('estado', 'Concluído')->count();
        $porConcluir = Viatura::where('estado', '!=', 'Concluído')->count();
        $atendidasUltimoMes = Viatura::where('updated_at', '>=', Carbon::now()->subMonth())->count();

        return view('relatorios.index', compact('totalViaturas', 'concluidas', 'porConcluir', 'atendidasUltimoMes'));
    }
}
