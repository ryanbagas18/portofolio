@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <a href="{{ route('home') }}#projects" class="btn btn-outline-secondary mb-4">
        <i class="bi bi-arrow-left"></i> Kembali ke Portofolio
    </a>

    <div class="card border-0 shadow-sm p-4">
        <h1 class="fw-bold mb-2">{{ $project->title }}</h1>
        <p class="text-muted mb-4">{{ $project->company }} | {{ $project->role }}</p>

        @if($project->image_path)
            <img src="{{ asset('storage/' . $project->image_path) }}" class="img-fluid rounded mb-4" alt="{{ $project->title }}">
        @endif

        <div class="mb-4">
            <h5>Deskripsi Project</h5>
            <p>{{ $project->description }}</p>
        </div>

        <div class="mb-4">
            <h5>Tech Stack</h5>
            <div class="d-flex flex-wrap gap-2 mt-2">
                @foreach($project->skills as $skill)
                    <span class="badge bg-primary fs-6">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>

        <div class="d-flex gap-3">
            @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" class="btn btn-dark">
                    <i class="bi bi-github me-1"></i> Repository GitHub
                </a>
            @endif
            @if($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank" class="btn btn-primary">
                    <i class="bi bi-globe me-1"></i> Live Demo
                </a>
            @endif
        </div>
    </div>
</div>
@endsection