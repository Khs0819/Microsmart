@extends('website.arabic.parent')

@section('title','حلول الأعمال')

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
                <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">تكنولوجيا المعلومات</a>
                <ul class="dropdown-menu">
                    <li class="dropstart">
                        <a href="#" class="dropdown-item text-end dropdown-toggle" data-bs-toggle="dropdown">التحول الرقمي</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-end" href="{{ route('website.businessSolutionsITArabic') }}">حلول الأعمال IT</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.ProgrammingWebsitesArabic') }}">تصميم وبرمجة مواقع الإنترنت</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.PhoneApplicationsArabic') }}">تطبيقات الهواتف الذكية</a></li>
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
                    <a class="nav-link active" href="{{ route('website.businessSolutionsArabic') }}">
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


        <div class="banner-businessSolutions">
            <div class="container d-flex align-items-center ">
                <p>حركة مستمرة، وحافز لا يتوقف</p>
            </div>
        </div>


        <section class="Solutions-businessSolutions">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-7">
                        <div class="text-Solutions">
                            <h3>حلول الأعمال</h3>
                            <p>فى بيئات الأعمال متسارعة التغير والتطور والحاجة الى أن تستكشف منظمات الأعمال الفرص التى تحتاج إلى مؤامة مستمرة لقدرات المنظمة والاستعداد المدروس لتجنب المخاطر والتحديات، أصبحت الحاجة إلى عقل ريادي يسعه فهم المتغيرات المعقدة للأعمال ضرورة ملحة.</p>
                            <p>تتمثل استراتيجية ميكروسمارت فى تقديم خدمات حلول الأعمال على فهم متكامل لكافة الأبعاد والمتغيرات  لمنظمة الأعمال ووضع خطة عملية تساهم فى تحقيق أهداف المنظمة.</p>
                            <p>تستند ميكروسمات فى تقديم خدمات حلول الأعمال للمنظمات في مجالات الإدارة الاستراتيجية والتنظيم والموارد البشرية على أصول متنوعة من الخبرات العملية من خلال مستشارين أعمال مخضرمين في مجالات الريادة، وأكاديميين خبراء في معارف متخصصة فى ميادين الإدارة.</p>

                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-5">
                        <div class="img-Solutions">
                            <img src="{{ asset('website/images/20230510145423__fpdl.in__flat-isometric-concept-illustration-digital-marketing-target-network_18660-2110-removebg-preview.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="BusinessSolutions-Services">
            <div class="container">
                <h3>تقدم ميكروسمارت مزيج من خدمات حلول الأعمال</h3>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                             <p>1. برنامج تطوير القوى العاملة المتخصص.</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services ">
                            <p>2. حلول أعمال تكنولوجيا المعلومات.</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                            <p>3. الدراسات والبحوث للأسواق، المستهلك، المُنتَج.</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                            <p>4. استشارات الأعمال.</p>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection

        @section('scripts')

        @endsection
