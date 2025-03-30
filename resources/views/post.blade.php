{{-- {!! dd($post) !!} --}}

@extends('layouts.main')

@section('container')
<div class="container min-vh-100 d-flex flex-column pb-5">
    <div class="row flex-grow-1 justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {{-- <img src="https://dummyimage.com/1200x400/000/fff&text={{ urlencode($post->category->name) }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
            <img src="https://picsum.photos/1200/400" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="btn btn-dark mt-4">Back to Posts</a>
        </div>
    </div>
</div>
     
@endsection