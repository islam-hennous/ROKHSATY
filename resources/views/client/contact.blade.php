@extends('client.layouts.app')

@section('title')
    ROKHSATY - Contact
@endsection


@section('main')
    <!-- ##### Google Map ##### -->
    <div class="map-area">
        <div class="container">
            <div id="googleMap" class="googleMap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51155.864888384196!2d3.043452057955886!3d36.740772604362185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb29d7535eb55%3A0x933ce25cf4c7ab3c!2sMartyrs%20Memorial!5e0!3m2!1sen!2sdz!4v1724438627974!5m2!1sen!2sdz"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-50 ">
        <div class="container">
            <div class="row justify-content-center flex-row-reverse">

                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-4 order-md-2">
                    <div class="post-sidebar-area text-right ">
                        <!-- Contact Info Area -->
                        <div class="sidebar-widget-area">
                            <div class="widget-content contact-widget p-3">
                                <div class="contact-info">
                                    <div class="contact-item d-flex align-items-center mb-3">
                                        <i class="fa fa-map-marker fa-2x mr-3" style="color: green;"></i>
                                        <div class="contact-text">
                                            <p class="mb-0 text-muted">123 Main Street, City, Country</p>
                                        </div>
                                    </div>
                                    <div class="contact-item d-flex align-items-center mb-3">
                                        <i class="fa fa-phone fa-2x mr-3" style="color: green;"></i>
                                        <div class="contact-text">
                                            <p class="mb-0 text-muted">+123 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="contact-item d-flex align-items-center mb-3">
                                        <i class="fa fa-envelope fa-2x mr-3" style="color: green;"></i>
                                        <div class="contact-text">
                                            <p class="mb-0 text-muted">
                                                info@example.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-item d-flex align-items-center">
                                        <i class="fa fa-clock fa-2x mr-3"></i>
                                        <div class="contact-text">
                                            <p class="mb-0 text-muted">Mon - Fri: 9:00 AM - 5:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-md-8 col-lg-8 order-md-1">
                    <div class="contact-form text-right ">
                        <h1 class="mb-2"> ابقى على تواصل </h1>
                        <p class="mb-5"> نود أن نوضح لك كيف يمكنك الوصول إلينا... </p>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" placeholder="الإسم" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" placeholder="البريد الإلكتروني"
                                            required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="subject" id="subject" placeholder="الموضوع" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group text-right">
                                        <textarea name="message" id="message" placeholder="الرسالة" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn text-white px-5"
                                        style="background-color: green;">إرسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection
