<div class="contact" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Quer saber mais?</h5>
                <p>
                    Ainda tem dúvidas sobre o UP Drive? Entre em contato com a gente, vamos adorar conversar com
                    você.
                </p>

                <ul class="info">
                    <li>
                        <span>E-mail</span>
                        <a href="mailto:contato@updrive.com.br">contato@updrive.com.br</a>
                    </li>

                    <li>
                        <span>Telefone</span>
                        <a href="tel:+5547996325522">47 99632 5522</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        Sua mensagem foi enviada com sucesso, retornaremos o mais breve possível :)
                    </div>
                @endif

                <form action="{{ action('HomeController@sendMail') }}#contato" method="POST">
                    <input type="hidden" name="_method" value="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Seu nome">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Seu e-mail">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <textarea name="message" class="form-control" rows="5" placeholder="Sua mensagem">
                            {{ old('message') }}
                        </textarea>
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                        {!! NoCaptcha::display() !!}
                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    </div>

                    <button class="btn btn-primary btn-rounded" type="submit">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>