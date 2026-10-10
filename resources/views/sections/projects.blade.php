<section id="projects" class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-2">Projects</h2>
            <div class="bg-primary mx-auto rounded" style="width: 60px; height: 2px;"></div>
        </div>
        <div class="row g-4">
            @forelse($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        @if ($project->image_path)
                            <img src="{{ asset('storage/' . $project->image_path) }}" class="card-img-top"
                                alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <i class="bi bi-laptop display-4"></i>
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold mb-1">{{ $project->title }}</h5>
                            <p class="text-muted small mb-2">{{ $project->company }} | {{ $project->role }}</p>
                            <p class="card-text text-secondary mb-3 flex-grow-1">
                                {{ Str::limit($project->description, 100) }}</p>

                            <div class="mb-3 d-flex flex-wrap gap-1">
                                @foreach ($project->skills as $skill)
                                    <span class="badge bg-primary-subtle text-primary border"
                                        style="font-size: 0.75rem;">{{ $skill->name }}</span>
                                @endforeach
                            </div>

                            <a href="{{ route('projects.show', $project->slug) }}"
                                class="btn btn-outline-primary btn-sm mt-auto w-100">
                                Detail Proyek <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted col-12">Belum ada proyek yang ditampilkan.</p>
            @endforelse
        </div>
    </div>
</section>
