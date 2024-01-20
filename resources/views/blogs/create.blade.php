<x-layout page="Login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            voltar
        </a>
    </x-slot:btn>


    <section id="blog_section">
        <h1>Criar Blog</h1>
        <form method="POST" action="{{route('blog.crate_action')}}">
            @csrf
            
            <x-form.text_input name="title" Label="Titulo do blog" placeholder="Digite o titulo do seu blog"/>
            {{-- <x-form.text_input type="datetime-local" name="due_date" Label="Data de realização" placeholder="Digite o titulo da sua tarefa"/> --}}
            {{-- <x-form.select_input name="category_id" Label="Categoria" placeholder="Digite o titulo da sua tarefa">  --}}
            {{-- @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach --}}
            {{-- </x-form.select_input> --}}

            <x-form.textarea_input name="description" label="Descrição do blog" placeholder="Digite a descrição do seu blog" />
            <x-form.form_button resetTxt="Resetar" SubmitTxt="Criar Blog" />
            
        </form>
    </section>
</x-layout>