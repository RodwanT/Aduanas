<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function ShowContactos()
    {
        return view('contactos');
    }
}
