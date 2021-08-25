@extends("layouts.app")

@section("section")
    <div id="page">

        @include("layouts.navbar")
        <!-- /header -->

        <main class="margin_main_container">
            <div class="user_summary">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <figure>
                                    <img src="{{ (auth()->user()->image != null)?((str_contains(auth()->user()->image, "https"))?auth()->user()->image: asset("public/storage/".auth()->user()->image)):asset("public/img/avatar.jpg") }}" alt="">
                                </figure>
                                <h1>{!! auth()->user()->name !!}</h1>
                                <span>{!! auth()->user()->country !!}</span>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <strong>3</strong>
                                        <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Reviews written by you"><i class="icon_star"></i> Reviews</a>
                                    </li>
                                    <li>
                                        <strong>12</strong>
                                        <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who have read your reviews"><i class="icon-user-1"></i> Reads</a>
                                    </li>
                                    <li>
                                        <strong>36</strong>
                                        <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who found your review useful"><i class="icon_like_alt"></i> Useful</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /container -->
                </div>
            </div>

            @include("layouts.admin.errors")
            <!-- /user_summary -->
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="settings_panel">
                            <h3>Personal settings</h3>
                            <hr>
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label>Edit Profile text</label>
                                <textarea name="profile_text" class="form-control" style="height: 180px;" placeholder="Your profile">{!!  auth()->user()->profile_text  !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Edit Photo</label>
                                <div class="fileupload"><input type="file" name="image" accept="image/*"></div>
                            </div>
                            <div class="form-group">
                                <label>Edit Email</label>
                                <input class="form-control" name="email" type="email" placeholder="mark@domani.com" value="{!! auth()->user()->email !!}">
                            </div>
                            <div class="form-group">
                                <label>Edit Full name</label>
                                <input class="form-control" name="name" type="text" placeholder="Mark Steinberg" value="{!! auth()->user()->name !!}">
                            </div>
                            <div class="form-group">
                                <label>Edit City</label>
                                <input class="form-control" name="city" type="text" placeholder="Malaga" value="{!! auth()->user()->city !!}">
                            </div>
                            <div class="form-group">
                                <label>Edit Country</label>
                                <input class="form-control" name="country" type="text" placeholder="Malaga" value="{!! auth()->user()->country !!}">
                            </div>
                            <p class="text-right"><button type="submit" class="btn_1 small add_top_15" >Save personal info</button></p>
                            </form>
                        </div>
                        <!-- /settings_panel -->
                        <div class="settings_panel">
                            <h3>Change password</h3>
                            <hr>
                            <form method="POST" action="{{ route("user.update.password") }}">
                                @csrf
                            <div class="form-group">
                                <label>Current Password</label>
                                <input class="form-control" type="password" id="password" name="current_password">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" id="password1" name="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" id="password2" name="password_confirmation">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <p class="text-right"><button type="submit" class="btn_1 small" >Save password</button></p>
                            </form>
                        </div>
                        <!-- /settings_panel -->
                    </div>
                    <!-- /col -->
                    <div class="col-lg-4" id="sidebar">
                        <div class="box_general">
                            <h5>Delete account</h5>
                            <p>At nec senserit aliquando intellegat, et graece facilisis pro. Per in ridens sensibus interesset, eos ei nonumes incorrupte, iriure diceret an eos.</p>
                            <a href="#" class="btn_1 small">Delete account</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        @include("layouts.footer")
@endsection

@section("page-script")
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset("public/js/pw_strenght.js") }}"></script>

@endsection
