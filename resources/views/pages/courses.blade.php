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
                            <div class="price">Free</div>
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

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">Programming C</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <div class="price">Free</div>
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
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">Java</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Ibrahim Hossen</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <div class="price">Free</div>
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


                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">Vanila JavaScript</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <div class="price">Free</div>
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

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">PHP</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Sozib Hossen</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <div class="price">Free</div>
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
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">Python</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Ibrahim Hossen</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <div class="price">Free</div>
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


                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>

                    <div class="course-hover-content">
                        <div class="price">Free</div>
                        <h3 class="course-title mb-20 mt-30"> <a href="#">Web Design</a> </h3>
                        <div class="course-meta d-flex align-items-center mb-20">
                            {{-- <div class="author me-4">
                                <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                <a href="#">Shawon Miah</a>
                            </div> --}}
                            <span class="lesson"> <i class="far fa-file-alt"></i> 20 lessons</span>
                        </div>
                        <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
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
                            <img src="assets/images/course/img_01.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_05.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_02.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_03.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
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
                            <img src="assets/images/course/img_01.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_05.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_02.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="assets/images/course/img_03.jpg" alt="" class="img-fluid">
                            <div class="course-price">৳3000</div>
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
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
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
