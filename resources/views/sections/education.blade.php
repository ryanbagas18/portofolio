<section id="education" class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-2">Education</h2>
            <div class="bg-primary mx-auto rounded" style="width: 60px; height: 2px;"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                @forelse($educations as $edu)
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $edu->institution }}</h5>
                                    <h6 class="text-primary mb-0">{{ $edu->degree }}
                                        {{ $edu->field_of_study ? '- ' . $edu->field_of_study : '' }}</h6>
                                </div>
                                <span class="badge bg-white text-dark border">
                                    {{ $edu->start_date ? \Carbon\Carbon::parse($edu->start_date)->format('Y') : '' }} -
                                    {{ $edu->end_date ? \Carbon\Carbon::parse($edu->end_date)->format('Y') : 'Sekarang' }}
                                </span>
                            </div>
                            @if ($edu->description)
                                <p class="card-text text-secondary mt-2 mb-0">{{ $edu->description }}</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Belum ada data pendidikan.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
