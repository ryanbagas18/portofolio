@extends('layouts.app')

@section('content')
    <div class="container py-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Judul Halaman -->
                <h1 class="fw-bold mb-4 text-dark border-bottom pb-3">About Me</h1>

                <!-- Narasi Utama -->
                <div class="lead text-secondary mb-5 style-paragraph">
                    <p class="mb-3">
                        I hold a Bachelor's degree in Information Systems from Universitas Surabaya (UBAYA), where I
                        developed a strong foundation in full-stack web development, system analysis, and business process
                        design.
                    </p>
                    <p class="mb-3">
                        My technical work revolves around building scalable web applications using Laravel, managing MySQL
                        databases, and prototyping user interfaces in Figma. Beyond writing code, I actively hone my
                        leadership, team management, and communication skills through my roles as a Vocal Trainer for the
                        UBAYA Choir and an event committee member for FESPA UBAYA.
                    </p>
                    <p>
                        I am driven by the process of taking complex problems and translating them into simple, elegant
                        digital solutions.
                    </p>
                </div>

                <!-- Quick Information / Detail Kontak -->
                <div class="card border-0 bg-light p-4 rounded-3 mb-4 shadow-sm">
                    <h4 class="fw-bold text-dark mb-3">Quick Info</h4>
                    <div class="row g-3">
                        <div class="col-sm-6 text-dark">
                            <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                            <strong>Location:</strong> {{ $profile->location ?? 'Surabaya, East Java, Indonesia' }}
                        </div>
                        <div class="col-sm-6 text-dark">
                            <i class="bi bi-envelope-fill text-primary me-2"></i>
                            <strong>Email:</strong> {{ $profile->email ?? 'ryanbagaspratama18@gmail.com' }}
                        </div>
                        <div class="col-sm-6 text-dark">
                            <i class="bi bi-mortarboard-fill text-primary me-2"></i>
                            <strong>Education:</strong> Bachelor of Information Systems (S.Kom), UBAYA
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <a href="{{ asset('storage/files/CV_Ryan_Bagas.pdf') }}" class="btn btn-primary" download
                        target="_blank">
                        <i class="bi bi-download me-2"></i>Download CV
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
