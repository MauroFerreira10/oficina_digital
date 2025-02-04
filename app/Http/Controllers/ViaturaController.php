<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viatura;

class ViaturaController extends Controller
{
    public function index()
    {
        $viaturas = Viatura::all();
        return view('viaturas.index', compact('viaturas'));
    }

    public function create()
    {
        return view('viaturas.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'marca' => 'required|string',
        'modelo' => 'required|string',
        'cor' => 'required|string',
        'tipo' => 'required|string',
        'estado' => 'required|string',
        'tipo_avaria' => 'nullable|string',
    ]);

    $codigoValidacao = strtoupper(substr(md5(uniqid()), 0, 10)); // Gera um código aleatório

    Viatura::create([
        'marca' => $request->marca,
        'modelo' => $request->modelo,
        'cor' => $request->cor,
        'tipo' => $request->tipo,
        'estado' => $request->estado,
        'tipo_avaria' => $request->tipo_avaria,
        'codigo_validacao' => $codigoValidacao, // Adiciona o código aleatório
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('cliente.viaturas')->with('success', 'Viatura registrada com sucesso!');
}


    public function edit(Viatura $viatura)
    {
        
        return redirect()->route('viaturas.edit', ['viatura' => $viatura->id]);

    }

    public function update(Request $request, Viatura $viatura)
    {
        $request->validate([
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'cor' => 'required|string|max:20',
            'tipo' => 'required|string|max:50',
            'estado' => 'required|string|max:50',
            'tipo_avaria' => 'required|string|max:100',
        ]);

        $viatura->update($request->all());

        return redirect()->route('viaturas.index')->with('success', 'Viatura atualizada com sucesso!');
    }

    public function destroy(Viatura $viatura)
    {
        $viatura->delete();
        return redirect()->route('viaturas.index')->with('success', 'Viatura removida!');
    }
}
