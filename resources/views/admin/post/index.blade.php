
@extends('layouts.master')
@section('content')
    <style>
        .form-serch-by-day {
            margin: 0 auto;
            width: 700px;

        }
    </style>
    <div class="container-fluid px-4 mt-5">
<P>All Admin page</P>
        <table class="table table-hover mt-5">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>
                    Action
                </th>
            </tr>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a class="text-danger" href="{{ route('deleteadmin', [$item->id]) }}"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script>
        $('#search').on('keyup', function() {
            alert('helo');
        })
    </script>
@endsection
