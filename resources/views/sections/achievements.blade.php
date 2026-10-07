<section id="achievements" class="bg-white">
    <div class="container py-5">
        <h2 class="fw-bold text-center mb-5">Pencapaian & Penghargaan</h2>
        <div class="row g-4">
            @forelse($achievements as $ach)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 p-3">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; font-size: 1.5rem;">
                                    <i class="bi bi-trophy-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">{{ $ach->title }}</h6>
                                    <small class="text-muted">{{ $ach->issuer }}</small>
                                </div>
                            </div>
                            
                            <p class="card-text text-secondary small mb-3 flex-grow-1">{{ $ach->description }}</p>

                            {{-- Tombol muncul jika kolom url terisi --}}
                            @if(!empty($ach->url))
                                <a href="{{ $ach->url }}" target="_blank" class="btn btn-outline-primary btn-sm mt-auto w-100">
                                    <i class="bi bi-file-earmark-pdf me-1"></i> Lihat Bukti Dokumen
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted col-12">Belum ada data pencapaian.</p>
            @endforelse
        </div>
    </div>
</section>  