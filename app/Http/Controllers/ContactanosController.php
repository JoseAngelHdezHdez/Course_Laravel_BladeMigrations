<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contactanos;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new Contactanos($request->all());

        Mail::to('up190440@alumnos.upa.edu.mx')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');
    }
}
