@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
            @endif
            
            <div class="card">
                <div class="card-header">
                    Add Post
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('save.post') }}" method="POST" />
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" value="{{ old('post_title') }}" required autocomplete="post_title" autofocus>

                                            @error('post_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="post_description" class="col-md-4 col-form-label text-md-right">{{ __('Post Description') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="post_description" class="form-control @error('post_description') is-invalid @enderror" rows="6" name="post_description" required autocomplete="post_title">{{ old('post_title') }}</textarea>

                                            @error('post_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10" align="right">
                                            <input id="save_post" type="submit" class="btn btn-primary @error('save_post') is-invalid @enderror" name="save_post" value="Save Post">

                                            @error('post_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
