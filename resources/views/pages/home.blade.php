@extends('layouts.app')
@section('content')
<!-- Banner Section Start -->
<section class="banner-style-4 banner-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content ">
                    <span class="subheading">Over 14 Course Available</span>
                    <h1>Upgrade your learning Skills & Upgrade your life</h1>
                    <p class="mb-40">Grow your skills with experiences like assessments, paths, code courses and expert-led content on today’s most in-demand technologies</p>

                    <div class="btn-container">
                        <a href="{{ route('courses') }}" class="btn btn-main rounded">Find      Courses</a>
                        <a href="#" class="btn btn-white rounded ms-2">Get started </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0 ps-5">
                    <img src="assets/images/banner/banner_img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Counter Section start -->
<section class="counter-section4">
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-xl-12 counter-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">200</span><span>+</span>
                            </div>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">20</span>
                            </div>
                            <p>Online Courses</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">03</span>
                            </div>
                            <p>Finished Seasons</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="count">
                                <span class="counter h2">100</span><span>%</span>
                            </div>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- COunter Section End -->




<!--  Course style 1 -->

<section class="course-wrapper section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Free Courses</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/C-Programming-BCG-Banner.png" alt="" class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Programming C</a> </h3>
{{--
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">Programming C</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">C is a procedural programming language. It was initially developed by Dennis Ritchie as a system programming language to write an operating system.</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/java.png" alt="" class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Java</a> </h3>
                        {{-- <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">Java</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Ibrahim Hossen</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">Java is one of the most popular and widely used programming languages.</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/js.png" alt="" class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Vanila JavaScript</a> </h3>


                        {{-- <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">Vanila JavaScript</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">JavaScript (JS) is the most popular lightweight, interpreted compiled programming language. It can be used for both Client-side as well as Server-side developments.</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>


            <!-- COURSE END -->
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/php-programming-language.jpg" alt="" class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">PHP</a> </h3>
{{--
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">PHP</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Sozib Hossen</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">The term PHP is an acronym for Hypertext Preprocessor. It is a server-side scripting language that is used for web development.....</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/python.webp" alt="" class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Python</a> </h3>
                        {{-- <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">Python</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Ibrahim Hossen</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">Python is a high-level, general-purpose and a very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications....</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid bg-shadow tooltip-style">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img style="height:200px" src="assets/images/course/web-design-designer-699x466.jpg" alt=""  class="img-fluid">
                            <div style="margin-left:20px" class="price">Free</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Web Design</a> </h3>

{{--
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div> --}}
                    </div>

                    <div class="course-hover-content">
                        <div class="price mb-3">Free</div>
                        <h3 class="course-title"> <a href="#">Web Design</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}

                        </div>
                        <p class="mb-20">Web Design refers to the creating, building, and maintaining of websites. It includes aspects such as web design</p>
                        <a href="#" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
             </div>


            <!-- COURSE END -->
        </div>
    </div>
</section>

<!--  Course style 1 End -->




<!--  Course category -->
<section class="course-category-3 section-padding">
    <div class="container">
        <div class="row mb-70 justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading text-center">
                    <h2 class="font-lg">Categories you want to learn</h2>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-1">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Data Science & Analytics</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-2">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon2.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Artificial Intellegence</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-3">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Algebra Math calculation</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-4">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon4.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Web Development</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-5">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Digital Marketing & SEO</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Course category End -->
<!-- Work Process Section Start -->
<section class="work-process section-padding">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xl-8">
                <div class="section-heading ">
                    <h2 class="font-lg">Start your journey With us</h2>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-xl-7 pe-xl-5 col-lg-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item ">
                            <div class="step-number bg-1">01</div>
                            <div class="step-text">
                                <h5>Signup with all info</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-2">02</div>
                            <div class="step-text">
                                <h5>Take your Admission</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="step-item">
                            <div class="step-number bg-3">03</div>
                            <div class="step-text">
                                <h5>Learn from online </h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-1">04</div>
                            <div class="step-text">
                                <h5>Get certificate</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="video-section mt-3 mt-xl-0">
                    <div class="video-content">
                        <img src="assets/images/bg/office01.html" alt="" class="img-fluid">
                        <a href="#" class="video-icon video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->
<!--  Course style 1 -->

<section class="course-wrapper section-padding  bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Popular Paid Courses</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/problem_solving.jpeg" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">Problem Solving</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/data_structure.jpeg" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">Data Structure & Algorithm</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/software_design.png" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Software Design</a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/software-testing.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Software Testing</a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->
        </div>
        <div class="row justify-content-lg-center">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/software_methodology.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">Software Methodology</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/Features-of-PHP-Laravel-Framework.png" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">Laravel Framework</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/spring-framework.png" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Spring Framework</a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/django.png" alt="" class="img-fluid">
                            <div class="course-price">৳10,000</div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Django Framework</a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">


                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->
        </div>
    </div>
</section>

<!--  Course style 1 End -->



<!-- Feature section start -->
<section class="features-3 section-padding-top ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-50 text-center">
                    <h2 class="font-lg">Transform Your Life </h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-teacher"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Expert Teacher</h4>
                        <p>Develop skills for career of various majors including computer</p>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-layer"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Self Development</h4>
                        <p>Develop skills for career of various majors including computer.</p>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Remote Learning</h4>
                        <p>Develop skills for career of various majors including language</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-lifesaver"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Life Time Support</h4>
                        <p>Develop skills for career of various majors including language  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature section End -->
<!-- Team section start -->
{{-- <section class="team section-padding">
    <div class="container">
        <div class="row  mb-100">
            <div class="col-lg-8 col-xl-8">
                <div class="section-heading text-center text-lg-start">
                    <h2 class="font-lg">Top Rated Instructors</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>

             <div class="col-xl-4 col-lg-4">
                <div class="text-center text-lg-end">
                    <a href="#" class="btn btn-main-outline rounded">All Instructors <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img src="assets/images/team/team-3.jpg" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Ibrahim Hossen</h4>
                            <p>Software Engineer</p>
                        </div>

                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img src="assets/images/team/team-1.jpg" alt="" class="img-fluid">
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Shawon Miah</h4>
                            <p>Software Engineer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
                        <img src="assets/images/team/team-2.jpg" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Web eveloper</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item team-item-4">
                    <div class="team-img">
                        <img src="assets/images/team/team-3.jpg" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Sozib Hossen</h4>
                            <p>Junior Software Engineer</p>
                        </div>

                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>20 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>2 Course</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Team section End -->

<!-- Testimonial section start -->
<section class="testimonial-4 section-padding bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <h2 class="font-lg">Our Students Says</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="testimonial-item">
                       <div class="testimonial-inner">
                           <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="assets/images/clients/testimonial-avata-01.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Cory Zamora</h4>
                                    <span class="meta">Marketing Specialist</span>
                                </div>
                            </div>
                       </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text  mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="assets/images/clients/testimonial-avata-02.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Jackie Sanders</h4>
                                    <span class="meta">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text  mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="assets/images/clients/testimonial-avata-03.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Nikolas Brooten</h4>
                                    <span class="meta">Sales Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="assets/images/clients/testimonial-avata-04.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Terry Ambady</h4>
                                    <span class="meta">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="assets/images/clients/testimonial-avata-03.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Nikolas Brooten</h4>
                                    <span class="meta">Sales Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->
<!-- CTA Sidebar start -->
<section class="cta-5 mb--120 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="cta-inner4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5">
                           <div class="cta-img mb-4 mb-lg-0">
                               <img src="assets/images/about/img_9.png" alt="" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="cta-content ps-lg-4">
                                <span class="subheading mb-10">Not sure where to start?</span>
                                <h2 class="mb-20"> Want to know Special Offers & Updates of new courses?</h2>
                                <a href="#" class="btn btn-main rounded"> Join NOw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->
@endsection
