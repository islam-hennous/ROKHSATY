@extends('layout.layout')
@section('content')
    <div id="contact" class="py-5">

        <div class="header">
            <div class="container">
                <div class="row px-4 my-4">
                    <div class="">
                        <h1> ابقى على تواصل </h1>
                        <p> نود أن نوضح لك كيف يمكنك الوصول إلينا... </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="boxes">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-md-5 col-lg-4 p-3 ">
                        <div class=" d-flex flex-warp flex-column bg-white mt-4 p-5 rounded-4 text-green text-center"
                            style="height:250px;">
                            <span class="icon">
                                <i class="fa-solid fa-envelope fs-1"></i>
                            </span>
                            <h5 class="titel  my-4">البريد الإلكتروني</h5>
                            <p class=" w-100 d-flex justify-content-center aligne-items-center">
                                example@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 p-3">
                        <div class=" d-flex flex-warp flex-column bg-white mt-4 p-5 rounded-4 text-green text-center"
                            style="min-height:250px;">
                            <span class="icon">
                                <i class="fa-solid fa-phone fs-1"></i>
                            </span>
                            <h5 class="titel  my-4">الهاتف</h5>
                            <p>031242321</p>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 p-3">
                        <div class=" d-flex flex-warp flex-column  bg-white mt-4 p-5 rounded-4 text-green text-center"
                            style="height:250px;">
                            <span class="icon">
                                <i class="fa-solid fa-location-dot fs-1"></i> </span>
                            <h5 class="titel  my-4">مقر الولاية</h5>
                            <p>مدينة ميلة, حي DNC </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mesg">
            <div class="container">
                <div class="row">
                    <div class="">
                        <form action="" class="w-75 container mt-5">

                            <div class="form-group">
                                <input type="text" class="form-control w-100 mb-4 " placeholder="البريد الإلكتروني">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="أترك رسالة" style="height: 200px;"></textarea>
                            </div>
                            <button type="submit" class="btn bg-green mt-3 text-white">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
