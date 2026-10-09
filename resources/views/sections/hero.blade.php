<section id="hero" class="d-flex align-items-center min-vh-100 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3 text-dark">Helo, I'm {{ $profile->name ?? '' }}</h1>
                <h3 class="text-primary mb-4">{{ $profile->headline ?? '' }}</h3>
                <p class="lead text-secondary mb-4">{{ $profile->bio ?? '' }}</p>
                <div class="d-flex gap-3 mt-4">
    <a href="{{ asset('storage/files/CV_Ryan_Bagas.pdf') }}" class="btn btn-primary btn-lg" download>
        <i class="bi bi-download me-2"></i>Download CV
    </a>
    <a href="#about" class="btn btn-outline-secondary btn-lg">
        Learn More
    </a>
</div>
    </div>
</section>