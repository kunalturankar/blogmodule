@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success"><h5>SINGLE POST</h5></div>
            <div class="card">
                <div class="card-header">{{ $post->post_title }}</div>
                <div class="card-body">{{ $post->post_description }}
                
                <br />
                <hr />
                @foreach($post->comments as $comment)
                <div class="card">
                    <div class="card-header">{{ $comment->name }}</div>
                    <div class="card-body">{{ $comment->comment }}</div>
                </div><br />
                @endforeach
                </div>
            </div><br />
            
        </div>
    </div>
</div>
@endsection
