<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class PortalController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return view('portal.index', compact('servicos'));
    }
}
