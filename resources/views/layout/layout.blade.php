<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FontAwesom Link --}}
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
    {{-- FontAwesom Link --}}

    {{-- Bootstrap Link --}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    {{-- end Bootstrap Link --}}

    {{-- Link CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    {{-- end Link CSS --}}

    {{--  titel page --}}
    <title>@yield('titel')</title>
    {{--  end titel page  --}}

</head>

<body>

    <div id="page" class="content">

        <header class="row p-0 m-0 justify-content-between  ">
            <div class="col py-3 ">
                <h4 class="text-center ">الجمهورية الجزائرية الديموقراطية الشعبية</h4>
                <h5 class="text-center py-1 p-0 m-0"> مديرية التقنين و الشؤون العامة </h5>
            </div>
        </header>

        <nav class="navbar bg-green navbar-expand-md p-0 m-0 ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#x" style="">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <i class="fa-solid fa-bars fa-xl" style="color: #000000;"></i>
            </button>
            <div id="x" class="collapse navbar-collapse bg-green mt-4 mt-md-0 p-0 " style="height: 100%">
                <ul class=" navbar-nav row m-0 p-0 ">

                    <a class="col py-3" href="{{ '/' }}">
                        <li class="text-white"> الرئيسية </li>
                    </a>

                    <a class="col py-3" href="{{ route('moukhalafat') }}">
                        <li class="text-white">المخالفات</li>
                    </a>

                    <a class="col py-3" href="{{ route('roukhsati') }}">
                        <li class="text-white">رخصتي </li>
                    </a>

                    <a class="col py-3" href="{{ route('contact') }}">
                        <li class="text-white">الإتصال </li>
                    </a>

                </ul>
            </div>

        </nav>


        <div class="">
            @yield('content')
        </div>


    </div>













    {{--  js files --}}
    <script src="{{ URL::asset('./js/bootstrap.bundle.min.js') }}"></script>
    {{--  end js files --}}

</body>

</html>
