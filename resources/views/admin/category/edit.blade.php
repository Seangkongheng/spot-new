@extends('layouts.master')
@section('content')

<div class="container-fluid px-4 mt-5">
    <p>Catgory page</p>
    <hr>
    <div class="category-form">
        <form action="{{ route('updateCategory',$category->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @if ($errors->has('name'))
                <div class="error-message text-danger">{{ $errors->first('name') }}</div>
            @endif
            <label for=""><span class="text-danger">*</span>Category</label>
            <input class="form-control mt-3" value="{{ $category->name }}"  required type="text" name="name" id=""><br>
            @if ($errors->has('Decription'))
                 <div class="error-message text-danger">{{ $errors->first('name') }}</div>
             @endif
            <label for=""><span class="text-danger">*</span>Decription</label>
            <textarea class="form-control"  name="decription" id="" cols="30" rows="10">
                {{ $category->decription }}
            </textarea>
            <br>
            <button style="padding: 10px 30px;background-color: black;color:white" type="submit">Update</button>
        </form><br>
        <a href="/admin/dasboad/category" style="text-decoration: none;" class="mt-5" href=""><i class="fa-solid fa-arrow-left"></i>&nbsp;Back to category</a>
    </div>
</div>
@endsection