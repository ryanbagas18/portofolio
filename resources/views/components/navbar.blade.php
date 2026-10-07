<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            {{ $profile->name ?? 'Portofolio' }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-link navbar-nav ms-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>