<?php

namespace App\Http\Controllers;

use App\Mail\CorreoAduanas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarCorreoController extends Controller
{
    public function EnviarCorreo(Request $request)
    {
        Mail::to('testcenteraduanero@gmail.com')->send(new CorreoAduanas($request->all()));

        return redirect()->route("contactos")->with('success', '¡Correo enviado correctamente!');
    }
}
