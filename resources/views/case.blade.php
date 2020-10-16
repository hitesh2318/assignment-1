@extends('layout')
@section('content')

@foreach ($posts as $post)
<div class="col-md-4">
    <div class="feature">
        <header>
            <img src="images/icon-1.png" class="feature-icon">
            <div class="feature-title-copy">
                <h2 class="feature-title">{{$post->title}}</h2>
                <small class="feature-subtitle">{{$post->created_at}}</small>
            </div>
        </header>
    <p>{{$post->description}}</p>
        <a href="#" class="more-link">Read More</a>
    </div>
</div>
@endforeach

    
@endsection