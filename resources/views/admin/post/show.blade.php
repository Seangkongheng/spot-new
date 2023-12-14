@extends('layouts.master')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.1/classic/plugins/imageresize/imageresize.js"></script>

    <style>
        body {
            font-family: 'Noto Sans Khmer', sans-serif;
        }

        .content-show-post {

            position: relative;
            margin-left: 320px;
            width: 900px;
            height: auto;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            padding: 30px;
        }

        .img-show img {
            width: 100%;
        }
    </style>
    <div class="content-posst mt-5">
        <div class="content-show-post">
            <p class="text-danger">អត្តបទ : {{ $post->author }}</p>
            <p>ថ្ងៃ-ខែ-ឆ្នាំ : {{ $post->created_at->format('d/m/Y') }}</p>
            <p>ម៉ោង​ : {{ $post->created_at->format('h:i A') }}</p>
            <h1 class="mt-5">{{ $post->Title }}</h1><br><br>


            <hr>
            <p>{{ $post->Subtitle }}</p><br><br>
            <div class="img-show">
                <img src="{{ asset('upload/image/' . $post->image) }}">
            </div>
            <p>{!! $post->decription !!}</p>
        </div>
    </div>

    <style type="text/css">
        .ck-editor__editable_inline {
            height: 500px;
            padding: 300px
        }

        .ck.ck-content .image img {
            width: 100px;
        }
    </style>
@endsection
