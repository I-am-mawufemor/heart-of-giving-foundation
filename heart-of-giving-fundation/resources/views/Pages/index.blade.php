@extends('layouts.app')
@section('content')
    {{-- banner div --}}
    <div id="hero-banner" class="hero-banner" style="background-image: url('asset/image/hero.jpg')">
        <div class="banner-content">
            <h1>Heart of Giving Foundation</h1>
            <div class="line"></div>
            <h2>Transforming Lives Through Giving</h2>
            <a href="#" class="explore-button">Explore Now</a>
        </div>
    </div>

    {{-- End hero div --}}

    <!-- Event section -->
    <section id="event">
        <div class="event-container">
            <div class="title-wrapper">
                <h1 class="section-title">Events <span>&</span> Projects</h1>
            </div>
            <div class="row">
                {{-- Controll the number of events display on the homepage --}}
                {{-- if statement to ensure the home-event is not more than 2 --}}
                @if ($home_event_post->count() < 3)
                    @foreach ($home_event_post as $post)
                        <div class="col">
                            <img src="/storage/cover_images/{{ $post->cover_image }}" alt="cover_image">
                            <p>{{ $post->title }}</p>
                            <a href="/home-event/{{ $post->id }}" class="btn">Read more &#8594;</a>
                        </div>
                    @endforeach
                @endif

                <div class="col">
                    <img src="{{ asset('asset/image/img-10.JPG') }}" alt="Deve Water Project">
                    <h4>Deve Water Project</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nobis saepe, sapiente laborum accusamus
                        optio, voluptate blanditiis.</p>
                    <a href="#" class="btn">Read more &#8594;</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End event section -->
    {{-- Banner section --}}
    <section id="banner">
        <div class="banner container">
            <div class="row">
                <div class="col-4 col-nocontent"></div>
                <div class="col-5 col-content">
                    <div class="content-wrapper">
                        <p><i class="fa fa-quote-left"></i> In a society that functions optimally, those who can should
                            naturally
                            want to provide for those who can't.
                            That's how it's designed to work. I truly believe we're here to take care of one another <i
                                class="fa fa-quote-right"></i></p>
                        <h2>LeVar Burton</h2>
                    </div>
                    <div class="donation">
                        <p>click to donate to a worthy course <a href="#" class="btn">View more &#8594;</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- End banner section --}}

    <!-- Upcoming event section -->
    <section id="upcoming-event">
        <div class="upcoming-event-container">
            <div class="row">
                <div class="col content-col">
                    <h1 class="section-title">Upcoming <span>Events</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis delectus quos quasi culpa
                        voluptates, et laborum consequuntur, soluta, fugit quia tempora rerum ipsum voluptatibus molestias
                        ad amet accusamus repellendus temporibus.</p>
                    <a href="#" class="btn">Learn more &#8594;</a>
                </div>
                <div class="col image-col">
                    <div class="upcoming-image">
                        <img src="{{ asset('asset/image/img-2.JPG') }}" alt="Event Image 1">
                        <img src="{{ asset('asset/image/img-3.JPG') }}" alt="Event Image 2">
                        <img src="{{ asset('asset/image/img-4.JPG') }}" alt="Event Image 3">
                        <img src="{{ asset('asset/image/img-5.JPG') }}" alt="Event Image 4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming event section -->



    <!-- About Section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="{{ asset('asset/image/logo-2.jpeg') }}"
                        alt="{{ config('app.name', 'Heart-of-Giving-Foundation') }}">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>Us</span></h1>
                <h2>Heat of Giving Foundation</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae
                    atque
                    repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
                    exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit
                    magni!
                    Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
                    reprehenderit libero enim!</p>
                <a href="/about" class="btn">Read more &#8594;</a>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- testimonial section -->
    <section id="testimanial">
        <div class="testimonial small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quia nihil esse aliquam deleniti est natus commodi numquam culpa aspernatur expedita quo,
                        tempore perferendis ipsam laborum nulla. Ea iusto aperiam ipsam.</p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('asset/image/image-8.jfif') }}"
                        alt="{{ config('name.app', 'Heart-of-Giving-Foundation') }}">
                    <h3>Elvis Richmond Arku</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quia nihil esse aliquam deleniti est natus commodi numquam culpa aspernatur expedita quo,
                        tempore perferendis ipsam laborum nulla. Ea iusto aperiam ipsam.</p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('asset/image/image-7.jfif') }}"
                        alt="{{ config('name.app', 'Heart-of-Giving-Fundation') }}">
                    <h3>Elvis Richmond Arku</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quia nihil esse aliquam deleniti est natus commodi numquam culpa aspernatur expedita quo,
                        tempore perferendis ipsam laborum nulla. Ea iusto aperiam ipsam.</p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('asset/image/image-6.jpg') }}"
                        alt="{{ config('name.app', 'Heart-of-Giving-fundation') }}">
                    <h3>Name</h3>
                </div>

            </div>
        </div>
    </section>
    <!-- End testimonial -->

    <!-- Gallery section -->
    <section id="gallery">
        <div class="gallery">
            <div class="row">
                <div class="col image-col">
                    <div class="gallery-image">
                        <img src="{{ asset('asset/image/img-7.JPG') }}" alt="Gallery Image 1">
                        <img src="{{ asset('asset/image/img-6.JPG') }}" alt="Gallery Image 2">
                        <img src="{{ asset('asset/image/img-4.JPG') }}" alt="Gallery Image 3">
                    </div>
                </div>
                <div class="col content-col">
                    <h1 class="section-title">Gall<span>ery</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis delectus quos quasi culpa
                        voluptates, et laborum consequuntur, soluta, fugit quia tempora rerum ipsum voluptatibus molestias
                        ad amet accusamus repellendus temporibus.</p>
                    <a href="/gallery" class="btn">View more &#8594;</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery section -->


    <!-- contact Us section  -->
    <section id="contact">
        <div class="contact">
            <div>
                <h1 class="section-title"> Contact <span>Us</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>+233 574 2888</h2>
                        <h2>+233 234 3904</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>info@gmail.com</h2>
                        <h2>abcd@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Volo, North Tongu, Volta Region,</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End contact us section  -->

    {{-- Script --}}
    <script>
        const images = [
            "asset/image/img-6.JPG",
            "asset/image/img-7.JPG",
            "asset/image/img-4.JPG",
            "asset/image/hero.jpg",
        ]; // Add your image URLs here
        let currentIndex = 0;

        function changeBackground() {
            currentIndex = (currentIndex + 1) % images.length;
            const banner = document.getElementById("hero-banner");
            banner.style.opacity = -1;
            setTimeout(() => {
                banner.style.backgroundImage = `url('${images[currentIndex]}')`;
                banner.style.opacity = 1;
            }, 1000);
        }

        // Change background image every 1 minute
        setInterval(changeBackground, 180000);
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
