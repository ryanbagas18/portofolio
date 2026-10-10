@extends('layouts.app')

@section('title', 'About Me - Ryan Bagas Pratama')

@section('content')
    <!-- Background dibuat putih (bg-white) & memenuhi tinggi layar minimal (min-vh-100) -->
    <div class="bg-white py-5 min-vh-100 d-flex align-items-center">
        <div class="container py-4">
            <div class="row justify-content-center">

                <!-- Kotak Konten Utama di Tengah (Centered Card) -->
                <div class="col-lg-9 col-xl-8">
                    <div class="card border border-light-subtle shadow-sm p-4 p-md-5 rounded-4 bg-white">

                        <!-- Judul & Underline Aksen Tipis -->
                        <div class="text-center mb-4">
                            <h1 class="fw-bold text-dark mb-2">About Me</h1>
                            <div class="bg-primary mx-auto rounded" style="width: 50px; height: 2px;"></div>
                        </div>

                        <!-- Deskripsi / Narasi Utama -->
                        <div class="text-secondary mb-4 style-paragraph" style="line-height: 1.8;">
                            <p class="mb-3">
                                I hold a Bachelor's degree in Information Systems from Universitas Surabaya (UBAYA), where I
                                developed a strong foundation in full-stack web development, system analysis, and business
                                process
                                design.
                            </p>
                            <p class="mb-3">
                                My technical work revolves around building scalable web applications using Laravel, managing
                                MySQL
                                databases, and prototyping user interfaces in Figma. Beyond writing code, I actively hone my
                                leadership, team management, and communication skills through my roles as a Vocal Trainer
                                for the
                                UBAYA Choir and an event committee member for FESPA UBAYA.
                            </p>
                            <p class="mb-0">
                                I am driven by the process of taking complex problems and translating them into simple,
                                elegant
                                digital solutions.
                            </p>
                        </div>

                        <!-- Inner Card / Kotak Informasi Kontak & Edukasi -->
                        <div class="bg-light p-3 p-md-4 rounded-3 border mb-4">
                            <h6 class="fw-bold text-dark mb-3 text-uppercase tracking-wider small">Quick Info</h6>
                            <div class="row g-3">
                                <div class="col-sm-6 text-dark small">
                                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                                    <strong>Email:</strong> {{ $profile->email ?? 'ryanbagaspratama18@gmail.com' }}
                                </div>
                                <div class="col-sm-6 text-dark small">
                                    <i class="bi bi-mortarboard-fill text-primary me-2"></i>
                                    <strong>Education:</strong> S1 Sistem Informasi, UBAYA
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Aksi di Tengah -->
                        <div class="d-flex justify-content-center gap-3 pt-2">
                            <a href="{{ asset('storage/files/CV_Ryan_Bagas.pdf') }}" class="btn btn-primary px-4 py-2"
                                download target="_blank">
                                <i class="bi bi-download me-2"></i>Download CV
                            </a>
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4 py-2">
                                <i class="bi bi-arrow-left me-2"></i>Back to Home
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
