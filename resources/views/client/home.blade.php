@extends('client.layouts.app')


@section('title')
    ROKHSATY - Home
@endsection


@section('main')
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(client/img/bg-img/b2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <span data-animation="fadeInUp"> رخصة بالنقاط </span>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms">
                                    <span>تصفح سهل و
                                        أمن</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(client/img/bg-img/b1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <span data-animation="fadeInUp"> رخصة بالنقاط </span>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms">
                                    <span>
                                        نحو مستقبل أفضل</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(client/img/bg-img/b3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <span data-animation="fadeInUp">رخصة بالنقاط</span>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms">
                                    <span>من الشعب و إلى الشعب</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4 order-lg-3">
                    <div class="single-blog-area clearfix mb-100 ">
                        <!-- Blog Content -->
                        <div class="single-blog-content text-right">
                            <div class="line"></div>
                            <span class="post-tag"> رخصة بالنقاط </span>
                            <h4 class="pt-3 pb-3">
                                <span class="post-headline ">يسرنا تواجدكم على منصة رختي</span>
                            </h4>
                            <p>منصة رقمية تمكن المواطن من الإطلاع على رصيده من النقاط الخاص برخصة قيادته</p>

                            <a href="#" class="btn original-btn" data-toggle="modal"
                                data-target="#subsModal">نقاطي</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4 order-lg-1">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="{{ URL::asset('client/img/blog-img/1.jpg') }}" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="{{ route('client.blog') }}">رخصتي</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4 order-lg-2">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="{{ URL::asset('client/img/blog-img/2.jpg') }}" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">أخر المنشورات</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-9">

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s"
                        data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="{{ asset('client/img/blog-img/3.jpg') }}" alt="">
                                    <div class="post-date">
                                        <a href="#">12 <span>march</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content text-right">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag">Lifestyle</a>
                                    <h4>
                                        <a href="{{ route('client.blog-single') }}" class="post-headline">الإجراءات الجديدة
                                            لقانون المرور تدخل حيز التنفيذ</a>
                                    </h4>
                                    <p>الجزائر - دخلت بداية من يوم الثلاثاء حيز التنفيذ الإجراءات الجديدة الخاصة بقانون
                                        المرور والمتمثلة في تعليق وسحب رخص السياقة من طرف اللجان المختصة وتطبيق غرامات
                                        جزافية على المخالفين للقانون تصل الى 7 ألاف دج كحد أقصى مع إحالة السائق على الجهات
                                        القضائية في حالة تحرير جنحة.</p>
                                    <div class="post-meta">
                                        <p>
                                            <a href="#">إقرأ أيضا</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.3s"
                        data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="{{ asset('client/img/blog-img/4.jpg') }}" alt="">
                                    <div class="post-date">
                                        <a href="#">12 <span>march</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content text-right">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag">Lifestyle</a>
                                    <h4><a href="#" class="post-headline">We love colors in 2018</a></h4>
                                    <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam
                                        vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus,
                                        vel volutpat quam tincidunt.</p>
                                    <div class="post-meta">
                                        <p>By <a href="#">james smith</a></p>
                                        <p>3 comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.4s"
                        data-wow-duration="1000ms">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-blog-thumbnail">
                                    <img src="{{ asset('client/img/blog-img/7.jpg') }}" alt="">
                                    <div class="post-date">
                                        <a href="#">10 <span>march</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <!-- Blog Content -->
                                <div class="single-blog-content mt-50 text-right">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag">Lifestyle</a>
                                    <h4><a href="#" class="post-headline">10 Tips to organize the perfect party</a>
                                    </h4>
                                    <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam
                                        vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus,
                                        vel volutpat quam tincidunt.</p>
                                    <div class="post-meta">
                                        <p>By <a href="#">james smith</a></p>
                                        <p>3 comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Load More -->
                    {{-- <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <a href="#" class="btn original-btn">Read More</a>
                    </div> --}}
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area text-right">
                            <h5 class="title">خاص الإعلانات</h5>
                            <a href="#"><img src="{{ asset('client/img/bg-img/add.gif') }}" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area text-right">
                            <h5 class="title"> رخصتي </h5>

                            <div class="widget-content text-right">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('client/img/blog-img/lp1.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content text-right">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('client/img/blog-img/lp2.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content text-right">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('client/img/blog-img/lp3.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content text-right">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('client/img/blog-img/lp4.jpg') }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content text-right">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Follow us @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="  {{ URL::asset('client/img/instagram-img/1.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/2.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/3.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/4.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/5.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/6.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src=" {{ URL::asset('client/img/instagram-img/7.png') }}" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### --> --}}
@endsection
