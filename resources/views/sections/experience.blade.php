<section id="experience" class="bg-white">
    <div class="container py-5">
        <h2 class="fw-bold text-center mb-5">Pengalaman</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="timeline">
                    @forelse($experiences as $exp)
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div>
                                        <h5 class="fw-bold mb-1">{{ $exp->role }}</h5>
                                        <h6 class="text-primary mb-0">{{ $exp->organization }}</h6>
                                    </div>
                                    <span class="badge bg-light text-dark border">
                                        {{ $exp->start_date ? \Carbon\Carbon::parse($exp->start_date)->format('M Y') : '' }} - 
                                        {{ $exp->is_current ? 'Saat Ini' : ($exp->end_date ? \Carbon\Carbon::parse($exp->end_date)->format('M Y') : '') }}
                                    </span>
                                </div>
                                @if($exp->location)
                                    <p class="text-muted small mb-2"><i class="bi bi-geo-alt me-1"></i>{{ $exp->location }}</p>
                                @endif
                                <p class="card-text text-secondary mb-0">{{ $exp->description }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">Belum ada data pengalaman.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>