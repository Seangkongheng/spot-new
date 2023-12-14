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
        <div class="container">
            <div class="content-for-join-name">
                {{-- join name --}}

                {{-- button join name --}}

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


            </div>
            <div class="all-content-page-lottory mt-5">
                <div class="promotion-blog-page">
                    <div class="detail-of-winner">
                        <div class="title-detail-of-winner">
                            <p>ឆ្នោត</p>
                        </div>

                        {{-- diplay with responsive lottory --}}


                        <div class="blog-detail-winnder-list">
                            <div class="content-box-winner">
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/neak.png') }}">
                                    </div>

                                </div>
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/rc klock.png') }}">
                                    </div>
                                </div>
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/bakarat.png') }}">
                                    </div>
                                </div>
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/bakarat.png') }}">
                                    </div>
                                </div>
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/rc rolet.png') }}">
                                    </div>
                                </div>
                                <div class="winner-box-lottory">
                                    <div class="lottory-image">
                                        <img src="{{ asset('image/rcb barat.png') }}">
                                    </div>
                                </div>




                            </div>
                            {{-- diplay when responsive --}}
                            <section id="Game-selection-responsive">
                                <div class="title-detail-of-winner-responsive">

                                  <div class="title-cacino-live mt-2">
                                    <p>កាសុីណូផ្សាយផ្ទាល់</p>
                                </div>
                                <div class="readmore-cacino-live mt-2">
                                  <a href="">អានបន្ថែម</a>
                                </div>
                                </div>
                                <div class="content-box-winner-cacino-responsive">

                                    <div class="all-content-box-promotion">
                                        <div class="image-promotion-game">
                                            <div class="button-play">របៀបលេង</div>
                                            <img
                                                src="{{ asset('image/Know-These-6-Things-Before-You-Play-Online-Casino-Games.jpg') }}">
                                        </div>
                                    </div><br>

                                    <div class="all-content-box-promotion">
                                        <div class="image-promotion-game">
                                            <div class="button-play">របៀបលេង</div>
                                            <img src="{{ asset('image/images (2).jpg') }}">
                                        </div>
                                    </div><br>
                                    <div class="all-content-box-promotion">
                                        <div class="image-promotion-game">
                                            <div class="button-play">របៀបលេង</div>
                                            <img src="{{ asset('image/istockphoto-1369207186-612x612.jpg') }}">
                                        </div>
                                    </div><br>
                                    <div class="all-content-box-promotion">
                                        <div class="image-promotion-game">
                                            <div class="button-play">របៀបលេង</div>
                                            <img src="{{ asset('image/images (1).jpg') }}">
                                        </div>
                                    </div><br>
                                    <div class="all-content-box-promotion">
                                        <div class="image-promotion-game">
                                            <div class="button-play">របៀបលេង</div>
                                            <img src="{{ asset('image/be72545f8adae32d3d98ce5b6755ae85.jpg') }}">
                                        </div>
                                    </div>




                            </section>

                        </div>
                    </div>
                    <div class="detail-of-game">
                        <div class="content-of-game">
                            <div class="title-detail-of-winner-game">
                              <div class="title-cacino-live">
                                  <p>កាសុីណូផ្សាយផ្ទាល់</p>
                              </div>
                              <div class="readmore-cacino-live">
                                <a href="">អានបន្ថែម</a>
                              </div>
                            </div>
                        </div>
                        {{-- ---container-game --}}
                        <div class="box-game-detail-promotion mt-3">
                            <div class="all-content-box-promotion">
                                <div class="image-promotion-game">
                                    <div class="button-play">របៀបលេង</div>
                                    <img
                                        src="{{ asset('image/Know-These-6-Things-Before-You-Play-Online-Casino-Games.jpg') }}">
                                </div>
                            </div><br>
                            <div class="all-content-box-promotion">
                                <div class="image-promotion-game">
                                    <div class="button-play">របៀបលេង</div>
                                    <img src="{{ asset('image/images (2).jpg') }}">
                                </div>
                            </div><br>
                            <div class="all-content-box-promotion">
                                <div class="image-promotion-game">
                                    <div class="button-play">របៀបលេង</div>
                                    <img src="{{ asset('image/istockphoto-1369207186-612x612.jpg') }}">
                                </div>
                            </div><br>
                            <div class="all-content-box-promotion">
                                <div class="image-promotion-game">
                                    <div class="button-play">របៀបលេង</div>
                                    <img src="{{ asset('image/images (1).jpg') }}">
                                </div>
                            </div><br>
                            <div class="all-content-box-promotion">
                                <div class="image-promotion-game">
                                    <div class="button-play">របៀបលេង</div>
                                    <img src="{{ asset('image/be72545f8adae32d3d98ce5b6755ae85.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content-page --}}

    <!-- Footer -->
    {{-- <section id="footer-block-responsive">
  <footer class="bg-dark text-center text-white">
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
</footer> --}}
    </section>
    <!-- Footer -->

    {{-- script-link --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>