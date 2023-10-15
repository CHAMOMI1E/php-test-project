@extends('base')
@section('title_content')
    Home page
@endsection
@section('main_content')
    <div class="container mx-auto my-5 text-lg " data-bs-theme="dark">
        <figure class="text-center">

            <br>
            <ul class="list-unstyled">
                @foreach($posts as $post)
                    <li class="list-group-item"><a href="/read/{{$post->id}}"
                                                   class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                                   style="font-size: 30px;">{{$post->theme}}</a></li>
                    <p>{{ $post->text }}</p>
                    <hr>
                @endforeach




            </ul>
        </figure>
    </div>
@endsection
