@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 articles-block">

                @foreach($articles as $article)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{$article->image}}" alt="" width="100%" height="225">
                            <div class="card-body">
                                <b><a href="{{ route('articles.show', $article->slug) }}" class="text-decoration-none">{{ $article->title }}</a></b>
                                <p class="card-text">{{ $article->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="date">{{ $article->created_at }}</div></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $articles->links() }}
        </div>
    </div>
@endsection
