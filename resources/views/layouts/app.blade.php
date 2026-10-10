<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Developer')</title>

    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .hero-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .project-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }
    </style>
    @stack('styles')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">&lt;Ryan Bagas P. /&gt;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#projects') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#skills') }}">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Ringkas & Ramping -->
    <footer class="py-4 bg-dark border-top border-secondary text-white">
        <div class="container">
            <div class="row g-3 justify-content-between align-items-center">

                <!-- Kolom 1: Connect -->
                <div class="col-md-7 text-center text-md-start">
                    <h6 class="fw-bold text-uppercase tracking-wider text-primary mb-2 small">Connect</h6>
                    <ul
                        class="list-unstyled d-flex flex-wrap justify-content-center justify-content-md-start gap-3 mb-0">
                        @if (isset($socialLinks) && $socialLinks->count() > 0)
                            @foreach ($socialLinks as $link)
                                <li>
                                    <a href="{{ $link->url }}" target="_blank"
                                        class="text-white-50 text-decoration-none hover-white d-inline-flex align-items-center small">
                                        <i class="{{ $link->icon ?? 'bi bi-link-45deg' }} me-1"></i>
                                        {{ $link->platform }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <!-- Kolom 2: Explore -->
                <div class="col-md-4 text-center text-md-end">
                    <h6 class="fw-bold text-uppercase tracking-wider text-primary mb-2 small">Explore</h6>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                        <li>
                            <a href="{{ route('about') }}" class="text-white-50 text-decoration-none hover-white small">
                                Learn About Me <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#hero" class="text-white-50 text-decoration-none hover-white small">
                                Back to Top <i class="bi bi-arrow-up-short"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Copyright Line -->
            <div class="border-top border-secondary mt-3 pt-3 text-center text-white-50 small"
                style="font-size: 0.8rem;">
                &copy; {{ date('Y') }} Ryan Bagas Pratama. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
