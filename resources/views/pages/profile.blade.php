@extends('layouts.main')

@section('section')
    <div class="profile-container">
        <a href="{{ route('landing') }}"><img src="{{ asset('images/back.png') }}" alt="back" width="40px"
                class="back"></a>
        <div class="profile-info">
            <img src="{{ asset('images/default-profile.png') }}" alt="profile">
            <div class="detail">
                <h4>SIDKY AHMAD ELMAN</h4>
                <p>Malang, Perum Citra Pandanwangi</p>
            </div>
        </div>
        <div class="menu">
            <button class="btn-menu active" id="btn-karya">Karya kamu</button>
            <button class="btn-menu" id="btn-tentang">Tentang kamu</button>
        </div>
        <hr>
        <div class="my-artworks">
            <div class="action mt-2">
                <button class="btn-action">Hapus</button>
                <button class="btn-action">Unggah</button>
            </div>
            <div class="artwork-content">
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
                <div class="card-artwork">
                    <img src="{{ asset('images/woops.png') }}" alt="artwork">
                </div>
            </div>
        </div>
        <div class="about-me">
            <form action="#" class="d-flex flex-row w-100 px-5">
                <div class="col-lg-6 px-2">
                    <div class="mb-4">
                        <input type="text" placeholder="Nama" name="name" id="name">
                    </div>
                    <div class="mb-4">
                        <textarea rows="16" type="text" placeholder="Biografi atau deskripsi diri" name="bio" id="bio"></textarea>
                    </div>
                    <div class="mt-1">
                        <textarea type="text" placeholder="Keahlian" name="keahlian" id="keahlian"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 px-2 mt-5">
                    <div class="mt-3 mb-3">
                        <input type="text" placeholder="Alamat" name="address" id="address">
                    </div>
                    <div class="mb-5">
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Instagram" name="instagram" id="instagram">
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Twitter" name="twitter" id="twitter">
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Linkedin" name="linkedin" id="linkedin">
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Social Media lain" name="others" id="others">
                    </div>
                </div>
                <div class="col-lg-3 w-25">
                    <div class="action">
                        <button type="submit" class="btn-action">Edit profil</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
