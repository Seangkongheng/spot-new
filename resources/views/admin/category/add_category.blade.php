@extends('layouts.master')
@section('content')

<div class="container-fluid px-4 mt-5">

    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif


@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <p>Catgory page</p>
    <hr>
    <div class="category-form">
        <form action="{{ route('postCategory') }} " method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->has('name'))
                <div class="error-message text-danger">{{ $errors->first('name') }}</div>
            @endif
            <label for=""><span class="text-danger">*</span>Category</label>
            <input class="form-control mt-3"  type="text" name="name" id=""><br>
            @if ($errors->has('Decription'))
                 <div class="error-message text-danger">{{ $errors->first('name') }}</div>
             @endif
            <label for=""><span class="text-danger">*</span>Decription</label>
            <textarea class="form-control" name="decription" id="" cols="30" rows="10">

            </textarea>
            <br>
            <button style="padding: 10px 30px;background-color: black;color:white" type="submit">Add Category</button>
        </form>
    </div>
</div>
@endsection