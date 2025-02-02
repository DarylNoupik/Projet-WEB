@extends('layouts.index')
@section('content')
@extends('layouts.index')


    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center dark">
                    <a href="{{route('welcome')}}" class="logo menu-absolute m-0">BDE<span class="text-primary">.</span></a>
                    <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
                        <li class="active"><a href="{{route('welcome')}}">welcome</a></li>
                        <li class="has-children">
                            <a href="#">Activities</a>
                            <ul class="dropdown">
                                <li><a href="{{route('suggestions_box')}}">suggestions box</a></li>
                                <li class="has-children">
                                    <a href="{{route('events')}}">Events</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('events')}}">event's months</a></li>
                                        <li><a href="#">past events</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('products')}}">Shop</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('admin')}}">Admin</a></li>

                    </ul>
                    <div class="menu-icons">
                        <!-- Sans search btn
                        <a href="#" class="btn-custom-search" id="btn-search">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                        </a> -->
                        <a href="#" class="user-profile" onclick="checkUserLogin">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </a>
                        <a href="{{route('cart')}}" class="cart">
                            <span class="item-in-cart">2</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="owl-carousel owl-single home-slider">
        <div class="item">
            <div class="untree_co-hero" style="background-image: url('images/hero_bg_9.jpg');">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 text-center text-lg-center">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Welcome to our  <a href="#">BDE </a> Website</h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            </div>
                            <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-outline-black">Explore now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="untree_co-hero" style="background-image: url('images/hero_bg_8.jpg');">
            </div>
        </div>
    </div>
    <!-- Fin -->

    <!-- Section Index About -->
    <div class="untree_co-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">Our Team</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="team text-center">
                        <div class="mb-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></div>
                        <div class="team-body">
                            <h3 class="staff-name">Andre Cameron</h3>
                            <span class="d-block position mb-4">Tresorier</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="social">
                                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team text-center">
                        <div class="mb-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></div>
                        <div class="person-body">
                            <h3 class="staff-name">Gregory Youssaous</h3>
                            <span class="d-block position mb-4">President</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="social">
                                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team text-center">
                        <div class="mb-4"><img src="images/person_3.jpg" alt="Image" class="img-fluid"></div>
                        <div class="team-body">
                            <h3 class="staff-name">Mwana Rosalie</h3>
                            <span class="d-block position mb-4">Secretary</span>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="social">
                                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Section About -->
@endsection
>>>>>>> 49cb7e6730b9da2fbeed57d2812142ac4e613ba8
