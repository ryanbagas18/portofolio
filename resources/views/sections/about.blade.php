<section id="about" class="bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                @if(isset($profile->photo_path) && $profile->photo_path)
                    <img src="{{ asset('storage/' . $profile->photo_path) }}" alt="{{ $profile->name }}" class="img-fluid rounded-circle shadow" style="max-width: 250px; object-fit: cover;">
                @else
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 200px; height: 200px; font-size: 4rem;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                @endif
            </div>
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Tentang Saya</h2>
                <p class="lead text-secondary">{{ $profile->bio ?? '' }}</p>
                <div class="row my-4">
                    <div class="col-sm-6 mb-2 text-dark">
                        <strong>Email:</strong> {{ $profile->email ?? '-' }}
                    </div>
                    {{-- <div class="col-sm-6 mb-2">
                        <strong>Telepon:</strong> {{ $profile->phone ?? '-' }}
                    </div> --}}
                    <div class="col-sm-6 mb-2">
                        <strong>Lokasi:</strong> {{ $profile->location ?? '-' }}
                    </div>
                </div>
                @if(isset($profile->resume_path) && $profile->resume_path)
                    <a href="{{ asset('storage/' . $profile->resume_path) }}" target="_blank" class="btn btn-primary">
                        <i class="bi bi-download me-2"></i>Download CV
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>