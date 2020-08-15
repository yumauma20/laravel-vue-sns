@extends('app')

@section('title','記事一覧')

@section('content')
  @include('nav')
  <div class="container">
    @foreach($articles as $article)
      <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
        @include('articles.card')
      </a>
    @endforeach
  </div>
@endsection