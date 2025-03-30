<nav class="navbar navbar-expand-lg navbar-dark shadow-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">ctOS 2.0</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') || Request::is('posts/*') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('categories') || Request::is('categories/*') ? 'active' : '' }}" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/categories/web-programming">Web Programming</a></li>
                        <li><a class="dropdown-item" href="/categories/web-design">Web Design</a></li>
                        <li><a class="dropdown-item" href="/categories/personal">Personal</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Warna gradasi biru gelap */
    .navbar {
        background: linear-gradient(135deg, #0a192f, #162447);
    }

    /* Hover efek pada navbar item */
    .navbar-nav .nav-link {
        transition: all 0.3s ease-in-out;
        padding-bottom: 5px;
        border-bottom: 2px solid transparent;
    }

    /* .navbar-nav .nav-link:hover {
        border-bottom: 2px solid rgba(255, 255, 255, 0.8);
    } */

    /* Indikator aktif lebih jelas */
    .navbar-nav .nav-link.active {
        font-weight: bold;
        border-bottom: 2px solid #f8d210;
    }

    /* Efek hover dropdown */
    .dropdown-menu {
        background: #162447;
        border: none;
    }

    .dropdown-item {
        color: white;
    }

    .dropdown-item:hover {
        background: #7d95b4;
    }

    /* Sticky navbar agar tetap di atas */
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
</style>

{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-blue">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">ctOS 2.0</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') || Request::is('posts/*') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') || Request::is('categories/*') ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <form class="d-flex me-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-light me-2" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light" href="/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Gradasi Biru Gelap */
    .bg-gradient-blue {
        background: linear-gradient(90deg, #0a2a43, #003366);
    }

    /* Hover efek untuk navbar */
    .nav-link {
        transition: all 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #f8d210 !important; /* Warna hover emas */
        transform: scale(1.05);
    }

    /* Efek tombol login & register */
    .btn-outline-light:hover {
        background-color: white;
        color: #0a2a43;
    }

    .btn-light:hover {
        background-color: #f8d210;
        color: black;
    }
</style> --}}
