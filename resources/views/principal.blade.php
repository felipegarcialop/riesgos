@extends('layouts.app')

@section('content')

 
@foreach ($datos as $dato)
<button>
    <a href="{{ route('informacion', $dato->id) }}" >{{ $dato->Nombre }}</a>
</button>    
@endforeach
<button class="btn">
    <a href="{{ route('temas.create') }}">
    <img src="/imagen/agregar.png" style="widht: 40px; height: 40px">
    </a>
</button>
@endsection