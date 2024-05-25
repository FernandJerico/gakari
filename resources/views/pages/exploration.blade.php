@extends('layouts.main')

@section('section')
    <div class="exploration">
        <h1 class="title">Eksplorasi</h1>
        <div class="exploration-category mt-5 d-flex align-items-center">
            <div class="row">
                <div class="choice-chip-container d-flex flex-wrap justify-content-center">
                    <button class="choice-chip active">Digital Art</button>
                    <button class="choice-chip">Poster</button>
                    <button class="choice-chip">Web Design</button>
                    <button class="choice-chip">Wallpaper</button>
                    <button class="choice-chip">Kerajinan Tangan</button>
                    <button class="choice-chip">Ilustrasi</button>
                    <button class="choice-chip">Portofolio</button>
                    <button class="choice-chip">Typography</button>
                    <button class="choice-chip">PowerPoint</button>
                    <button class="choice-chip">Animasi</button>
                    <button class="choice-chip">Tanah Liat</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="exploration-card">
            <div class="row">
                <div class="card-artworks">
                    <a href="#"><img src="{{ asset('images/woops.png') }}" alt="Illustration" class="img-fluid"></a>
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <a href="#"><img src="{{ asset('images/menelusuri.png') }}" alt="Illustration"
                            class="img-fluid"></a>
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <a href="#"><img src="{{ asset('images/sketch.png') }}" alt="Illustration" class="img-fluid"></a>
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <a href="#"><img src="{{ asset('images/posters.png') }}" alt="Illustration" class="img-fluid"></a>
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <a href="#"><img src="{{ asset('images/pemandangan.png') }}" alt="Illustration"
                            class="img-fluid"></a>
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <img src="{{ asset('images/illustration.png') }}" alt="Illustration" class="img-fluid">
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <img src="{{ asset('images/woops.png') }}" alt="Illustration" class="img-fluid">
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <img src="{{ asset('images/sketch.png') }}" alt="Illustration" class="img-fluid">
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <img src="{{ asset('images/illustration.png') }}" alt="Illustration" class="img-fluid">
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
                <div class="card-artworks">
                    <img src="{{ asset('images/posters.png') }}" alt="Illustration" class="img-fluid">
                    <div class="author-info">
                        <img src="{{ asset('images/logo.png') }}" alt="author">
                        <p class="author-name">Nama Author, judul karya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
