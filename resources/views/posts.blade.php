{{-- {!! dd($posts) !!} --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if($posts->count())
    <div class="card mb-3">
        {{-- <img src="https://dummyimage.com/1200x400/000/fff&text={{ urlencode($posts[0]->category->name) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}
        <img src="https://picsum.photos/1200/400" class="card-img-top img-fluid" alt="{{ $posts[0]->category->name }}" style="object-fit: cover; height: 400px;">
        <div class="card-body text-center">
          <h3 class="card-title text-truncate">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
              {{ $posts[0]->title }}
            </a>
          </h3>
          <p>
            <small class="text-muted">
                By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> 
                in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> 
                - {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-dark">Read More..</a>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container pb-5"> <!-- Tambahkan padding bawah -->
        <div class="row mb-4">
            @forelse ($posts->slice(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute w-100 text-center px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    {{-- <img src="https://dummyimage.com/1200x400/000/fff&text={{ urlencode($posts[0]->category->name) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}
                    <img src="https://picsum.photos/500/400" class="card-img-top img-fluid" alt="{{ $post->category->name }}" style="object-fit: cover; height: 250px;">
                    <div class="card-body">
                      <h5 class="card-title text-truncate">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                            By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                            - {{ $post->created_at->diffForHumans() }}
                        </small>
                      </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-light cta-btn">Read More..</a>
                    </div>
                </div>
            </div>
            @empty
                <p class="text-center fs-4 col-12">No post found.</p>
            @endforelse
        </div>
    </div>

    <style>
        .cta-btn {
                transition: all 0.3s ease-in-out;
            }
    
            .cta-btn:hover {
                background: black;
                color: white;
                transform: scale(1.1);
            }
    </style>
@endsection
