@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card category-card text-white shadow overflow-hidden">
                        <img src="https://picsum.photos/500/300?random={{ $loop->index }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, 0.5)">
                            <h5 class="card-title text-white text-center">
                                <a href="/categories/{{ $category->slug }}" class="text-white text-decoration-none">
                                    {{ $category->name }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .category-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .category-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection
