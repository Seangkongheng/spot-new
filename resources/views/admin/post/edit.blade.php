@extends('layouts.master')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.1/classic/plugins/imageresize/imageresize.js"></script>

    <div class="container-fluid px-4 mt-5">
        <a href="" class="btnAddpost">Add post</a>
        <div class="form-post-new mt-3">
            <form action="{{ route('updatepost', $atticle->id) }}" method="POST" enctype="multipart/form-data"​​​>
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="row">
                    <div class="col-12">
                        @if ($errors->has('Title'))
                            <div class="error-message text-danger">{{ $errors->first('Title') }}</div>
                        @endif
                        <label for="" class="mb-3"><span class="text-danger">*</span> Title</label>
                        <input type="text" name="Title" value="{{ $atticle->Title }}" class="form-control">
                    </div><br>
                    @if ($errors->has('Subtitle'))
                        <div class="error-message text-danger">{{ $errors->first('Subtitle') }}</div>
                    @endif
                    <div class="col-12">
                        <label for="" class="mb-3"><span class="text-danger">*</span> Subtitle</label>
                        <input type="text" name="Subtitle" value="{{ $atticle->Subtitle }}" class="form-control">
                    </div><br>
                    @if ($errors->has('cate_id'))
                        <div class="error-message text-danger">{{ $errors->first('cate_id') }}</div>
                    @endif
                    <div class="col-12">
                        <label for="" class="mb-3"><span class="text-danger">*</span> Category</label>

                        <select name="cate_id" class="form-control" id="">
                            @foreach ($cat as $item)
                                <option value="{{ $item->id }}"{{ $atticle->cate_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach



                        </select>

                    </div><br>
                    <div class="col-12">
                        <label for="" class="mb-3"><span class="text-danger">*</span> Feater image</label>
                        <input name="image" type="file" class="form-control" value="{{ asset($atticle->image) }}">
                        @if ($atticle->image)
                            <img class="mt-4" src="{{ asset('upload/image/' . $atticle->image) }}" alt=""
                                style="width: 200px;height:auto;">
                        @endif
                    </div><br>
                    <div class="col-12 mt-5">
                        <textarea name="decription" id="editor">
                        {{ $atticle->decription }}
                    </textarea>
                    </div>

                    <div class="col-12">
                        <label for="" class="mb-3"><span class="text-danger">*</span> Author</label>
                        <input type="text" name="author" value="{{ $atticle->author }}" class="form-control">
                    </div><br>
                </div><br>
                <button style="padding: 10px 30px; background-color: black;color:white" type="submit"><i
                        class="fa-regular fa-paper-plane"></i>&nbsp; Update</button>

            </form>
        </div>
    </div>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 500px;
            padding: 300px
        }

        .ck.ck-content .image img {
            width: 500px;
        }
    </style>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                },


            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
