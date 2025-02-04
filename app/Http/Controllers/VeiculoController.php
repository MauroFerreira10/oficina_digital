<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VeiculoController extends Controller
{
    public function atualizarEstado(Request $request, $id)
    {
        $request->validate([
            'codigo_validacao' => 'required|string',
            'estado' => 'required|string',
            'password' => 'required|string'
        ]);

        $veiculo = Veiculo::findOrFail($id);
        $user = Auth::user();

        // Verificar código de validação
        if ($veiculo->codigo_validacao !== $request->codigo_validacao) {
            return response()->json(['message' => 'Código de validação incorreto'], 403);
        }

        // Verificar senha do usuário
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Senha incorreta'], 403);
        }

        // Atualizar o estado do veículo
        $veiculo->estado = $request->estado;
        $veiculo->save();

        return response()->json(['message' => 'Estado da viatura atualizado com sucesso!'], 200);
    }
}
