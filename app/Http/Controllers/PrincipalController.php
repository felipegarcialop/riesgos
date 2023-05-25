<?php

namespace App\Http\Controllers;
use App\Models\Tema;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index()
{
    $datos = Tema::select('id', 'Nombre')->get();

    return view('principal', ['datos' => $datos]);
}

}
