
@extends('layouts.app')
@section("section")

<nav id="menu" class="fake_menu"></nav>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="{{ route("home") }}"><img src="{{ asset("public/img/logo-2.png") }}" width="301" height="35" alt="" class="logo_sticky"></a>
        </figure>
        @if($errors->any())
            <div class="alert alert-warning mt-2">
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>

        @endif
        @if(session()->has("error"))
            <div class="alert alert-danger mt-2">
                {{ session("error") }}
            </div>
        @endif
        @if(session()->has("success"))
            <div class="alert alert-success mt-2">
                {{ session("success") }}
            </div>
        @endif

        <form method="POST" >
            @csrf
            <div class="access_social">
                <a href="#0" class="social_bt facebook">Facebook ile Kayıt Ol</a>
                <a href="#0" class="social_bt google">Google ile Kayıt Ol</a>
            </div>
            <div class="divider"><span>Ya da</span></div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Eposta">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Şifre">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_30">
                <div class="checkboxes float-left">
                    <label class="container_check">Beni hatırla
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Şifreni mi Unuttun?</a></div>
            </div>

            <button type="submit"  class="btn_1 rounded full-width">Giriş Yap</button>
            <div class="text-center add_top_10">Hesabınız yok mu? <strong><a href="{{ route("register") }}">Kayıt Ol!</a></strong></div>
        </form>
        <div class="copy">© 2021 Foreks Şikayetleri</div>
    </aside>
</div>
<!-- /login -->

@endsection

@section("page-script")
    <script>
        $("body").attr("id","login_bg");
    </script>
@endsection
