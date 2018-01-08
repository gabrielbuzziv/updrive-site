@extends('layout.demo')

@section('page_id', 'demo')
@section('content')

    <div class="demo">
        <div class="container">
            <div class="demo-congratulation">
                <h2>Parabéns por dar o primeiro passo!</h2>

                <p>
                    Ficamos felizes por você dar o seu primeiro passo para o sucesso. <br>
                    Em breve entraremos em contato para agendarmos a demonstração do UP Drive para você.
                </p>

                <a href="{{ action('HomeController@index') }}" class="btn btn-primary">
                    Saiba mais sobre o UP Drive
                </a>
            </div>
        </div>
    </div>

@endsection