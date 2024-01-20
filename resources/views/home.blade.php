<x-layout>

    <x-slot:btn>
        <a href="{{route('blog.create')}}" class="btn btn-primary">
            Criar Blog 
        </a>

        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>

    <section id="blog_section">
        <h1>Meus Blogs</h1>

        @foreach ($userBlogs as $blog)
            <div class="blog-container">
                <h4 class="blog-title">{{ $blog->title }}</h4>
                <p class="blog-description">{{ $blog->description }}</p>
            </div>
        @endforeach
    </section>
</x-layout>
