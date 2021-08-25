<header class="header_in is_fixed menu_fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div id="logo">
                    <a href="{{ route("home") }}">
                        <img src="{{ asset("public/img/logo-2.png") }}" width="301" height="35" alt="" class="logo_sticky">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <ul id="top_menu">
                    <li><a href="{{ route("write.complaint") }}" class="btn_top">Şikayet Yaz</a></li>
                    <li><a href="kurumsal.html" class="btn_top company">Kurumsal Üyelik</a></li>
                    <li>
                        @if(auth()->check())
                            <div class="dropdown dropdown-user">
                                <a href="#0" class="logged" data-toggle="dropdown"><img src="{{ (str_contains(auth()->user()->image, "https"))?auth()->user()->image: ((auth()->user()->image == null)?asset("public/img/avatar.jpg"):asset("public/storage/".auth()->user()->image)) }}" alt=""></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="user-dashboard.html">My Reviews</a></li>
                                        <li><a href="{{ route("user.profile") }}">My Settings</a></li>
                                        <li><form id="logoutForm"  method="POST" action="{{ route('logout') }}">@csrf<a  id="logout" >Log Out</a></form></li>
                                    </ul>
                                </div>
                            </div>
                        @else
                        <a href="#sign-in-dialog" id="sign-in" class="login" title="Giriş Yap">Giriş Yap</a>
                        @endif
                    </li>
                </ul>
                <!-- /top_menu -->
                <a href="#menu" class="btn_mobile">
                    <div class="hamburger hamburger--spin" id="hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <nav id="menu" class="main-menu">
                    <ul>

                        <li><span><a href="sikayetler.html">Şikayetler</a></span>

                        </li>
                        <li><span><a href="sirketler.html">Şirketler</a></span></li>
                        <li><span><a href="evo-investment-capital-dolandiriciligi-berat-ardic.html">Haberler</a></span></li>
                        <li><span><a href="iletisim.html">İletişim</a></span></li>

                        <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Şikayet Yaz</a></span></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</header>
<!-- /header -->
