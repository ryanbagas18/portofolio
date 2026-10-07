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
            <a class="navbar-brand fw-bold text-primary" href="#">&lt;DevPortfolio /&gt;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 bg-dark border-top border-secondary text-center text-muted">
        <div class="container">
            <small>&copy; {{ date('Y') }} Portfolio. Built with Laravel & Bootstrap 5.</small>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>