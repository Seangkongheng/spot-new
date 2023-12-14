@extends('layouts.master')
@section('content')
    <style>
        .form-serch-by-day {
            margin: 0 auto;
            width: 700px;

        }
    </style>
    <div class="container-fluid px-4 mt-5">

        <a href="{{ route('addpost') }}" class="btnAddpost"><i class="fa-solid fa-plus"></i>&nbsp;Add post</a>
        <table class="table table-hover mt-5">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Public By</th>
                <th>Public Date</th>
                <th>
                    Action
                </th>
            </tr>
            <tbody>
                @foreach ($post as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Title }}</td>
                        <td>
                            {{ $item->author }}
                            {{-- <img src="{{ asset('upload/image/' . $item->image) }}" style="width: 200px; height: 200px;"> --}}
                        </td>
                        {{-- <td>{{ $item->decription }}</td> --}}
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a class="" href="{{ route('Editpost', [$item->id]) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;

                            <a class="text-warning" href="{{ route('showPost', [$item->id]) }}"><i
                                    class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;
                            {{-- <a class="btn btn-danger " href="{{ url('delete/'.$item->id)}}">Delete</a></td> --}}

                            <a class="text-danger" href="{{ route('deletPost', [$item->id]) }}"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $post->onEachSide(1)->links() }}
    </div>

    <script>
        $('#search').on('keyup', function() {
            alert('helo');
        })
    </script>
@endsection
