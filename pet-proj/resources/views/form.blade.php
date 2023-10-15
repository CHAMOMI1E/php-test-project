@extends('base')
@section('title_content')
    Add post
@endsection
@section('main_content')

    <div class="container mx-auto my-5 text-lg " data-bs-theme="dark">
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <form action="/add_post/valid" method="post">
            @csrf
            <div class="mb-3">
                <label for="theme" class="form-label">Название статьи</label>
                <input type="text" class="form-control" id="theme" name="theme" placeholder="smth">
            </div>
            <div class="mb-3">
                <label for="smth" class="form-label">Текст</label>
                <textarea class="form-control" id="smth" name="smth" rows="20" placeholder="smth"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-light btn-lg ml-auto">Send</button>
                <div class="ml-auto"></div>

            </div>

        </form>

    </div>
@endsection

