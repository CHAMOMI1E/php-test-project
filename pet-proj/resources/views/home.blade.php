@extends('base')

@section('main_content')
<div class="container mx-auto my-5 text-lg border border-gray" data-bs-theme="dark">
    <br>
    <ul class="list-unstyled">
    @if(request()->is('test'))
        try again
            @else
                @for($i=0; $i<7; $i++) <li><a href="#" class="link-primary" style="font-size: 25px;">Primary ссылка</a></li><br> @endfor
    @endif

</ul>
</div>
@endsection
