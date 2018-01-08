@component('mail::message')
    # Contato através do site

    Nome: {{ $name }}
    E-mail: {{ $email }}
    Mensagem:
    {{ $message }}
@endcomponent