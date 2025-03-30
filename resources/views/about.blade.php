@extends('layouts.main')

@section('container')
    <div class="container text-center">
        <h1 class="mb-4">Tentang Saya</h1>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg p-4 rounded">
                    <img src="{{ asset('img/' . $image) }}" alt="{{ $name }}" class="img-fluid rounded-circle shadow-lg mb-3 mx-auto d-block" width="150">
                    
                    <h3 class="mt-3">{{ $name }}</h3>
                    <p class="text-muted">{{ $email }}</p>

                    <p class="text-center">
                        Saya adalah seorang pengembang web yang tertarik dalam pengembangan teknologi dan desain UI/UX. Saya memiliki pengalaman dalam menggunakan Laravel, Bootstrap, dan berbagai teknologi modern lainnya.
                    </p>

                    <div class="mt-3">
                        <a href="https://github.com/nazrfjri" class="btn btn-dark me-2" target="_blank">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                        <a href="mailto:{{ $email }}" class="btn btn-light">
                            <i class="bi bi-envelope-fill"></i> Hubungi Saya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
