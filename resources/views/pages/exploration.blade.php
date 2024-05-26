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
                @forelse ($artworks as $artwork)
                    <div class="card-artworks">
                        <a href="{{ route('eksplorasi.show', $artwork->id) }}"><img
                                src="{{ asset('storage/artwork/' . $artwork->image) }}" alt="Illustration"
                                class="img-fluid"></a>
                        <div class="author-info">
                            <img src="{{ asset('images/logo.png') }}" alt="author">
                            <p class="author-name mt-2">{{ $artwork->user->name }}, judul karya</p>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada karya</p>
                @endforelse

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.choice-chip').click(function() {
                $('.choice-chip').removeClass('active');
                $(this).addClass('active');
                var category = $(this).text();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/eksplorasi',
                    type: 'POST',
                    data: {
                        category: category
                    },
                    success: function(response) {
                        $('.exploration-card .row').empty();
                        $.each(response, function(index, artwork) {
                            var card = `
                        <div class="card-artworks">
                            <a href="/eksplorasi/${artwork.id}"><img src="{{ asset('storage/artwork/' . $artwork->image) }}" alt="Illustration" class="img-fluid"></a>
                            <div class="author-info">
                                <img src="{{ asset('images/logo.png') }}" alt="author">
                                <p class="author-name">${artwork.user.name}, ${artwork.description}</p>
                            </div>
                        </div>
                    `;
                            $('.exploration-card .row').append(card);
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
