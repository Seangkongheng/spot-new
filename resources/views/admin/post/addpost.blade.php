@extends('layouts.master')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/43.0.1/classic/plugins/imageresize/imageresize.js"></script>

<div class="container-fluid px-4 mt-5">
   <a href="" class="btnAddpost">Add post</a>
    <div class="form-post-new mt-3">
        <form action="{{ route('postAtticle')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-12">
                    @if ($errors->has('Title'))
                    <div class="error-message text-danger">{{ $errors->first('Title') }}</div>
                    @endif
                    <label for="" class="mb-3"><span class="text-danger">*</span> Title</label>
                    <input type="text" name="Title" class="form-control">
                </div><br>
                @if ($errors->has('Subtitle'))
                <div class="error-message text-danger">{{ $errors->first('Subtitle') }}</div>
                @endif
                <div class="col-12">
                    <label for="" class="mb-3"><span class="text-danger">*</span> Subtitle</label>
                    <input type="text" name="Subtitle" class="form-control">
                </div><br>
                @if ($errors->has('cate_id'))
                <div class="error-message text-danger">{{ $errors->first('cate_id') }}</div>
                @endif
                <div class="col-12">
                    <label for="" class="mb-3"><span class="text-danger">*</span> Category</label>
                   <select name="cate_id" class="form-control" id="">
                    <option value="">Select Category</option>
                    @foreach  (  $addpost as $item)
                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                    
                                @endforeach
                   </select>
                </div><br>
                <div class="col-12">
                    <label for="" class="mb-3"><span class="text-danger">*</span> Feater image</label>
                    <input name="image" type="file" class="form-control">
                </div><br>
                <div class="col-12 mt-5">
                    <textarea name="decription"  id="editor">
                        
                    </textarea>
                 </div>
          
                 <div class="col-12">
                    <label for="" class="mb-3"><span class="text-danger">*</span> Author</label>
                    <input type="text" name="author" class="form-control">
                </div><br>
                </div><br>
                <button style="padding: 10px 30px; background-color: black;color:white" type="submit"><i class="fa-regular fa-paper-plane"></i>&nbsp; post</button>
              
        </form>
    </div>
</div>
<style type="text/css">
    .ck-editor__editable_inline{
        height: 500px;
        padding: 300px
    }
    .ck.ck-content .image img{
        width: 500px;
    }
</style>
<script>
    
	ClassicEditor
		.create( document.querySelector( '#editor' ),
        {
            ckfinder:{
                uploadUrl:"{{ route('ckeditor.upload',['_token'=>csrf_token()]) }}"
            },
            
            
        }
        )
		.catch( error => {
			console.error( error );
		} );

        
        
</script>
@endsection