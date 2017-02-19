@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>{{ $article->title }}</h3></div>
                    <div class="panel-body">
                        <img src="{{ $article->image }}" /><br><br>
                        {{ $article->content }}<br><br>

                        <strong>Article publié par : {{ $article->user->name }}</strong><br>

                        <br>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Modifier</a>

                        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete"><br>
                            <input type="submit" value="Supprimer" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection