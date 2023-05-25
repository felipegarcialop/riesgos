<?php

namespace App\Http\Controllers;
use App\Models\Tema;
use Illuminate\Http\Request;

class InformaController extends Controller
{
    //
    public function show($id)
{
    $dato = Tema::findOrFail($id);

    return view('informacion', ['dato' => $dato]);
}

}
