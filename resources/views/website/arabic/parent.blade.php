<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('website/images/tap.png') }}">
    <title>ميكروسمارت | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('website/Css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/Css/Responsive.css') }}">
    @yield('styles')
</head>

<body>

    <div class="load" id="loadd">
        <div class="logoh"></div>
    </div>
    <div class="logo-content" id="logo-content">
        <a id="arr" href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="{{ route('website.homeArabic') }}">
                        <img src="{{ asset('website/images/mm.svg') }}" alt="MicroSmart Logo">
                    </a>
                </div>
                <div class="hours">
                    <i class="fa-solid fa-user-clock my-2"></i>
                    <div class="headerText mx-1">
                        <h3>ساعات العمل</h3>
                        <p>السبت- الخميس 8 صباحا - 9 مساءا</p>
                    </div>
                </div>



                <div class="mail">
                    <a href="{{ route('website.contactAR') }}">
                        <i class="fa-solid fa-envelope"></i>
                    </a>

                </div>

                <div class="dropdown ">
                    <a class=" langg dropdown-toggle d" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        اللغة (AR)
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('website.homeEng') }}">EN</a></li>
                    </ul>
                </div>

            </div>
        </header>


        @yield('content')

        <footer>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="logo">
                            <a href="{{ route('website.homeArabic') }}">
                                <img src="{{ asset('website/images/mm.svg') }}" alt="">
                            </a>

                        </div>
                        <p>نرى التفاصيل بدقة وعناية، نبدع في عصف وإثارة الأفكار ، نحترف تحقيق الأهداف، لا تنفصل أهدافنا
                            عن أهداف عملائنا، نحن شركاء في التفوق.</p>

                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                        <div class="privUse">
                            <p>بنود <a href="{{ route('website.privacyAr') }}">الخصوصية </a>و <a
                                    href="{{ route('website.useAr') }}">الاستخدام</a></p>
                        </div>


                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="nnav">
                            <a href="{{ route('website.homeArabic') }}">الرئيسية</a>
                            <a href="{{ route('website.microsmartArabic') }}">ميكروسمارت</a>
                            <a href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
                            <a href="{{ route('website.individualsArabic') }}">التدريب</a>
                            <a href="{{ route('website.businessSolutionsITArabic') }}">تكنولوجيا المعلومات</a>
                            <a href="{{ route('website.businessSolutionsArabic') }}">حلول الأعمال</a>
                            <a href="mailto:microsmart@gmail.com">تواصل معنا</a>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="full">
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-user-clock mx-2"></i>
                                <p>السبت-الخميس 8 صباحا- 9 مساءا</p>
                            </div>
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-location-dot mx-2"></i>
                                <p>غزة - شارع عمر المختار - مقابل منتزة بلدية غزة - عمارة الجاردنز - الطابق السادس.</p>

                            </div>
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-phone mx-2"></i>
                                <p>+972597364417</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <p>بريدك الإلكتروني</p>
                        <input type="email" placeholder="ادخل بريدك الإلكتروني">
                        <input type="submit" value="سجل">
                    </div>
                </div>
            </div>
            <div class="ff">
                <div class="container d-flex align-items-center justify-content-center">
                    <p>Copyright © 2023 <a href="{{ route('button_users') }}">MicroSmart</a> </p>
                </div>
            </div>
        </footer>
        <script src="{{ asset('website/Js/nain.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        @yield('scripts')
</body>

</html>
