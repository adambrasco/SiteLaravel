@extends('layouts.app')

@section('content')
    <html lang="{{ config('app.locale') }}">
    <head>
        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

        <style>
            html, body {

                color: #636b6f;
                font-family: 'Indie Flower', cursive;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('messages.success')
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Liste des articles</h3></div>

                    <div class="panel-body">
                        <ul><h4>
                            @foreach($articles as $article)
                                <li><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></li>
                            @endforeach
                            </h4>
                        </ul>

                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection