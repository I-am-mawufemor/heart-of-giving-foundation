<header>
    <div class="container-navbar">
        <div class="navbar-logo">
            <img src="{{ asset('asset/image/logo.jpeg') }}"
                alt="{{ config('app.name', 'Heart-of-Giving-Foundation') }}" />
        </div>

        <div class="navbar-items d-none d-xl-flex">
            <div class="item">
                <a href="/">Home</a>
            </div>

            <div class="item">
                <a href="/event">Events & Projects</a>
            </div>

            <div class="item">
                <a href="/gallery">Gallery</a>
            </div>

            <div class="item">
                <a href="/about">About</a>
            </div>


            <div class="item-button">
                <a href="/contact" type="button">Let's Talk</a>
            </div>
        </div>



        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('asset/image/logo.jpeg') }}"
                            alt="{{ config('app.name', 'Heart-of-Giving-Foundation') }}" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="modal-line">
                            <i class="fa-solid fa-home"></i><a href="/">Home</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-calendar-alt"></i><a href="/events">Events & Projects</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-images"></i>
                            <a href="/gallery">Gallery</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-circle-info"></i><a href="/about">About</a>
                        </div>

                        <a href="/" class="navbar-button" type="button">Let's Talk</a>
                    </div>

                    <div class="mobile-modal-footer">
                        <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
