@extends("layouts.app")

@section("section")
    <div id="page">

        <header class="header_in is_fixed menu_fixed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="{{ route("home") }}">
                                <img src="{{ asset("public/img/logo_sticky.svg") }}" width="140" height="35" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <ul id="top_menu">
                            <li><a href="write-review.html" class="btn_top">Write a Review</a></li>
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
                                <li><span><a href="{{ route("home") }}">Home</a></span>
                                </li>
                                <li><span><a href="#0">Reviews</a></span>
                                    <ul>
                                        <li>
                                            <span><a href="#0">Layouts</a></span>
                                            <ul>
                                                <li><a href="grid-listings-filterstop.html">Grid listings 1</a></li>
                                                <li><a href="grid-listings-filterscol.html">Grid listings 2</a></li>
                                                <li><a href="row-listings-filterscol.html">Row listings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="reviews-page.html">Reviews page</a></li>
                                        <li><a href="write-review.html">Write a review</a></li>
                                        <li><a href="confirm.html">Confirm page</a></li>
                                        <li><a href="user-dashboard.html">User Dashboard</a></li>
                                        <li><a href="user-settings.html">User Settings</a></li>
                                    </ul>
                                </li>
                                <li><span><a href="pricing.html">Pricing</a></span></li>
                                <li><span><a href="#0">Pages</a></span>
                                    <ul>
                                        <li><a href="companies-landing.html">Compannies Landing Page</a></li>
                                        <li><a href="all-categories.html">Companies Categories Page</a></li>
                                        <li><a href="category-companies-listings-filterstop.html">Companies Listing Page</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="help.html">Help Section</a></li>
                                        <li><a href="faq.html">Faq Section</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li>
                                            <span><a href="#0">Icon Packs</a></span>
                                            <ul>
                                                <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                                <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                                <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                                <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><span><a href="#0">Buy template</a></span></li>
                                <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Write a review</a></span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </header>
        <!-- /header -->

        <main class="margin_main_container">
            <div class="user_summary">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <figure>
                                    <img src="{{ (auth()->user()->image != null)?asset("public/storage/".auth()->user()->image):'img/avatar4.jpg' }}" alt="">
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

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                            <h3>Quick Links</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">Faq</a></li>
                                <li><a href="#0">Help</a></li>
                                <li><a href="#0">My account</a></li>
                                <li><a href="#0">Create account</a></li>
                                <li><a href="#0">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                            <h3>Categories</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="#0">Shops</a></li>
                                <li><a href="#0">Hotels</a></li>
                                <li><a href="#0">Restaurants</a></li>
                                <li><a href="#0">Bars</a></li>
                                <li><a href="#0">Events</a></li>
                                <li><a href="#0">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                            <h3>Contacts</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+61 23 8093 3400</li>
                                <li><i class="ti-email"></i><a href="#0">info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                            <h3>Keep in touch</h3>
                        </a>
                        <div class="collapse show" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                        <input type="submit" value="Submit" id="submit-newsletter">
                                    </div>
                                </form>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
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
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2018 Vanno</span></li>
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
    <script src="{{ asset("public/js/pw_strenght.js") }}"></script>

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
