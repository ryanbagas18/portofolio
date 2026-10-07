<section id="hero" class="d-flex align-items-center min-vh-100 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Halo, Saya {{ $profile->name ?? '' }}</h1>
                <h3 class="text-primary mb-4">{{ $profile->headline ?? '' }}</h3>
                <p class="lead text-secondary mb-4">{{ $profile->bio ?? '' }}</p>
                <div class="d-flex gap-3">
                    <a href="#contact" class="btn btn-primary btn-lg">Hubungi Saya</a>
                    <a href="#projects" class="btn btn-outline-secondary btn-lg">Lihat Project</a>
                </div>
            </div>
        </div>
    </div>
</section>