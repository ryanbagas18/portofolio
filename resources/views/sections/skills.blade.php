<section id="skills" class="bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-2">Skills & Tools</h2>
            <div class="bg-primary mx-auto rounded" style="width: 60px; height: 2px;"></div>
        </div>
        <div class="row g-4">
            @forelse($skills as $category => $skillList)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 p-3">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3 text-primary">{{ $category ?? 'Lainnya' }}</h5>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($skillList as $skill)
                                    <span class="badge bg-light text-dark border p-2 d-flex align-items-center gap-1">
                                        @if ($skill->icon)
                                            <i class="{{ $skill->icon }}"></i>
                                        @endif
                                        {{ $skill->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted col-12">Belum ada data keahlian.</p>
            @endforelse
        </div>
    </div>
</section>
