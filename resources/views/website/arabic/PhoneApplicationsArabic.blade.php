@extends('website.arabic.parent')

@section('title','تطبيقات الهواتف الذكية')

@section('styles')

@endsection

@section('content')


<nav id="nav" class="navbar navbar-expand-lg d-flex justify-content-center">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-stream navbar-toggler-icon"></i>
    </button>

    <div class="collapse navbar-collapse " id="main-nav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('website.homeArabic') }}">الرئيسية</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.microsmartArabic') }}">ميكروسمارت</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 التدريب
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-end" href="{{ route('website.individualsArabic') }}">الأفراد</a></li>
                  <li><a class="dropdown-item text-end" href="{{ route('website.organizationsArabic') }}">المنظمات</a></li>
                 </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#"  data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">تكنولوجيا المعلومات</a>
                <ul class="dropdown-menu">
                    <li class="dropstart">
                        <a href="#" class="dropdown-item text-end dropdown-toggle active" data-bs-toggle="dropdown">التحول الرقمي</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-end" href="{{ route('website.businessSolutionsITArabic') }}">حلول الأعمال IT</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.ProgrammingWebsitesArabic') }}">تصميم وبرمجة مواقع الإنترنت</a></li>
                            <li><a class="dropdown-item text-end active" href="{{ route('website.PhoneApplicationsArabic') }}">تطبيقات الهواتف الذكية</a></li>
                        </ul>
                    </li>
                    <li class="dropstart">
                        <a href="#" class="dropdown-item text-end dropdown-toggle" data-bs-toggle="dropdown">التصميم</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-end" href="{{ route('website.graphicDesignArabic') }}">التصميم الجرافيكي الإبداعي</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.MotionGraphicArabic') }}">الموشن جرافيك</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item text-end" href="{{ route('website.networksArabic') }}">الشبكات</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.businessSolutionsArabic') }}">
                      حلول الأعمال
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      اتصل بنا
                    </a>
                  </li>
        </ul>
    </div>
</nav>

        <div class="banner-PhoneApplications">
            <div class="container d-flex align-items-center ">
                <p>حركة مستمرة، وحافز لا يتوقف</p>
            </div>
        </div>


        <section class="Phone-PhoneApplications">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-Phone">
                            <h3>تطبيقات الهواتف الذكية </h3>
                            <p>تعد تطبيقات الهواتف الذكية أداة هامة لمنظمات الأعمال والأفراد فى الوصول إلى الخدمات والمعلومات وأداة تطبيقية توفر تجربة متميزة ومريحة للمستخدم، والاعتماد على تطبيقات الهواتف الذكية فى  المستقبل تسير بمنحني تصاعدي وأكثر حيوية.</p>
                            <p>تعمل ميكروسمارت على منح عملائها كل ما يحتاجونه من موارد معرفية ومهارات تقنية تلبي احتياجاتهم فى تصميم وبرمجة تطبيقات الهواتف الذكية فى مجالات الترفيه والتواصل والتعليم والصحة والأعمال.</p>


                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-Phone">
                            <img src="{{ asset('website/images/20230511143712__fpdl.in__mobile-services-cartoon-style-vector-concept-illustration_92926-1499_large-removebg-preview.png') }}" alt="">


                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-PhoneApplications"></div>


        <section class="Phone2-PhoneApplications">
            <div class="container text-center">
                <div class="common_text">

                   <p>نحن ندرك أن فريق ميكروسمات فى تكنولوجيا المعلومات يمثل عنصر فريد ومتميز لتحقيق رؤية ورسالة شركتنا، لذلك نحرص على توفير بيئة عمل ملهمة ومحفزة لإطلاق إبداعاتهم وتطوير قدراتهم المهنية. بفضل الجهد المستمر والتزامنا بتقديم الأفضل، تمكن فريق تكنولوجيا المعلومات الحفاظ على تميزنا وتحقيق رضا العملاء وثقتهم فى خدماتنا.</p>
                   <a href="mailto:info@microsmart.net">تواصل معنا </a>
                </div>


    </div>

        </section>

        @endsection

        @section('scripts')

        @endsection
