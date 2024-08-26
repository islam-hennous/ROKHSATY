<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header" style="background-color: green;">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">

                <!-- Top Social Area -->
                <div class="col-6">
                    <div class="top-social-area text-left">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                            <i class="fa fa-facebook text-white" aria-hidden="true"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                            <i class="fa fa-twitter text-white" aria-hidden="true"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram">
                            <i class="fa fa-instagram text-white" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- Breaking News Area -->
                <div class="col-6">
                    <div class="breaking-news-area ">
                        <div id="breakingNewsTicker" class="ticker text-right">
                            <ul>
                                <li>
                                    <a href="#" class="text-white">ROKHSATY</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">رخصة بالنقاط</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">منصة جزائرية </a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">دولة ديموقراطية</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">من الشعب و إلى الشعب</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area text-center d-none d-lg-block">
        <div class="container h-100 ">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="mb-4">الجمهورية الجزائرية الديموقراطية الشعبية</h1>
                    <h5>مديرية التقنين و الشؤون العامة</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Area -->
    <div class="original-nav-area bg-white" id="stickyNav">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between">

                    <!-- Subscribe btn -->
                    <div class="subscribe-btn">
                        <a href="#" class="btn subscribe-btn" data-toggle="modal"
                            data-target="#subsModal">نقاطي</a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" id="originalNav">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>

                                <li>
                                    <a href="{{ route('client.contact') }}">الإتصال</a>
                                </li>
                                <li>
                                    <a href="">المخالفات</a>
                                    <ul class="dropdown">
                                        <li class="text-right">
                                            <a href="{{ route('moukhalafat-1') }}"> الدرجة الأولى </a>
                                        </li>
                                        <li class="text-right">
                                            <a href="{{ route('moukhalafat-2') }}"> الدرجة الثانية</a>
                                        </li>
                                        <li class="text-right">
                                            <a href="{{ route('moukhalafat-3') }}"> الدرجة الثالثة</a>
                                        </li>
                                        <li class="text-right">
                                            <a href="{{ route('moukhalafat-4') }}"> الدرجة الرابعة</a>
                                        </li>
                                        <li class="text-right">
                                            <a href="{{ route('moukhalafat-5') }}">الجنح</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('client.blog') }}">رخصتي</a>
                                </li>

                                <li>
                                    <a href="{{ route('client.home') }}">الرئيسية</a>
                                </li>
                            </ul>

                            <!-- Search Form  -->
                            {{-- <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon" class="text-white"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div> --}}
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
