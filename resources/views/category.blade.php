@extends('template')

@section('container')
    <h1>Category : {{ $category }}</h1>

    @foreach($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: <a href="/authors/{{ $article->user->username }}" class="text-decoration-none"> {{ $article->user->name }} </a></h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection