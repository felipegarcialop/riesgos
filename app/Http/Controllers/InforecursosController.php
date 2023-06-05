<?php

namespace App\Http\Controllers;
use App\Models\Recurso;
use Illuminate\Http\Request;

class InforecursosController extends Controller
{
    //
    public function index()
    {
        $datos = Recurso::select('id', 'Nombre','Objetivo','Descripcion','id_tema')->get();
    
        return view('precursos', ['datos' => $datos]);
    }
}
