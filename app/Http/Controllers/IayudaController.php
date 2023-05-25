<?php

namespace App\Http\Controllers;
use App\Models\Apoyo;
use Illuminate\Http\Request;

class IayudaController extends Controller
{
    //
    public function show($id)
{
    $dato = Apoyo::findOrFail($id);

    return view('iayuda', ['dato' => $dato]);
}

}
