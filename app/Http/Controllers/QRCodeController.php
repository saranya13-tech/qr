<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    // Display form
    public function showForm()
    {
        return view('qr-code-form');
    }

    // Generate QR Code
    public function generateQRCode(Request $request)
    {
        $data = $request->input('data');
        $animation = $request->input('animation');
        // Generate the QR code as a base64 image
        $qrCodeImage = QrCode::format('png')->size(200)->generate($data);
        $qrCodeBase64 = base64_encode($qrCodeImage);

        return view('qr-code-result', compact('qrCodeBase64', 'animation'));
    }
}
