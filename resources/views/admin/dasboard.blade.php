@extends('layouts.master')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Khmer', sans-serif;
        }

        .box-atticle-show {
            width: 300px;
            height: 170px;
            background-color: peru;
        }

        .box-atticle-show-atticle {
            width: 300px;
            position: relative;
            height: 170px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background-color: rgb(217, 103, 103);
        }

        .footer-box-atticle {
           margin-top: 120px;
            padding-top: 15px;
            padding-left: 200px;
            width: 100%;
            background-color: white;
            height: 50px;
          
        }

        .box-atticle-show-category {
            width: 300px;
            height: 170px;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background: rgb(0, 195, 255)
        }

        .box-atticle-show-user {
            width: 300px;
            height: 170px;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background-color: rgb(0, 255, 153)
        }

        .aticle-count {
            display: flex;
            gap: 1.2rem;
        }

        .box-atticle-show-other {
            width: 300px;
            height: 170px;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background-color: red
        }

        .table-article {
            padding: 50px;
            margin-top: 40px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
            width: 1260px;

            height: 600px;
        }

        .icon-and-coont-number {
            display: flex;
            gap: 50px;
            justify-content: space-between;
            top:5%;
            left: 12%;
            position: absolute;

        }
     
      
    </style>
    <div class="container px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="aticle-count">
                <div class="box-atticle-show-atticle">
                    <div class="contetn-icon">
                        <div class="icon-and-coont-number">
                            <div class="icon-dasboad">
                                <i style="font-size: 90px; color:white" class="fa-solid fa-newspaper"></i>
                            </div>
                            <div class="dasbpad-right">
                                <p style="color:white">Total Artticle</p>
                                <p style="font-size: 50px;color:white;margin-left: 55px;"> {{ $count }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-box-atticle">
                        <a href="/admin/dasboard/allpost" style="color: rgb(217, 103, 103)" class="text-decoration-none text-sucess" href=""><i class="fa-solid fa-circle-arrow-right"></i>&nbsp;View all </a>
                    </div>
                </div>

                <div class="box-atticle-show-category">
                    <div class="contetn-icon">
                        <div class="icon-and-coont-number">
                            <div class="icon-dasboad">
                                
                                <i style="font-size: 90px; color:white" class="fa-solid fa-bars"></i>
                            </div>
                            <div class="dasbpad-right">
                                <p style="color:white">Total Category</p>
                                <p style="font-size: 50px;color:white;margin-left: 55px;"> {{ $countcategory }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-box-atticle">
                        <a href="/admin/dasboad/category" style="color: rgb(0, 221, 255)"  class="text-decoration-none text-sucess" href=""><i
                                class="fa-solid fa-circle-arrow-right"></i>&nbsp;View all </a>
                    </div>
                </div>
                <div class="box-atticle-show-user">
                    <div class="contetn-icon">
                        <div class="icon-and-coont-number">
                            <div class="icon-dasboad">
                              
                                <i style="font-size: 90px; color:white" class="fa-solid  fa-user"></i>
                            </div>
                            <div class="dasbpad-right">
                                <p style="color:white">Total Admin</p>
                                <p style="font-size: 50px;color:white;margin-left: 55px;"> {{ $countAdmin }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-box-atticle">
                        <a href="{{ route('Adminpage') }}" style="color:rgb(0, 255, 153)" class="text-decoration-none text-sucess" href=""><i
                                class="fa-solid fa-circle-arrow-right"></i>&nbsp;View all </a>
                    </div>
                </div>
                <div class="box-atticle-show-other">
                    <div class="contetn-icon">
                        <div class="icon-and-coont-number">
                            <div class="icon-dasboad">
                            
                                <i style="font-size: 90px; color:white" class="fa-solid fa-bell"></i>
                            </div>
                            <div class="dasbpad-right">
                                <p style="color:white">Notification</p>
                                <p style="font-size: 50px;color:white;margin-left: 55px;">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-box-atticle">
                        <a style="color:red" class="text-decoration-none text-sucess" href=""><i
                                class="fa-solid fa-circle-arrow-right"></i>&nbsp;View all </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-article">
            <p style="font-weight: bold">All post</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Update By</th>
                        <th scope="col">Public Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($atticle as $item)
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
            <a class="text-danger text-decoration-none" href=""><i class="fa-solid fa-arrow-left"></i>&nbsp;View
                All</a>
        </div>
    </div>
@endsection
