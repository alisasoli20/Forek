@extends("layouts.app")

@section("section")
    <div id="page" class="theia-exception">

        <header class="header_in">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="{{ route("home") }}">
                                <img src="{{ asset("img/logo-2.png") }}" width="301" height="35" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <ul id="top_menu">
                            <li><a href="sikayet-yaz.html" class="btn_top">Şikayet Yaz</a></li>
                            <li><a href="kurumsal.html" class="btn_top company">Kurumsal Üyelik</a></li>
                            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Giriş Yap">Giriş Yap</a></li>
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

        <main>
            <div id="results">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-4 col-10">
                            <h1>"Tüm kategorilerde" <strong>145</strong> sonuç</h1>
                        </div>
                        <div class="col-xl-5 col-md-6 col-2">
                            <a href="#0" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
                            <div class="row no-gutters custom-search-input-2 inner">
                                <div class="col-lg-11">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Bir şirkete yazılmış yorumları ara">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-1">
                                    <input type="submit" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="search_mob_wp">
                        <div class="custom-search-input-2">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search reviews...">
                                <i class="icon_search"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Where">
                                <i class="icon_pin_alt"></i>
                            </div>
                            <select class="wide">
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Bars</option>
                                <option>Events</option>
                                <option>Fitness</option>
                            </select>
                            <input type="submit" value="Search">
                        </div>
                    </div>
                    <!-- /search_mobile -->
                </div>
                <!-- /container -->
            </div>
            <!-- /results -->

            <div class="container margin_60_35">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar">
                        <div id="filters_col">
                            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filtreler </a>
                            <div class="collapse show" id="collapseFilters">
                                <div class="filter_type date_filter">
                                    <h6>Tarih</h6>
                                    <ul>
                                        <li>
                                            <label class="container_radio">Hepsi
                                                <input type="radio" id="all_2" name="filters_listing" value="hepsi" checked data-filter="*" class="selected">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_radio">En yeni
                                                <input type="radio" id="latest" name="filters_listing" value="En yeni" data-filter=".latest">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_radio">En eski
                                                <input type="radio" id="oldest" name="filters_listing" value="En eski" data-filter=".oldest">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                                <div class="filter_type">
                                    <h6>Kategori</h6>
                                    <ul>
                                        <li>
                                            <label class="container_check">Forex Şirketleri <small>43</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Borsa Şirketleri <small>33</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Kripto Para Şirketleri <small>12</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Yatırım Şirketleri <small>44</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter_type">
                                    <h6>Değerlendirme</h6>
                                    <ul>
                                        <li>
                                            <label class="container_check">Çok İyi 5 <small>34</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">İyi 4 <small>21</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Orta 3 <small>15</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Zayıf 2 <small>34</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Kötü 1 <small>34</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/collapse -->
                        </div>
                        <!--/filters col-->
                    </aside>
                    <!-- /aside -->

                    <div class="col-lg-9">

                        <div class="isotope-wrapper">
                            <div class="row">

                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar1.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                        <h4>"Evo Investment Capital insanları kandırıyor"</h4>
                                        <p>Evo Investment Capital firma yetkilisi Berat Ardıç sözleşme yaparak insanları kandırıyor...</p>
                                        <ul class="clearfix">
                                            <li><small>110 Görüntüleme</small></li>
                                            <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->




                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar1.jpg" alt=""></figure>
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
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar2.jpg" alt=""></figure>
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
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar3.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                        <h4>"Ana Paraya el koydular, kazancı bile vermiyorlar"</h4>
                                        <p>Sürekli fonlama istediler, önerdiği ters işlemleri toparlamaya çalıştım yine de stop oldum...</p>
                                        <ul class="clearfix">
                                            <li><small>2460 Görüntüleme</small></li>
                                            <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->
                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar4.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                        <h4>"1800$'ım kasalarında bekliyor, vermiyorlar"</h4>
                                        <p>Sözleşme bile yaptık, şirket merdiven altı ve ana parayı bırakın karımı bile vermiyorlar...</p>
                                        <ul class="clearfix">
                                            <li><small>305 Görüntüleme</small></li>
                                            <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar5.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                        <h4>"Evo Investment Capital yatırdığım tüm para ve kâra el koydu"</h4>
                                        <p>Daha önce Tesla Capital Markets tarafından kandırılmıştım, şimdi de Evo Investment Capital aynı şeyi yaptı...</p>
                                        <ul class="clearfix">
                                            <li><small>743 Görüntüleme</small></li>
                                            <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar6.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="evo-investment-capital-sikayetleri.html">Evo Investment Capital</a> hakkında şikayet yazdı</h3>
                                        <h4>"Paramı gasp ettiler, kimseye ulaşamıyorum, yardım edin"</h4>
                                        <p>Uzman Berat Ardıç vereceği sinyaller ile çok kar yapacağımı söyleyip beni fonlamaya ikna etti. Fakat para çekmek istediğimde ortadan kayboldu, Evo Investment Capital 1000$ paramı gasp etmiş oldu, yaptığım kar da hesaplarında duruyor ve alamıyorum. Bir iletişim no veya yetkiliye ulaşabilirseniz haber verin.</p>
                                        <ul class="clearfix">
                                            <li><small>1412 Görüntüleme</small></li>
                                            <li><a href="evo-investment-capital-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->
                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar7.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Tesla Capital Markets Foreks firması tarafından mağdur edildim! "</h4>
                                        <p>Tesla Capital Markets şirketinden Burak Soysal tarafından arandım. Kendisi güzel kazançlar elde edeceğimi foreks piyasasına uzman danışmanları tarafından hesap yönetimimin yapılacağını söyledi....</p>
                                        <ul class="clearfix">
                                            <li><small>610 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar8.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Uzman Emre Özer tarafından açtırılan işlemlerle hesabım defalarca stop oldu"</h4>
                                        <p>Uzman Emre Özer başta 1-2 işlem kar sonra sürekli beni ters işlemlere yönlendirip zarar ettirmeye, sonra hesabı fonlamamı (1000$) yoksa tüm paramı kaybedeceğimi söylemeye başladı. Ben fonladıkça zarar da büyüdü ve sonunda Emre Özer beni Sarp Türk adlı kişiye yönlendirdi. ...</p>
                                        <ul class="clearfix">
                                            <li><small>3413 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item latest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Tesla Capital Markets bana 11.000$ zarar verdi"</h4>
                                        <p>Uzman Sarp Türk, hesabın çok kötü durumda olduğunu ve Emre Özer'in bu hale getirdiğini söyledi, kendi şirket çalışanını kötüleyip bana bu büyük zarardan çıkış noktası olarak tekrar fonlamayı önerdi. ...</p>
                                        <ul class="clearfix">
                                            <li><small>4080 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->
                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar3.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Tesla Capital Markets sürekli para fonlatıp tüm paramı bitirdi"</h4>
                                        <p>Uzman Emre Özer tarafından kandırıldım ve ona güvenerek sürekli önerdiği işlemleri açtım, 2 hafta sonra hesap stop oldu ve adam aniden işten ayrıldı...</p>
                                        <ul class="clearfix">
                                            <li><small>6509 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar6.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Tesla Capital Markets ile çalıştığım için çok mağdurum"</h4>
                                        <p>Tesla Capital Markets'la uzman Emre Özer'in iknası sonucu çalışmaya başladık, başta iyi gitti sonra...</p>
                                        <ul class="clearfix">
                                            <li><small>5910 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->

                                <div class="col-12 isotope-item oldest">
                                    <div class="review_listing">
                                        <div class="clearfix add_bottom_15">
                                            <figure><img src="img/avatar8.jpg" alt=""></figure>
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>1.00/5.00</em></span>
                                            <small>Forex Şirketleri</small>
                                        </div>
                                        <h3><strong>Yatırımcı,</strong> <a href="tesla-capital-markets-sikayetleri.html">Tesla Capital Markets</a> hakkında şikayet yazdı</h3>
                                        <h4>"Tesla Capital Markets Uzmanı Sarp Türk daha ilk açtırdığı işlemde beni bitirdi"</h4>
                                        <p>Piyasayı sürekli takip ettiklerini, 150 kişilik ekip olduklarını söyledi, ilk açtırdığı işlemde 300$ gitti...</p>
                                        <ul class="clearfix">
                                            <li><small>4083 Görüntüleme</small></li>
                                            <li><a href="tesla-capital-markets-sikayetleri.html" class="btn_1 small">Şikayeti Oku</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /review_listing grid -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /isotope-wrapper -->

                        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Devamını gör</a></p>

                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /container -->

        </main>
        <!--/main-->

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

    <script>
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
