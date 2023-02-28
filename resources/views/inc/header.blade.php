<header class="header-style-1">
    <div class="header-topbar topbar-style-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 col-md-12">
                   <div class="header-contact text-center text-lg-start d-none d-sm-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-phone-alt"></i></span><a href="tel:+880 1751-094262"> +880 1751-094262</a>
                            </li>

                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-envelope"></i></span><a href="malito:info@inoodex.com"> info@inoodex.com</a>
                            </li>
                        </ul>
                   </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                   <div class="d-sm-flex justify-content-center justify-content-lg-end">
                        <div class="header-socials text-center text-lg-end">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/inoodex"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-btn text-center text-lg-end">
                           <a href="#"> <i class="fa fa-user-alt"></i> Login/Register</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="{{ url('/') }}">
                        <img style="width:138px" src="{{ asset('/') }}assets/images/logoblack.png" alt="" class="" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                {{-- <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Developemnt</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header-search-bar d-none d-xl-block ms-4">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search for Course" >
                        <a href="#" class="search-submit"><i class="far fa-search"></i></a>
                    </form>
                 </div> --}}

                <nav class="site-navbar ms-auto">

                    <ul class="primary-menu">
                        <li class="current">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>

                        <li>
                            <a href="{{ route('courses') }}">Courses</a>
                            {{-- <ul class="submenu">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="courses-2.html">Course Grid 2 </a></li>
                                <li><a href="courses-3.html">Course Grid 3</a></li>
                                <li><a href="courses-4.html">Course Grid 4</a></li>
                                <li><a href="courses-5-list.html">Course List</a></li>
                                <li class="has-submenu">
                                    <a href="#">Single Layout</a>
                                    <ul class="submenu">
                                        <li><a href="course-single.html">Course Single 1</a></li>
                                        <li><a href="course-single-2.html">Course Single 2</a></li>
                                        <li><a href="course-single-3.html">Course Single 3</a></li>
                                        <li><a href="course-single-4.html">Course Single 4</a></li>
                                        <li><a href="course-single-5.html">Course Single 5</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>

                        {{-- <li>
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="instructor.html">Instructors</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="Register.html">Register</a></li>
                            </ul>
                        </li> --}}

                        {{-- <li>
                            <a href="blog.html">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-grid.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>
            </div>
        </div>
    </div>
</header>
