@extends('base')

@section('content')
    <h1>Articles</h1>
    @foreach ($articles as $article)
        <article>
        <a href="{{ action('ArticlesController@show',[$article->id]) }}"><h2> {{ $article->title }}</h2></a>
        <div class="body">
            {{$article->body}}
        </div>
        </article>
    @endforeach
@endsection