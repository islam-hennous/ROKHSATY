@extends('layout/layout')


@section('titel')
    الصفحة الرئيسية
@endsection



@section('content')


    <div id="home">
        <form class="container w-75 pt-5">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">أدخل رقم التعريف الوطني</label>
                <input type="text" class="form-control w-100"  placeholder=". .">
                <div class="form-text"></div>
            </div>
            <button type="submit" class="btn bg-green text-white">بحث</button>
        </form>

        <div class="result my-5">
            <div class="continer mx-5 ">
                <div class="row justify-content-evenly">
                    <div class="col-lg-5 mb-4">
                        <div
                            class="w-100 d-flex flex-column justify-content-center align-items-center bg-light text-green rounded-2 p-4">
                            <h3 class="">
                                إجمالي النقاط
                            </h3>
                            <p>24</p>
                        </div>
                    </div>

                    <div class="col-lg-5 mb-4">
                        <div
                            class="w-100 d-flex flex-column justify-content-center align-items-center bg-light text-green rounded-2 p-4">
                            <h3>
                                النقاط المتبقية
                            </h3>
                            <p>/</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="note">
            <div class="contaciner">
                <div class="row">
                    <div class="">
                        <div class="p-5 bg-light m-5 text-center rounded-2">
                            <h3 class="text-green">ملاحظة</h3>
                            <p>في حالة وصول نقاطك ال0 نقطة يجب عليك إعادة ملئ الرصيد </p>
                            <p>في حالة السياقة بدون نقاط سوف تتعرض إلى عقوبة </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
