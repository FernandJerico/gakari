@extends('layouts.main')

@section('section')
    <div class="detail-exploration">
        <a href="{{ route('eksplorasi.index') }}"><img src="{{ asset('images/back.png') }}" alt="back" width="47px"
                class="back"></a>
        <div class="row d-flex">
            <div class="content-left col-lg-6">
                <div class="author-info d-flex justify-content-between">
                    <div class="name">
                        @if ($data->user->image)
                            <img width="40px" style="border-radius: 50%"
                                src="{{ asset('storage/user/' . $data->user->image) }}" alt="author">
                        @else
                            <img width="40px" style="border-radius: 50%" src="{{ asset('images/default-profile.png') }}">
                        @endif
                        <h4>{{ $data->user->name }}</h4>
                    </div>
                    <a href="#">kunjungi profil</a>
                </div>
                <div class="artwork mt-1">
                    <img src="{{ asset('storage/artwork/' . $data->image) }}" alt="Illustration" class="img-fluid">
                </div>
            </div>
            <div class="content-right col-lg-6">
                <div class="description">
                    <p>{{ $data->description }}</p>
                </div>
                <div class="like-comment">
                    <div class="like">
                        <p id="likeCount">{{ $likes }}</p>
                        @if ($isLiked)
                            <img src="{{ asset('images/heart-filled.png') }}" alt="unlike" id="unlikeButton"
                                style="cursor: pointer">
                            <img src="{{ asset('images/heart.png') }}" alt="like" id="likeButton"
                                style="display: none; cursor: pointer">
                        @else
                            <img src="{{ asset('images/heart.png') }}" alt="like" id="likeButton"
                                style="cursor: pointer">
                            <img src="{{ asset('images/heart-filled.png') }}" alt="unlike" id="unlikeButton"
                                style="display: none; cursor: pointer">
                        @endif
                    </div>
                    <div class="comment">
                        <p>{{ $comment_count }}</p>
                        <button id="commentButton"><img src="{{ asset('images/comment.png') }}" alt="comment"></button>

                    </div>
                </div>
                <div class="textarea-container">
                    <div class="textarea textarea-hidden">
                        <form action="{{ route('eksplorasi.comment', $data->id) }}" method="POST">
                            @csrf
                            <textarea id="commentTextarea" rows="4" cols="30" placeholder="Pop up textarea" name="message"></textarea>
                            <button type="submit" class="btn-okay">ok</button>
                        </form>
                    </div>
                </div>
                @foreach ($comments as $comment)
                    <div class="list-comment">
                        <div class="d-flex flex-row align-items-center gap-1">
                            @if ($comment->user->image)
                                <img width="5%" style="border-radius: 50%"
                                    src="{{ asset('storage/user/' . $comment->user->image) }}" alt="author">
                            @else
                                <img width="5%" style="border-radius: 50%"
                                    src="{{ asset('images/default-profile.png') }}">
                            @endif
                            <h6 class="mt-1">{{ $comment->user->name }}</h6>
                        </div>
                        <p>{{ $comment->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            id = {{ $data->id }};
            $('#likeButton').click(function() {
                $.ajax({
                    url: `/eksplorasi/like/${id}`,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#likeCount').text(response.count);
                        $('#likeButton').hide();
                        $('#unlikeButton').show();
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });

            $('#unlikeButton').click(function() {
                $.ajax({
                    url: `/eksplorasi/like/${id}`,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#likeCount').text(response.count);
                        $('#unlikeButton').hide();
                        $('#likeButton').show();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
