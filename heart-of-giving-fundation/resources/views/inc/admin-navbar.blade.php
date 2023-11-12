<input type="checkbox" id="check" />

<!--header area start-->
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>


    <div class="right_area">
        <a href="/index" target="_blank" class="logout_btn">visit website <i class="fa fa-external-link"></i></a>
    </div>
</header>
<!--header area end-->
<!--mobile navigation bar start-->
<div class="mobile_nav">
    <div class="nav_bar">
        <img src="{{ asset('asset/image/logo.jpeg') }}" class="mobile_profile_image" alt="" />
        <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
        <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="#"><i class="far fa-calendar-check"></i><span>Events & Projects</span></a>
        <a href="#"><i class="fa fa-calendar"></i><span>Upcoming Events</span></a>
        <a href="#"><i class="fa fa-images"></i><span>Gallery</span></a>
        <a href="#"><i class="fa fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fa fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a>
    </div>
</div>
<!--mobile navigation bar end-->
<!--sidebar start-->
<div class="sidebar">
    <div class="profile_info">
        <img src="{{ asset('asset/image/logo.jpeg') }}" class="profile_image"
            alt="{{ config('app.name', 'Heart-of-Giving-Foundation') }}" />
        <h4>{{ config('app.name', 'Heart-of-Giving-Foundation') }}</h4>
    </div>
    <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
    <a href="#"><i class="far fa-calendar-check"></i><span>Events & Projects</span></a>
    <a href="#"><i class="fa fa-calendar"></i><span>Upcoming Events</span></a>
    <a href="#"><i class="fa fa-images"></i><span>Gallery</span></a>
    <a href="#"><i class="fa fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fa fa-envelope"></i><span>Contact</span></a>
    <a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a>
</div>
<!--sidebar end-->
