<x-layout page="Login">
    <section id="blog_section">
        <h1>Autenticação</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('user.login_action')}}">
            @csrf

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

            <x-form.form_button resetTxt="Limpar" SubmitTxt="Login" />
        </form>
    </section>
</x-layout> 