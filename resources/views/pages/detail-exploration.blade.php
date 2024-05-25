@extends('layouts.main')

@section('section')
<div class="detail-exploration">
    <a href="{{ route('eksplorasi.index') }}"><img src="{{ asset('images/back.png') }}" alt="back" width="47px"
            class="back"></a>
    <div class="row d-flex flex-row">
        <div class="content-left w-50">
            <div class="author-info">
                <div class="name">
                    <img width="40px" style="border-radius: 50%" src="{{ asset('images/logo-text-dark.png') }}"
                        alt="author">
                    <h4>{{ $data->user->name }}</h4>
                </div>
                <a href="#">kunjungi profil</a>
            </div>
            <div class="artwork">
                <img src="{{ asset('images/woops.png') }}" alt="Illustration" class="img-fluid">
            </div>
        </div>
        <div class="content-right w-50">
            <div class="description">
                <p>{{ $data->description }}</p>
            </div>
            <div class="like-comment">
                <div class="like">
                    <p>100</p>
                    {{-- <img src="{{ asset('images/heart.png') }}" alt="like"> --}}
                    <img src="{{ asset('images/heart-filled.png') }}" alt="like">
                </div>
                <div class="comment">
                    <p>10</p>
                    <button id="commentButton"><img src="{{ asset('images/comment.png') }}" alt="comment"></button>
                </div>
            </div>
            <div class="textarea-container">
                <div class="textarea textarea-hidden">
                    <form action="#">
                        <textarea id="commentTextarea" rows="4" cols="30" placeholder="Pop up textarea"></textarea>
                        <button type="submit" class="btn-okay">ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
