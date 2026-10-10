<section id="hero" class="d-flex align-items-center min-vh-100 bg-white">
    <div class="container py-5">
        <div class="row align-items-center">


            <div class="col-lg-8 col-md-7 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3 text-dark">Hello, I'm {{ $profile->name ?? 'Ryan Bagas Pratama' }}</h1>
                <h3 class="text-primary mb-4">
                    {{ $profile->headline ?? 'Web & Full-Stack Developer | Informatics Engineering' }}</h3>
                <p class="lead text-secondary mb-4" style="line-height: 1.7;">
                    Lulusan S1 Sistem Informasi Universitas Surabaya dengan fokus pada pengembangan web, analisis
                    sistem, dan perancangan proses bisnis. Memiliki pengalaman membangun aplikasi web dengan Laravel &
                    MySQL, serta merancang UI/UX menggunakan Figma. Berkelanjutan mengasah kemampuan kepemimpinan dan
                    manajemen tim melalui pengalaman sebagai Trainer UBAYA Choir dan Panitia FESPA UBAYA.
                </p>


                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ asset('storage/files/CV_Ryan_Bagas.pdf') }}" class="btn btn-primary btn-lg px-4 py-2"
                        download target="_blank">
                        <i class="bi bi-download me-2"></i>Download CV
                    </a>
                    <a href="{{ url('/about') }}" class="btn btn-outline-secondary btn-lg px-4 py-2">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 text-center">
                @if (isset($profile->photo_path) && $profile->photo_path)
                    <img src="{{ asset('storage/' . $profile->photo_path) }}"
                        alt="{{ $profile->name ?? 'Ryan Bagas Pratama' }}"
                        class="img-fluid rounded-circle shadow-lg border border-4 border-white"
                        style="width: 380px; height: 380px; object-fit: cover;">
                @else
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg border border-4 border-white"
                        style="width: 260px; height: 260px; font-size: 5rem;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
