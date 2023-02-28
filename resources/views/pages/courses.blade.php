@extends('layouts.app')
@section('content')
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Course Layout 1</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Courses</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
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

    <!--course section start-->
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
    <!--course section end-->
@endsection
