@extends('layouts.app')

@section('section')
    <div id="page">

        <header class="header menu_fixed">
            <div id="logo">
                <a href="index.html">
                    <img src="{{ asset("public/img/logo.png") }}" width="301" height="35" alt="" class="logo_normal">
                    <img src="{{ asset("public/img/logo-2.png") }}" width="301" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                <li><a href="sikayet-yaz.html" class="btn_top">Şikayet Yaz</a></li>
                <li><a href="kurumsal.html" class="btn_top company">Kurumsal Üyelik</a></li>
                @if(auth()->check())
                    <li>
                        <div class="dropdown dropdown-user">
                            <a href="#0" class="logged" data-toggle="dropdown"><img src="{{ asset("public/img/avatar4.jpg") }}" alt=""></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="user-dashboard.html">My Reviews</a></li>
                                    <li><a href="{{ route("user.profile") }}">My Settings</a></li>
                                    <li><a href="" id="logout">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @else
                <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Giriş Yap">Giriş Yap</a></li>
                @endif
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!-- /btn_mobile -->
            <nav id="menu" class="main-menu">
                <ul>

                    <li><span><a href="{{ route("sikayetler") }}">Şikayetler</a></span>

                    </li>
                    <li><span><a href="sirketler.html">Şirketler</a></span></li>
                    <li><span><a href="evo-investment-capital-dolandiriciligi-berat-ardic.html">Haberler</a></span></li>
                    <li><span><a href="iletisim.html">İletişim</a></span></li>

                    <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Şikayet Yaz</a></span></li>
                </ul>
            </nav>
        </header>
        <!-- /header -->

        <main>
            <section class="hero_single version_1">
                <div class="wrapper">
                    <div class="container">
                        <h3>Her Yorum Bir Deneyimdir!</h3>
                        <p>Foreks, Borsa ve Yatırım Şirketleri Hakkında Şikayetleri Gör, Yorumları Oku & Kararını Ver</p>
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <form method="post" action="sikayetler.html">
                                    <div class="row no-gutters custom-search-input-2">
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Marka, Şirket, Ürün, Ne arıyorsunuz...">
                                                <i class="icon_search"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="submit" value="Ara">
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="container margin_60_35">
                <div class="main_title_3">
                    <h2>Popüler Şirketler</h2>
                    <p>En çok ziyaret edilen ve yorum ve şikayet alan şirketler</p>
                    <a href="sirketler.html">Hepsini gör</a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <a href="sirketler.html" class="grid_item">
                            <figure>
                                <img src="{{ asset("public/img/forex-sirketleri.jpg") }}" alt="">
                                <div class="info">
                                    <small>122 Sonuç</small>
                                    <em><i class="icon-comment"></i> 356 Şikayet</em>
                                    <h3>Forex Şirketleri</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-sm-6">
                        <a href="sirketler.html" class="grid_item">
                            <figure>
                                <img src="{{ asset("public/img/kripto-para-borsasi.jpg") }}" alt="">
                                <div class="info">
                                    <small>245 Sonuç</small>
                                    <em><i class="icon-comment"></i> 123 Şikayet</em>
                                    <h3>Kripto Para Şirketleri</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-sm-6">
                        <a href="sirketler.html" class="grid_item">
                            <figure>
                                <img src="{{ asset("public/img/borsa-sirketleri.jpg") }}" alt="">
                                <div class="info">
                                    <small>95 Sonuç</small>
                                    <em><i class="icon-comment"></i> 245 Şikayet</em>
                                    <h3>Borsa Şirketleri</h3>
                                </div>
                            </figure>
                        </a>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container margin_60">
                    <div class="main_title_3">
                        <h2>Güncel Yorumlar</h2>
                        <p>En son eklenen müşterileri yorumları ve şikayetleri</p>
                        <a href="sikayetler.html">Hepsini Gör</a>
                    </div>

                    <div id="reccomended" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="review_listing">
                                <div class="clearfix">
                                    <figure><img src="{{ asset("public/img/avatar1.jpg") }}" alt=""></figure>
                                    <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                    <small>Forex Şirketleri</small>
                                </div>
                                <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                <h4>"Berat Ardıç ve Evo Investment Capital Forex beni kandırdı"</h4>
                                <p>1000$ yatırdım, üstüne işlemlerle 2000$ kar yaptım, Berat Ardıç paramı çektirmiyor, telefona çıkmıyor...</p>
                                <ul class="clearfix">
                                    <li><small>810 Görüntüleme</small></li>
                                    <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="review_listing">
                                <div class="clearfix">
                                    <figure><img src="{{ asset("public/img/avatar2.jpg") }}" alt=""></figure>
                                    <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                    <small>Forex Şirketleri</small>
                                </div>
                                <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                <h4>"Evo investment capital dolandırıcılığı"</h4>
                                <p>Bunlar organize çalışıyor, önce telefonu bulup arayıp vaatlerle kandırıyorlar, sonra da para çektirmiyorlar...</p>
                                <ul class="clearfix">
                                    <li><small>1230 Görüntüleme</small></li>
                                    <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="review_listing">
                                <div class="clearfix">
                                    <figure><img src="{{ asset("public/img/avatar3.jpg") }}" alt=""></figure>
                                    <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                    <small>Forex Şirketleri</small>
                                </div>
                                <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                <h4>"Ana Paraya el koydular, kazancı bile vermiyorlar"</h4>
                                <p>Sürekli fonlama istediler, önerdiği ters işlemleri toparlamaya çalıştım yine de stop oldum...</p>
                                <ul class="clearfix">
                                    <li><small>3460 Görüntüleme</small></li>
                                    <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="review_listing">
                                <div class="clearfix">
                                    <figure><img src="{{ asset("public/img/avatar4.jpg") }}" alt=""></figure>
                                    <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                    <small>Forex Şirketleri</small>
                                </div>
                                <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                <h4>"1800$'ım kasalarında bekliyor, vermiyorlar"</h4>
                                <p>Sözleşme bile yaptık, şirket merdiven altı ve ana parayı bırakın karımı bile vermiyorlar...</p>
                                <ul class="clearfix">
                                    <li><small>7305 Görüntüleme</small></li>
                                    <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="review_listing">
                                <div class="clearfix">
                                    <figure><img src="{{ asset("public/img/avatar5.jpg") }}" alt=""></figure>
                                    <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                    <small>Forex Şirketleri</small>
                                </div>
                                <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets (TCM Forex)</a> hakkında şikayet yazdı</h3>
                                <h4>"Tesla Capital Markets Foreks firması tarafından mağdur edildim!"</h4>
                                <p>Tesla Capital Markets şirketinden Burak Soysal tarafından arandım...</p>
                                <ul class="clearfix">
                                    <li><small>743 Görüntüleme</small></li>
                                    <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- /carousel -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->

            <div class="call_section_3">
                <div class="wrapper">
                    <div class="container clearfix">
                        <div class="col-lg-5 col-md-7 float-right">
                            <h3>Kurumsal Üyelik</h3>
                            <p>Milyonlarca tüketiciden oluşan bir topluluğa katılın.
                                Uzmanımızı, bağımsız derecelendirmelerimizi ve incelemelerimizi, güvenilir raporlamamızı ve ayrıca bilgili, güvende ve bağlantıda kalmanıza yardımcı olacak araçlarımızı edinin.</p>
                            <p><a class="btn_1 add_top_10 wow bounceIn" href="kurumsal.html" data-wow-delay="0.5s">Hemen Katıl!</a></p>
                        </div>
                    </div>
                    <!-- /container -->
                </div>
            </div>
            <!-- /call_section -->

        </main>
        <!-- /main -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                            <h3>Hızlı Linkler</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">Hakkımızda</a></li>
                                <li><a href="#0">SSS</a></li>
                                <li><a href="#0">Yardım</a></li>
                                <li><a href="#0">Hesabım</a></li>
                                <li><a href="#0">Hesap Aç</a></li>
                                <li><a href="#0">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                            <h3>Kategoriler</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="#0">Forex Şirketleri</a></li>
                                <li><a href="#0">Yatırım Şirketleri</a></li>
                                <li><a href="#0">Borsa Şirketleri</a></li>
                                <li><a href="#0">Hepsini Gör</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                            <h3>İletişim</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>İstanbul - TR</li>
                                <li><i class="ti-email"></i><a href="#0">info@forekssikayetleri.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                            <h3>Bizden Haber Alın</h3>
                        </a>
                        <div class="collapse show" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Eposta">
                                        <input type="submit" value="Gönder" id="submit-newsletter">
                                    </div>
                                </form>
                            </div>
                            <div class="follow_us">
                                <h5>Bizi Takip Edin</h5>
                                <ul>
                                    <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#0"><i class="ti-google"></i></a></li>
                                    <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#0"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <ul id="footer-selector">
                            <li>
                                <div class="styled-select" id="lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul id="additional_links">
                            <li><a href="/sartlar-kosullar.html">Şartlar ve koşullar</a></li>
                            <li><a href="/gizlilik-politikasi.html">Gizlilik</a></li>
                            <li><span>© 2021 Foreks Şikayetleri</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->
@endsection

@section("page-script")
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset("public/js/jquery.cookiebar.js") }}"></script>

    <script>
        (function ($) {
            'use strict';
            $.cookieBar({
                fixed: true
            });
        })(window.jQuery);

        $("#logout").on("click",function(){
            $.ajax({
                type:'POST',
                url:'{{ route("logout") }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function(data){
                    window.location = data
                }
            });
        })
    </script>
@endsection
