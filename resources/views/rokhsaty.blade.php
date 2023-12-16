@extends('layout.layout')



@section('content')
    <div id="page" class="pb-5 ">

        <div class="m-0 p-0">
            <div class="m-0 p-0 position-relative">
                <img src="{{ URL::asset('img/pic.jpg') }}" alt="" class="card-img m-0 p-0" style="height: 500px">
                <div class="position-absolute bottom-0 end-0 px-5 mb-5 text-center mx-5">
                    <p class="text-white">أدات
                        معيارية و بيداغوجية تهدف إلى جعل السائقين يتحملون مسؤولياتهم تجاه
                        مخالفاتهم لقواعد حركة
                        المرور من خلال نظام
                        تسيير النقاط المخصصة لكل حائز رخصة سياقة.</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="">
                    <div class="text-center px-5">
                        <h1 class="text-green  pb-4 pt-3">الرخصة بالنقاط</h1>
                        <p>حسب الجريدة الرسمية الصادرة يوم 22 فبراير سنة 2017 م
                            وبموجب قانون رقم 17.05 مؤرخ في 19 جمادى الاول عام 1438 الموافق 16 فبراير سنه 2017 يعدل ويتمم
                            القانون رقم 01.14
                            المؤرخ في 29جمادى الاول عام م 1422 الموافق 19 عشت سنة 2001 والمتعلق بتنظيم حركة المرور عبر الطرق
                            وسلامتها وامنها
                            ر
                        </p>
                        <h1 class="text-green pb-4 pt-3">رخصتي</h1>
                        <p>ترخيص إداري يؤهل حائزه قيادة مركبة ذات محرك في المسالك المفتوحة و حركة المرور</p>
                        <p>تعد رخصة السياقة على دعامة تسمح بتسجيل المعلومات التي يحتويها هذا الملف بشكل إلكتروني .</p>

                        <h1 class="text-green pb-4 pt-3">التفاصيل</h1>


                        <div class="acc">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            أصناف رخصة السياقة
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A,A1,B,C,C1,D,BE,CE,C1E,DE,F
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            أين يتم الطلب؟
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            يودع ملف طلب رخصة السياقة على مستوى الدائرة أو الدائرة الإدارية، مكان إقامة
                                            المعني.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            ما هي الوثائق المكونة للملف؟
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>إستمارة طلب الحصول على رخصة السياقة مملوءة و موقعة من طرف مقدم الطلب،
                                                </li>
                                                <li>بطاقة الإقامة قيد الصلاحية،</li>
                                                <li>شهادة طبية معدة طبقا للأحكام التنظيمية السارية المفعول،</li>
                                                <li>صورتان شمسيتان للهوية (مع النظارات بالنسبة للمترشحين الذين يستعملونها
                                                    عادة)،</li>
                                                <li>طابع جبائي بقيمة 200 دج.</li>
                                                <li>رخصة السياقة </li>
                                            </ul>
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
@endsection
