<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormularioContacto;
use Illuminate\Support\Facades\Mail;
use Session;


class ContactanosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $correo = new FormularioContacto($request->all());
        Mail::to('pedroparkerd@gmail.com')->send($correo);

        // return view('welcome');
        Session::flash('success', 'Se envio su mensaje con éxito');
        return redirect()->route('/')->with('info', 'Mensaje Enviado');
    }
}
