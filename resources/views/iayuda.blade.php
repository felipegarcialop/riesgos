@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Descripción</title>
</head>
<body>
    <h2>{{ $dato->Nombre }}</h2>
    <p>{{ $dato->Descripcion }}</p>
    <p>{{ $dato->Direccion}}</p>
    <p>{{ $dato->Telefono}}</p>
    <p>{{ $dato->Correo}}</p>
    
</body>
</html>
@endsection