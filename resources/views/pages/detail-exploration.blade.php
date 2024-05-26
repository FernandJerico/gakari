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
                <img src="{{ asset('storage/artwork/' . $data->image) }}" alt="Illustration" class="img-fluid">
            </div>
        </div>
        <div class="content-right w-50">
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
                    <img src="{{ asset('images/heart.png') }}" alt="like" id="likeButton" style="cursor: pointer">
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
                        <textarea id="commentTextarea" rows="4" cols="30" placeholder="Pop up textarea"
                            name="message"></textarea>
                        <button type="submit" class="btn-okay">ok</button>
                    </form>
                </div>
            </div>
            @foreach ($comments as $comment)
            <div class="list-comment">
                <p>{{ $comment->user->name }}</p>
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
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    $('#likeCount').text(response.count);
                    $('#likeButton').hide();
                    $('#unlikeButton').show();
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('#unlikeButton').click(function() {
            $.ajax({
                url: `/eksplorasi/like/${id}`,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
