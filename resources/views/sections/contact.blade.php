<section id="contact" class="bg-white">
    <div class="container py-5">
        <h2 class="fw-bold text-center mb-5">Hubungi Saya</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card border-0 shadow-sm p-4">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea name="message" id="message" rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                    </form>
                </div>

                @if(isset($socialLinks) && $socialLinks->count() > 0)
                    <div class="text-center mt-5">
                        <p class="text-muted mb-3">Atau terhubung melalui media sosial:</p>
                        <div class="d-flex justify-content-center gap-3">
                            @foreach($socialLinks as $link)
                                <a href="{{ $link->url }}" target="_blank" class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                    <i class="{{ $link->icon ?? 'bi bi-link-45deg' }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>