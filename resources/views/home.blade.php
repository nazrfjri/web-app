@extends('layouts.main')

@section('container')
    <div class="hero position-relative text-center text-white">
        <img src="https://picsum.photos/1600/900?random=1" class="img-fluid hero-img" alt="Hero Image">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="fw-bold">Selamat Datang di Website Kami</h1>
            <p class="lead">Temukan berbagai informasi menarik dan terbaru di sini.</p>
            <a href="/blog" class="btn btn-light btn-lg mt-3 cta-btn">Lihat Artikel</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-3 shadow-lg">
                    <img src="https://picsum.photos/500/300?random=2" class="card-img-top" alt="Artikel Terbaru">
                    <div class="card-body">
                        <h4 class="mt-3">Artikel Terbaru</h4>
                        <p>Baca artikel terbaru dan temukan wawasan baru.</p>
                        <a href="/blog" class="btn btn-danger btn-sm">Baca Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-lg">
                    <img src="https://picsum.photos/500/300?random=3" class="card-img-top" alt="Kategori">
                    <div class="card-body">
                        <h4 class="mt-3">Kategori</h4>
                        <p>Jelajahi berbagai kategori yang tersedia.</p>
                        <a href="/categories" class="btn btn-primary btn-sm">Lihat Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-lg">
                    <img src="https://picsum.photos/500/300?random=4" class="card-img-top" alt="Tentang Kami">
                    <div class="card-body">
                        <h4 class="mt-3">Tentang Kami</h4>
                        <p>Pelajari lebih lanjut tentang tim kami.</p>
                        <a href="/about" class="btn btn-success btn-sm">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hero {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(50%);
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
        }

        .cta-btn {
            transition: all 0.3s ease-in-out;
        }

        .cta-btn:hover {
            background: black;
            color: white;
            transform: scale(1.1);
        }

        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
