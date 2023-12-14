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
                            <img style="width: 60px" src="{{ asset('image/logo-removebg-preview.png') }}">
                        </div>

                    </div>
                </div>
                <div class="title-effect">
                    <div class="langauge">
                        <p><a class="text-decoration-none" href=""><b>Khmer</b></a> | <a
                                class="text-decoration-none" href=""><b>English</b></a></p>
                    </div><br>
                    <div class="running-text">
                        <marquee>This is a running text example. It runs horizontally.</marquee>
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

            <a href="{{ route('index') }}" class="navbar-brand"><i class="fa-solid fa-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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

        <div class="detailpage">
            <div class="bacground">
                <img src="{{ asset('upload/image/' . $post->image) }}" alt="Your Image">
            </div>
            <div class="container">
                <div class="block-detail">
                    <div class="bock-detail-content">
                        <p style="font-size:25px">{{ $post->Title }}</p>

                        <div class="date-detail-page mt-4">
                            <div class="date-day-hour">
                                ថ្ងៃនេះ ម៉ោង {{ $post->created_at->format('h:i A') }}
                            </div>
                            <div class="comment-share">
                                <i class="fa-solid fa-comment"></i>&nbsp; ចំនួនមតិ &nbsp; 0|&nbsp; <i
                                    class="fa-solid fa-share"></i>&nbsp; ចំនួនចែករំលេក&nbsp; 0
                            </div>
                        </div>
                        <hr class="text-dark mt-3">

                        <div class="decription-detail-page">
                            <div class="heade-decription">
                                <p>ប្រធាន​សហព័ន្ធ​កីឡា​ចំបាប់​កម្ពុជា​​ថា​កីឡាករ​​កីឡា​ការិនី​ជម្រើស​ជាតិ​គឺ​មាន​សមត្ថភាព​រីកចម្រើន​​សន្ទុះ​បច្ចេកទេស​​និង​កម្លាំង​មើល​ឃើញ​ថា​ល្អ​ប្រសើរ​ជាង​មុន​ទៅ​ទៀត​នៅ​ពេល​ប្រកួត​ក្នុង​ព្រឹត្តិការណ៍​កីឡា​អាស៊ី​​លើក​ទី១៩​​នៅ​ចិន។​
                                </p>
                            </div>
                            <div class="image-thumail">
                                <img src="{{ asset('upload/image/' . $post->image) }}" alt="Your Image">
                            </div>
                            <div class="main-decription mt-3">
                                <p style="text-align: justify">
                                    {!! $post->decription !!}
                                </p>
                            </div>
                            {{-- <div class="second-image">
                                    <img src="{{ asset('image/64a97a746b9873.35041100.jpg') }}" alt="Your Image">
                                </div> --}}
                            <div class="author-share-socail mt-5">
                                <div class="authorName">
                                    <p>អត្តបទ :{{ $post->author }}</p>
                                </div>
                                <div class="share-socail">
                                    <i class="fa-brands fa-square-facebook" style="color: rgb(21, 0, 255)"></i>
                                    <i class="fa-brands fa-square-twitter" style="color: rgb(0, 234, 255)"></i>
                                    <i class="fa-brands fa-square-instagram" style="color: #d6249f;"></i>
                                </div>
                            </div>
                            {{-- atticle-same --}}
                            <div class="atticle-same mt-5">
                                <p style="font-size: 20px">អត្តបទទាក់ទង</p>
                                <hr class="text-warning">

                                {{-- slide --}}
                                <div class="content-slide">
                                    <div class="scoll-content">
                                        <div class="block-scroll-content">
                                            @foreach ($allpost as $item)
                                                <div class="box-sport-detailpage">
                                                    <div class="box-sport-image-detailpage">
                                                        <img style="width: 270px; height: 200px;transition: transform 0.3s ease; "
                                                            src="{{ asset('upload/image/' . $item->image) }}"
                                                            alt="Your Image">
                                                    </div>
                                                    <div class="box-sport-title mt-2">
                                                        <a class="text-decoration-none">{{ $item->Title }}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                                <!-- Slideshow container -->

                                {{-- end slide --}}
                            </div>
                        </div>
                    </div>
                    <div class="top-tred">
                        <p>អត្តបទពេញនិយម</p>
                        <hr class="text-warning">
                        <div class="tred-new-all">

                            {{-- display article that popular post --}}



                            @foreach ($latestArticle as $item)
                                <div class="tred-new-post">
                                    <div class="image-tred-post">
                                        <a href="{{ route('showPostView', [$item->id]) }}">
                                            <img src="{{ asset('upload/image/' . $item->image) }}">
                                        </a>
                                    </div>
                                    <div class="title-tred-post">
                                        <p>{{ $item->Title }}​</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="new-atticle">
                        <p>អត្តបទថ្មីៗ</p>
                        <hr class="text-warning">
                        <div class="tred-new-all">
                            @foreach ($latestArticle as $item)
                                <div class="tred-new-post">
                                    <div class="image-tred-post">
                                        <a href="{{ route('showPostView', [$item->id]) }}">
                                            <img src="{{ asset('upload/image/' . $item->image) }}">
                                        </a>
                                    </div>
                                    <div class="title-tred-post">
                                        <p style="font-size: 12px">{{ $item->Title }}​</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr class="text-warning">
                    </div>

                </div>
            </div>
        </div>


    </div>

    {{-- end content-page --}}



    {{-- script-link --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
