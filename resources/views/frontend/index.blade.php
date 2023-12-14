<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@500&display=swap" rel="stylesheet">
    {{-- bootrap-link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- font avsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>

    {{-- top header --}}
    <div class="top-header-fexed">
        <div class="top-header">
            <div class="content-header">

                <div class="all-logo">
                    <div class="brand-logo">
                        <div class="logo-img">
                            <img src="{{ asset('image/logo-removebg-preview.png') }}">
                        </div>
                        {{-- <div class="logo2">
                        <img style="width: 150px" src="{{ asset('image/aa2888_help_center_logo.jpg') }}" >
                    </div>  --}}
                        {{-- display menu whenResposfa-inverse --}}
                        <div class="register-button-responsive">
                            <div class="btn-register">
                                <div class="all-button">
                                    <div class="register">
                                        {{-- icon-register --}}
                                        <div class="content-icon mt-3">
                                            <div class="image-icon-register">
                                                <i style="font-size: 30px;color:white"
                                                    class="fa-solid fa-user-plus"></i>
                                            </div>
                                            <div class="image-icon-text text-white">
                                                ចុះឈ្មោះ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment">
                                        <div class="content-icon mt-3">
                                            <div class="image-icon-register">
                                                <i></i>
                                                <i style="font-size: 30px;color:white"
                                                    class="fa-solid fa-file-invoice-dollar"></i>
                                            </div>
                                            <div class="image-icon-text text-white">
                                                ដាក់ប្រាក់
                                            </div>
                                        </div>
                                    </div>
                                    <div class="charge-money">
                                        <div class="content-icon mt-3">
                                            <div class="image-icon-register">

                                                <i style="font-size: 30px;color:white"
                                                    class="fa-solid fa-hand-holding-dollar"></i>
                                            </div>
                                            <div class="image-icon-text text-white">
                                                ដក់ប្រាក់
                                            </div>
                                        </div>
                                    </div>
                                    <div class="playgame">
                                        <div class="content-icon mt-3">
                                            <div class="image-icon-register">

                                                <i style="font-size: 30px;color:white" class="fa-solid fa-play"></i>
                                            </div>
                                            <div class="image-icon-text text-white">
                                                លេងហ្គេម
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-effect">
                    <div class="langauge">
                        <p><a class="text-decoration-none" href=""><b>Khmer</b></a> | <a
                                class="text-decoration-none" href=""><b>English</b></a></p>
                    </div><br>
                    <div class="running-text">
                        <marquee>ស្វាគមន៏មកកាន់វេបសាយរបស់យើងខ្ញុំ...</marquee>
                    </div>
                </div>

                <div class="btn-register">
                    <div class="all-button">
                        <div class="register">
                            {{-- icon-register --}}
                            <div class="content-icon mt-3">
                                <div class="image-icon-register">
                                    <i style="font-size: 30px;color:white" class="fa-solid fa-user-plus"></i>
                                </div>
                                <div class="image-icon-text text-white">
                                    ចុះឈ្មោះ
                                </div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="content-icon mt-3">
                                <div class="image-icon-register">
                                    <i></i>
                                    <i style="font-size: 30px;color:white" class="fa-solid fa-file-invoice-dollar"></i>
                                </div>
                                <div class="image-icon-text text-white">
                                    ដាក់ប្រាក់
                                </div>
                            </div>
                        </div>
                        <div class="charge-money">
                            <div class="content-icon mt-3">
                                <div class="image-icon-register">

                                    <i style="font-size: 30px;color:white" class="fa-solid fa-hand-holding-dollar"></i>
                                </div>
                                <div class="image-icon-text text-white">
                                    ដក់ប្រាក់
                                </div>
                            </div>
                        </div>
                        <div class="playgame">
                            <div class="content-icon mt-3">
                                <div class="image-icon-register">

                                    <i style="font-size: 30px;color:white" class="fa-solid fa-play"></i>
                                </div>
                                <div class="image-icon-text text-white">
                                    លេងហ្គេម
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end top header --}}
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">


            <a href="{{ route('index') }}" class="navbar-brand" href="#"><i class="fa-solid fa-house"></i></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
              </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">ពត៏មានថ្មីៗ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lottery') }}">ឆ្នោត</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kino') }}">គីណូ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sportNews') }}">កីឡា</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cacino') }}">កាសុីណូបន្តផ្ទាល់</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('game') }}">ហ្គេម</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('promotion') }}">ប្រមូលសិន</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">សេវាអតិថិជន</a>
                    </li>
                    <div class="hide-menu-join-name">

                        <hr class="" style=" color: pink;font-size:2px">
                        <li class="nav-item">
                            <a class="nav-link" href="">ចុះឈ្មោះ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">ដាក់ប្រាក់</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="">ដក់ប្រាក់</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">លេងហ្គេម</a>
                        </li>
                    </div>


                </ul>
            </div>
        </div>
    </nav>
    {{-- end nav --}}
    </div>
    {{-- content-page --}}
    <div class="content-page">
        <div class="container">
            <div class="all-content-page">
                {{-- image--slide --}}
                <div class="slide-image">
                    <div class="slider" id="main-slider"><!-- outermost container element -->
                        <div class="slider-wrapper"><!-- innermost wrapper element -->
                            <img src="{{ asset('image/live-777.jpg') }}" alt="First"
                                class="slide" /><!-- slides -->
                            <img src="{{ asset('image/Screenshot (100).png') }}" alt="Second" class="slide" />
                            <img src="{{ asset('image/Screenshot (101).png') }}" alt="Third" class="slide" />
                        </div>
                    </div>
                </div>
                {{-- service --}}
                <div class="service mt-3">
                    <div class="row allservice">
                        <div class="col-12 col-md-6 col-lg-4 servicebox">
                            <div class="image-service">
                                <div class="content-service-img">
                                    <img src="{{ asset('image/Real-Money-Lottery-Featured-Image.png') }}">
                                </div>
                                <div class="content-service-button-play">
                                    <div class="text-play text-danger">
                                        play
                                    </div>
                                    <i style="font-size: 55px" class="fa-brands fa-youtube text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 servicebox">
                            <div class="image-service">
                                <div class="content-service-img">
                                    <img src="{{ asset('image/payment.png') }}">
                                </div>
                                <div class="content-service-button-play">
                                    <div class="text-play text-danger">
                                        play
                                    </div>
                                    <i style="font-size: 55px" class="fa-brands fa-youtube text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 servicebox">
                            <div class="image-service">
                                <div class="content-service-img">
                                    <img src="{{ asset('image/purchase.png') }}">
                                </div>
                                <div class="content-service-button-play">
                                    <div class="text-play text-danger">
                                        play
                                    </div>
                                    <i style="font-size: 55px" class="fa-brands fa-youtube text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- button service --}}
                <div class="button-service mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="join_name  text-decoration-none" href=""
                                style="padding: 20px 100px;font-size: 30px; color:white; background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(0,255,76,1) 49%, rgba(69,161,88,1) 100%);border-radius:20px ;">
                                <i class="fa-solid fa-user-plus"></i>&nbsp;ចុះឈ្មោះ</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none" href=""
                                style="padding: 20px 100px;font-size: 30px; color:white; background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(212,212,212,1) 0%, rgba(4,118,193,1) 0%, rgba(0,212,255,1) 78%);border-radius:20px ;"><i
                                    class="fa-solid fa-hand-holding-dollar"></i>&nbsp;ដាក់ប្រាក់</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none" href=""
                                style="padding: 20px 100px;font-size: 30px; color:white; background: linear-gradient(90deg, rgba(159,28,33,1) 0%, rgba(255,0,0,1) 49%, rgba(161,69,94,1) 100%);border-radius:20px ;">
                                <i class="fa-solid fa-file-invoice-dollar"></i>&nbsp;ដក់ប្រាក់</a>
                        </div>
                    </div>
                </div>

                {{-- this button display when resoponsive --}}
                <div class="button-service-responsive mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="join_name  text-decoration-none text-white" href=""
                                style="padding: 15px 33px;background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(0,255,76,1) 49%, rgba(69,161,88,1) 100%) ">
                                <i class="fa-solid fa-user-plus"></i>&nbsp;ចុះឈ្មោះ</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none text-white" href=""
                                style="padding: 15px 33px;background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(212,212,212,1) 0%, rgba(4,118,193,1) 0%, rgba(0,212,255,1) 78%)"></i>&nbsp;ដាក់ប្រាក់</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none text-white" href=""
                                style="padding: 15px 33px; background: linear-gradient(90deg, rgba(159,28,33,1) 0%, rgba(255,0,0,1) 49%, rgba(161,69,94,1) 100%) "></i>&nbsp;ដក់ប្រាក់</a>
                        </div>
                    </div>
                </div>

                {{-- this button display when templet resoponsive --}}
                <div class="button-service-responsive-templete mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="join_name  text-decoration-none text-white" href=""
                                style="padding: 15px 73px;background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(0,255,76,1) 49%, rgba(69,161,88,1) 100%) ">
                                <i class="fa-solid fa-user-plus"></i>&nbsp;ចុះឈ្មោះ</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none text-white" href=""
                                style="padding: 15px 73px;background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(212,212,212,1) 0%, rgba(4,118,193,1) 0%, rgba(0,212,255,1) 78%)"></i>&nbsp;ដាក់ប្រាក់</a>

                        </div>
                        <div class="col-4">
                            <a class="text-decoration-none text-white" href=""
                                style="padding: 15px 75px; background: linear-gradient(90deg, rgba(159,28,33,1) 0%, rgba(255,0,0,1) 49%, rgba(161,69,94,1) 100%) "></i>&nbsp;ដក់ប្រាក់</a>
                        </div>
                    </div>
                </div>
                {{-- all-game --}}
                <div class="all-game-service mt-5">

                    <div class="row all-game">
                        <div class="col-12 col-md-6 col-lg-4 button-allgame-box">
                            <div class="content-box-image">
                                <img src="{{ asset('image/bakarat.png') }}">

                            </div>
                            <div class="how-to-play">
                                <button class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 button-allgame-box">
                            <div class="content-box-image">
                                <img src="{{ asset('image/neak.png') }}">

                            </div>
                            <div class="how-to-play">
                                <button class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 button-allgame-box">
                            <div class="content-box-image">
                                <img src="{{ asset('image/Dragon-Tiger-Online-Casino-2023.png') }}">

                            </div>
                            <div class="how-to-play">
                                <button class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                    </div>
                    {{-- subgame -list --}}
                    <div class="row sub-game mt-3">
                        <div class="col-12 col-md-6 col-lg-3 button-subgame-box">
                            <div class="content-box-image-subgame">
                                <img src="{{ asset('image/rc rolet.png') }}">
                            </div>
                            <div class="play-subgame mt-3">
                                <button style="font-size: 12px"​ class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 button-subgame-box">
                            <div class="content-box-image-subgame">
                                <img src="{{ asset('image/rcb barat.png') }}">
                            </div>
                            <div class="play-subgame mt-3">
                                <button class="btn btn-success" style="font-size: 12px">របៀបលេង</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 button-subgame-box">
                            <div class="content-box-image-subgame">
                                <img src="{{ asset('image/rc neak.png') }}">
                            </div>
                            <div class="play-subgame mt-3">
                                <button style="font-size: 12px"​ class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 button-subgame-box">
                            <div class="content-box-image-subgame">
                                <img src="{{ asset('image/rc klock.png') }}">
                            </div>
                            <div class="play-subgame mt-3">
                                <button style="font-size: 12px"​ class="btn btn-success">របៀបលេង</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- sport-new --}}
                <section id="sportNews" class="mt-5">
                    <div class="sport-news">
                        <div class="sport-content">
                            <div class="top-sport-content">
                                <div class="top-sport-content-action">
                                    <div class="block-new-top-sport">
                                        ពត៏មានកីឡា
                                    </div>
                                    <div class="block-readmore-top-sport">
                                        <a href="{{ route('sportNews') }}">អានបន្ថែម&nbsp;&nbsp;<i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-text-block mt-4">

                                <div class="content-spot-image">
                                    @foreach ($latestArticle as $item)
                                        <div class="sport-image">
                                            <div class="image-content-sport">
                                                <a href="{{ route('showPostView', [$item->id]) }}">
                                                    <img src="{{ asset('upload/image/' . $item->image) }}">
                                                </a>


                                            </div>
                                        </div>
                                        <div class="sport-decription">
                                            {{-- diplay block sport only 1 last post --}}






                                            <div class="decription-sport-new">
                                                {{-- thumnail title --}}
                                                <h1 style=""><b>{{ $item->Title }}</b></h1>
                                                <p style="" class="mt-4">{{ $item->Subtitle }}</p>
                                                {{-- date-readmore --}}
                                                <div class="status">
                                                    <div class="content-date-readmore">
                                                        <div class="date">
                                                            <b>Date :</b> <i>{{ $item->created_at }}</i>
                                                        </div>
                                                        <div class="read-more">
                                                            <a href="{{ route('showPostView', [$item->id]) }}">Read
                                                                more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- diplay block sport only 4 --}}
                                <div class="all-box-sport mt-5">
                                    @foreach ($article as $item)
                                        <div class="box-sport">
                                            <div class="box-sport-image">
                                                <a href="{{ route('showPostView', [$item->id]) }}">
                                                    <img src="{{ asset('upload/image/' . $item->image) }}">
                                                </a>

                                            </div>
                                            <div class="box-sport-title mt-2">
                                                <a class="text-decoration-none">{{ $item->Title }}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                {{-- end sport-new --}}
                {{-- game new --}}
                <section id="game">
                    <div class="game-news">
                        <div class="sport-content">
                            <div class="top-sport-content">
                                <div class="top-sport-content-action">
                                    <div class="block-new-top-sport">
                                        ហ្គេម
                                    </div>
                                    <div class="block-readmore-top-sport">
                                        <a href="{{ route('game') }}">អានបន្ថែម&nbsp;&nbsp;<i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-text-block">
                                <div class="all-box-game-new mt-3">
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/6_13.jpg') }}" alt="Your Image">
                                        </div>

                                    </div>

                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/live-777.jpg') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/unnamed (2).png') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/unnamed (1).png') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/images.jpg') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/download (1).jpg') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/unnamed.png') }}" alt="Your Image">
                                        </div>

                                    </div>
                                    <div class="image-game-box">
                                        <div class="sub-immage-game-box">
                                            <img src="{{ asset('image/download.jpg') }}" alt="Your Image">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- end game new --}}
                {{-- loctory --}}
                <section id="lottory">
                    <div class="loctorry-news">
                        <div class="sport-content">
                            <div class="top-sport-content">
                                <div class="top-sport-content-action">
                                    <div class="block-new-top-sport">
                                        ឆ្នោត
                                    </div>
                                    <div class="block-readmore-top-sport">
                                        <a href="{{ route('lottery') }}">អានបន្ថែម&nbsp;&nbsp;<i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-text-block">
                                <div class="all-box-game-new mt-3">
                                    <div class="box-sport">
                                        <div class="sub-immage-lottory">
                                            <img class="image" src="{{ asset('image/download.jpg') }}"
                                                alt="Your Image">
                                            <div class="middle">
                                                <div class="text">ឈ្មោះហ្គេម</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-immage-lottory">
                                        <img class="image" src="{{ asset('image/live-777.jpg') }}"
                                            alt="Your Image">
                                        <div class="middle">
                                            <div class="text">ឈ្មោះហ្គេម</div>
                                        </div>
                                    </div>
                                    <div class="sub-immage-lottory">
                                        <img class="image"
                                            src="{{ asset('image/32f3931f1b586009d4ba03cb9ede8d51.jpg') }}"
                                            alt="Your Image">
                                        <div class="middle">
                                            <div class="text">ឈ្មោះហ្គេម</div>
                                        </div>
                                    </div>
                                    <div class="sub-immage-lottory">
                                        <img class="image"
                                            src="{{ asset('image/tinycrashfighters_thumbnail.jpg') }}"
                                            alt="Your Image">
                                        <div class="middle">
                                            <div class="text">ឈ្មោះហ្គេម</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- end loctory --}}
                {{-- footer-block --}}
                <div class="footer  mt-3">
                    <div class="footer-image">
                        <div class="image-footer-content">
                            <img src="{{ asset('image/AA2888_promotion_001.jpg') }}" alt="Your Image">
                        </div>
                    </div>

                </div>

                {{-- end footer-block --}}
            </div>
        </div>
    </div>
    {{-- end content-page --}}
    <!-- Footer -->
    {{-- <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>ចុះឈ្មោះតាមរយះអុីម៉ែល</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" placeholder="បញ្ចូលអាស្រ័យដ្ធានអុីម៉ែល....">
                
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4">
                ចុះឈ្មោះ
              </button>
            </div>
          </div>
        </form>
      </section>
      <section class="mb-4">
        <p>
            ស្វាគមន៏មកកាន់គេហទំព័ររបស់់យើងខ្ញុំ ...
        </p>
      </section>
    </div>
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">kongheng.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->           
</div> --}}
    {{-- script-link --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
