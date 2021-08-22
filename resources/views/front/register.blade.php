@extends("layouts.app")

@section("section")

<nav id="menu" class="fake_menu"></nav>

<div id="login">
    <aside>
        <figure>
            <a href="{{ route("home") }}"><img src="{{ asset("public/img/logo-2.png") }}" width="301" height="35" alt="" class="logo_sticky"></a>
        </figure>
        @include("layouts.admin.errors")
        <div class="access_social">
            <a href="#0" class="social_bt facebook">Facebook ile Kayıt Ol</a>
            <a href="#0" class="social_bt google">Google ile Kayıt Ol</a>
        </div>
        <div class="divider"><span>Ya da</span></div>
        <form  method="POST">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Ad" name="name">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Soyad" name="surname">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" placeholder="Eposta" name="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="phone" placeholder="GSM" name="number">
                <i class="icon_phone"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password1" placeholder="Şifre" name="password">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password2" placeholder="Şifreyi Onayla" name="password_confirmation">
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <button type="submit" href="#0" class="btn_1 rounded full-width">Kayıt Ol !</button>
            <div class="text-center add_top_10">Bir hesabınız var mı? <strong><a href="{{ route("login") }}">Giriş Yap</a></strong></div>
        </form>
        <div class="copy">© 2021 Foreks Şikayetleri</div>
    </aside>
</div>
<!-- /login -->


@endsection

@section("page-script")
<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset("public/js/pw_strenght.js") }}"></script>
<script>
    $("body").attr("id","register_bg");
</script>

@endsection
