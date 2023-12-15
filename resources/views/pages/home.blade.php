<p>test<p>

@extends('layouts.app')

@section('content')
    
    @foreach ($posts as $post)
        <div class="post">
            <h3>{{ $post->subject }}</h3>
            <p>{{ $post->content }}</p>
            <p>Naam van de user: {{ $post->user->name }}</p>
            
            <div class="comments">
                @foreach ($post->comments as $comment)
                    <div class="comment">
                        <p>{{ $comment->content }}</p>
                        <p>Naam van de user: {{ $comment->user->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
