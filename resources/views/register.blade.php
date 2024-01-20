<x-layout page="Login">


    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            voltar
        </a>
    </x-slot:btn>

    
    <section id="blog_section">
        <h1>Registre-se</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf

            <x-form.text_input
            type="name"
            name="name"
            Label="Seu nome"
            placeholder="Digite seu nome"/>

            <x-form.text_input
            type="email"
            name="email"
            Label="Seu email"
            placeholder="Digite seu email"/>

            <x-form.text_input
            type="password"
            name="password"
            Label="Sua senha"
            placeholder="Digite sua senha"/>

            <x-form.text_input
            type="password"
            name="password_confirmation"
            Label="Confirme sua senha"
            placeholder="Confirme sua senha"/>

            <x-form.form_button resetTxt="Limpar" SubmitTxt="Registrar-se" />
        </form>        
    </section>
</x-layout>