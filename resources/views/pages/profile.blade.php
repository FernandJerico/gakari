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
                <button class="change-photo">Perbarui Foto</button>
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
                <div class="dropdown">
                    <button class="btn-action" class="dropdown-toggle" type="button"
                        data-bs-toggle="dropdown">Unggah</button>
                    <ul class="dropdown-menu upload">
                        <form action="#">
                            <div class="mb-3">
                                <input type="file" class="form-control" id="inputfile" aria-describedby="inputgroupfile"
                                    aria-label="Upload" class="input-upload">
                            </div>
                            <div class="mb-3">
                                <label for="description">Tambahkan deskripsi</label>
                                <textarea type="text" name="description" id="description"></textarea>
                            </div>
                            <div class="mb-5">
                                <select class="form-select" aria-label="select-category">
                                    <option selected>Tambahkan kategori</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mt-3 d-flex justify-content-end">
                                <button class="btn-action">ok</button>
                            </div>
                        </form>
                    </ul>
                </div>
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
            <div class="d-flex flex-row w-100 px-5">
                <div class="col-lg-6 px-2">
                    <div class="mb-4">
                        <input type="text" placeholder="Nama" name="name" id="name" readonly>
                    </div>
                    <div class="mb-4">
                        <textarea rows="16" type="text" placeholder="Biografi atau deskripsi diri" name="bio" id="bio"
                            readonly></textarea>
                    </div>
                    <div class="mt-1">
                        <textarea type="text" placeholder="Keahlian" name="keahlian" id="keahlian" readonly></textarea>
                    </div>
                </div>
                <div class="col-lg-3 px-2 mt-5">
                    <div class="mt-3 mb-3">
                        <input type="text" placeholder="Alamat" name="address" id="address" readonly>
                    </div>
                    <div class="mb-5">
                        <input type="email" placeholder="Email" name="email" id="email" readonly>
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Instagram" name="instagram" id="instagram" readonly>
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Twitter" name="twitter" id="twitter" readonly>
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Linkedin" name="linkedin" id="linkedin" readonly>
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Social Media lain" name="others" id="others" readonly>
                    </div>
                </div>
                <div class="col-lg-3 w-25">
                    <div class="action">
                        <a style="text-decoration: none;" class="btn-action">Edit profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
