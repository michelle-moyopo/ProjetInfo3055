<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEOMeta::generate() !!}
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>FastBlood | Accueil</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_banque.css') }}">
    @yield('styles')

</head>

<body>
<div id="preloader">
    <div class="medilife-load"></div>
</div>
<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="h-100 d-md-flex justify-content-between align-items-center">
                        <div class="dropdown">
                            <a style="background-color:#3a8d1c" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/locale/fr">{{ __('messages.french') }}</a>
                                <a class="dropdown-item" href="/locale/en">{{ __('messages.english') }}</a>
                            </div>
                        </div>
                        {{--<select data-placeholder="Choose a Language..." class=" bg-primary border-0">
                            <option value="fr">Fr</option>
                            <option value="en">En</option>
                        </select>--}}
                        <span class=" text-white">CENTRE NATIONAL DE TRANSFUSION SANGUINE</span>


                        <p class=" text-white">Call Center : <span>+237 222 222 222</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" style="width:100px; height:50px;" alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="medilifeMenu">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qui peut donner ?</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('qpd_delai_entre_2_don')}}">Delai entre 2 Dons</a>
                                                <a class="dropdown-item" href="{{route('qpd_puis_je_donner')}}">Puis-je Donner ? Test</a>
                                                <a class="dropdown-item" href="{{route('qpd_condition')}}">Condition</a>
                                                <a class="dropdown-item" href="{{route('qpd_contre_indications')}}">Contre Indication</a>
                                            </div>
                                        </li>
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connaitre Plus</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('cp_qu_est_ce_que_le_sang')}}">Qu'est ce que le sang ?</a>
                                                <a class="dropdown-item" href="{{route('cp_histoire_du_sang')}}"><Label>histoire du sang</Label></a>
                                                <a class="dropdown-item" href="{{route('cp_les_produits_sanguins')}}">les produits sanguins</a>
                                                <a class="dropdown-item" href="{{route('cp_groupe_sanguins')}}">les groupes sanguins</a>
                                                <a class="dropdown-item" href="{{route('cp_parcours_d_une_poche_de_sang')}}">le parcours d'une poche de sang</a>
                                            </div>
                                        </li>
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('faq_don_de_sang')}}">FAQ Don de sang</a>
                                                <a class="dropdown-item" href="#">FAQ Don de plasma</a>
                                                <a class="dropdown-item" href="#">FAQ Don de Plaquettes</a>
                                                <a class="dropdown-item" href="#">FAQ Don cellules souches</a>
                                            </div>
                                    </li>
                                    @auth
                                        @if (Auth::user()->role_id === 1)
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte ({{ Auth::user()->name}})</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('admin.dashboard.index')}}">Mon Dashboard</a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="site-nav text-danger">Se deconnecter</a>
                                                    </form>
                                                </div>
                                            </li>
                                        @elseif(Auth::user()->role_id === 2)
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte ({{ Auth::user()->name}})</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('directeur.dashboard.index')}}">Mon Dashboard</a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="site-nav text-danger">Se deconnecter</a>
                                                    </form>
                                                </div>
                                            </li>
                                        @elseif(Auth::user()->role_id === 3)
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte ({{ Auth::user()->name}})</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('responsable.dashboard.index')}}">Mon Dashboard</a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="site-nav text-danger">Se deconnecter</a>
                                                    </form>
                                                </div>
                                            </li>
                                        @elseif(Auth::user()->role_id === 4)
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte ({{ Auth::user()->name}})</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('gestionnaire')}}">Mon Dashboard</a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="site-nav text-danger">Se deconnecter</a>
                                                    </form>
                                                </div>
                                            </li>
                                        @elseif(Auth::user()->role_id === 5)
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte ({{ Auth::user()->name}})</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('user.dashboard.index')}}">Mon Dashboard</a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item text-danger">Se deconnecter</a>
                                                    </form>
                                                </div>
                                            </li>
                                        @endif
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}">Se Connecter</a>
                                    </li>
                                    @endif


                                    <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donner / Demander</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#gift">Donner du sang</a>
                                                <a class="dropdown-item" href="#">Demander Du Sang</a>
                                            </div>
                                    </li>
                                </ul>
                                <!-- Appointment Button -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-100">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="footer-logo">
                            <img src="img/core-img/logo.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Latest News</h6>
                        </div>
                        <div class="widget-blog-post">
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln1.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">Better Health Care</a>
                                    <p>Dec 02, 2017</p>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln2.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">A new drug is tested</a>
                                    <p>Dec 02, 2017</p>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln3.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">Health department advice</a>
                                    <p>Dec 02, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Contact Form</h6>
                        </div>
                        <div class="footer-contact-form">
                            <form action="#" method="post">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email">
                                <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                <button type="submit" class="btn medilife-btn">Contact Us </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>News Letter</h6>
                        </div>

                        <div class="footer-newsletter-area">
                            <form action="#">
                                <input type="email" class="form-control border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-footer-content">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><a href="/">FastBlood</a>
                            </p>              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<!-- Portfolio -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>

<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
@yield('scripts')
</body>
</html>

