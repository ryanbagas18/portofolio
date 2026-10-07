<section id="certifications" class="bg-light">
    <div class="container py-5">
        <h2 class="fw-bold text-center mb-5">Lisensi & Sertifikasi</h2>
        <div class="row g-4">
            @forelse($certifications as $cert)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 p-3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-1">{{ $cert->name }}</h5>
                            <p class="text-primary small mb-2">{{ $cert->issuer }}</p>
                            <p class="text-muted small mb-3">
                                Terbit: {{ $cert->issue_date ? \Carbon\Carbon::parse($cert->issue_date)->format('M Y') : '-' }}
                            </p>
                            @if($cert->credential_url)
                                <a href="{{ $cert->credential_url }}" target="_blank" class="btn btn-sm btn-outline-secondary mt-auto">
                                    <i class="bi bi-box-arrow-up-right me-1"></i>Lihat Kredensial
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted col-12">Belum ada sertifikasi.</p>
            @endforelse
        </div>
    </div>
</section>