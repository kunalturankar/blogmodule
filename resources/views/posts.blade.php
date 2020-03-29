@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success"><h5>POSTS</h5></div>
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">
                <a href="{{ route('post.view',['id'=>$post->id] ) }}" >
                {{ $post->post_title }}
                </a>
                </div>
                <div class="card-body">{{ $post->post_description }}</div>
            </div><br />
            @endforeach
        </div>
    </div>
</div>
@endsection
