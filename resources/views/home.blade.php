@extends('layouts.app')

@section('content')

<style>
    div1{
        height: 200px;
        background-color: #EEE;
        display:flex;
        justify-content: center;
        align-items: center;
    }
</style> 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="card" style="border:none; background-color: #f8fafc">
                        <div class="card-body">
                            <h2 class="card-title text-center">Riesgos en internet</h2>
                            <p class="card-text text-center">
                                <font size="3" color="#000000"> Bienvenido al sitio informativo sobre los malos usos de internet.
                                    En este sitio encontrarás información detallada sobre las distintas formas en que internet puede ser mal utilizado y cómo protegerse de ellas.
                                </font>
                            </p>
                        </div>
                        <img src="/imagen/internet.png" class="card-img-bottom" style="wheight: 450px; height: 350px">
                    </div> 
                </div>         
            </div>
        </div>  
    </div>
</div>
@endsection
