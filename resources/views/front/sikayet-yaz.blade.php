@extends('layouts.app')

@section('section')
    <div id="page">

        @include("layouts.navbar")


        <main class="margin_main_container">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        @include("layouts.admin.errors")
                        <div class="box_general write_review">
                            <h1>Şirket Hakkında Şikayetinizi Yazın</h1>
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="rating_submit">
                                <div class="form-group">
                                    <label class="d-block">Değerlendirme</label>
                                    <span class="rating">
								<input type="radio" name="rating" class="rating-input" id="5_star" name="rating-input" value="5"><label for="5_star" class="rating-star"></label>
								<input type="radio" name="rating" class="rating-input" id="4_star" name="rating-input" value="4"><label for="4_star" class="rating-star"></label>
								<input type="radio" name="rating" class="rating-input" id="3_star" name="rating-input" value="3"><label for="3_star" class="rating-star"></label>
								<input type="radio" name="rating" class="rating-input" id="2_star" name="rating-input" value="2"><label for="2_star" class="rating-star"></label>
								<input type="radio" name="rating" class="rating-input" id="1_star" name="rating-input" value="1"><label for="1_star" class="rating-star"></label>
							</span>
                                </div>
                            </div>
                            <!-- /rating_submit -->
                            <div class="form-group">
                                <label>Şirket Adı</label>
                                <input class="form-control" type="text" placeholder="Şikayet konusu şirket" name="company_name" required>
                            </div>
                            <div class="form-group">
                                <label>Başlık</label>
                                <input class="form-control" type="text" placeholder="Bir cümle ile sorunu özetleyin" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Detaylar</label>
                                <textarea class="form-control" style="height: 180px;" placeholder="Başkalarının bu işletme hakkında bilgi edinmesine yardımcı olmak için detaylı yorumunuzu yazın" name="detail" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Belge ekleyin (opsiyonel)</label>
                                <div class="fileupload"><input type="file" name="image" accept="image/*"></div>
                            </div>
                            <div class="form-group">
                                <div class="checkboxes float-left add_bottom_15 add_top_15">
                                    <label class="container_check">Yazdığım bilgilerin doğruluğunu kabul ediyorum. Şartlar koşullar ve gizlilik ilkelerini kabul ediyorum.
                                        <input type="checkbox" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn_1">Şikayeti Gönder</button>
                            </form>
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-lg-4">
                        <div class="latest_review">
                            <h4>Yeni Şikayetler</h4>
                            <div class="review_listing">
                                <div class="clearfix add_bottom_10">
                                    <figure><img src="img/avatar3.jpg" alt=""></figure>
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
                            <!-- /review_listing -->
                            <div class="review_listing">
                                <div class="clearfix add_bottom_10">
                                    <figure><img src="img/avatar4.jpg" alt=""></figure>
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
                            <!-- /review_listing -->
                        </div>
                        <!-- /latest_review -->

                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        @include("layouts.footer")
        <!--/footer-->
    </div>
    <!-- page -->
@endsection
