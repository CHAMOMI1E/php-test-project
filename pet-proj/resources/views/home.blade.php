@extends('base')
@section('title_content')
    Home page
@endsection
@section('main_content')
    <div class="container mx-auto my-5 text-lg " data-bs-theme="dark">
        <figure class="text-center">

            <br>
            <ul class="list-unstyled">
                @if(request()->is('test'))
                    try again
                @else
                    <li class="list-group-item"><a href="#"
                                                   class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                                   style="font-size: 30px;">Primary ссылка</a></li>
                    <p>Hello, World!</p>
{{--                    {{ str_limit($text, $limit = 100, $end = '...') }}--}}
                    <hr>
                @endif

            </ul>
        </figure>
    </div>
@endsection
