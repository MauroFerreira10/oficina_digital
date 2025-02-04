<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viatura;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function gerarQRCode($id)
    {
        $viatura = Viatura::findOrFail($id);

        $dadosQR = [
            'Oficina' => 'Oficina XYZ',
            'Endereço' => 'Avenida Principal, 123',
            'Data de Saída' => $viatura->updated_at->format('d/m/Y'),
        ];

        $qrCode = QrCode::size(300)->generate(json_encode($dadosQR));

        return view('qrcode.viatura', compact('viatura', 'qrCode'));
    }
}
