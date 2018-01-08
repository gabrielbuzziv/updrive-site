@extends('layout.demo')

@section('page_id', 'demo')
@section('content')
    <div class="demo">
        <div class="container">
            <h2>Experimente o UP Drive</h2>

            <p>
                Gostariamos de deixá-lo <b>experimentar</b> nossa ferramenta durante <b>30 dias</b>, respondendo suas dúvidas e ajudando a entender
                porque o UP Drive é <b>ideal para sua empresa</b>.
            </p>

            <form action="{{ action('DemoController@request') }}" method="POST">
                <input type="hidden" name="_method" value="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="required" for="name">Nome Completo</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" autofocus>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="required" for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label class="required" for="phone">Telefone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                </div>

                <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                    <label class="required" for="company">Empresa</label>
                    <input type="text" name="company" id="company" class="form-control" value="{{ old('company') }}" placeholder="ex: Acme LTDA">
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                </div>

                <div class="form-group margin-top-15 margin-bottom-20 {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>

                <small>
                    Solicitar uma demonstração adicionará você em nossa lista de e-mails.
                    Você poderá se desinscrever a qualquer momento.
                </small>



                <button class="btn btn-primary">
                    Solicitar Agora
                </button>
            </form>
        </div>
    </div>
@endsection