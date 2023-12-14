@extends('layouts.master')
@section('content')

<div class="container-fluid px-4 mt-5">
    <p>Catgory page</p><a class="btn btn-primary" href="{{ route('create') }}">Add category</a>
    <hr>
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

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="category">
        <table class="table table-hover mt-5">
            <tr>
                <th>id</th>
                <th>Catgory Name</th>
                <th>Decription</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach ($cat as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->decription }}</td>
                    <td>
                        <a class=""  href="{{ route('Editcategory', [$category->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;
                        <a class="text-warning"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;
                        <a class="text-danger" href="{{ route('deleteCategory',[$category->id]) }}"><i class="fa-solid fa-trash"></i></a>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection