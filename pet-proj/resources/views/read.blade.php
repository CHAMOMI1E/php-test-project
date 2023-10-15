@extends('base')
@section('title_content')
    Чтение
@endsection
@section('main_content')
    <div class="container mx-auto my-5 text-lg " data-bs-theme="dark">

        <h1>{{$post->theme}}</h1>
        <p>{{$post->text}}</p>
    </div>
@endsection
