@extends('layouts.app')

@section('content')

@foreach ($datos as $dato)
    <button>
    <a href="{{ route('iayuda', $dato->id) }}" style="color: black">{{ $dato->Nombre }}</a>
    </button>
@endforeach
<button class="btn">
    <a href="{{ route('apoyos.create') }}">
    <img src="/imagen/agregar.png" style="widht: 40px; height: 40px">
    </a>
</button>
@endsection