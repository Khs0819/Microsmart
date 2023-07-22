
@extends('website.arabic.parent')

@section('title','المنظمات')

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
                <a class="nav-link" href="{{ route('website.homeArabic') }}">الرئيسية</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.microsmartArabic') }}">ميكروسمارت</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 التدريب
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-end" href="{{ route('website.individualsArabic') }}">الأفراد</a></li>
                  <li><a class="dropdown-item text-end active" href="{{ route('website.organizationsArabic') }}">المنظمات</a></li>
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

        <div class="banner-organizations">
            <div class="container d-flex align-items-center ">
                <p>ميكروسمارت، فلسطينية الهوية.. برؤية عالمية</p>
            </div>
        </div>


        <section class="organiz-organizations">
            <h3 class="text-center">المنظمات</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-organizations">
                            <p>تقدم ميكررسمارت برنامج تطوير القوى العاملة المتخصص (The Custom Fit Workforce Development) الذى يهدف الى تزويد برامج تدريب مرنة ومتخصصة مصممة لتعزيز كفاءة العاملين بالمنظمة والاحتفاظ بهم كقوة تعمل على تحقيق أهداف المنظمة وتعزيز قدرة المنظمة على المنافسة وتجاوز القدرات التقليدية للبقاء نحو القدرات الذكية والأكثر لياقة واستباقية في التفوق والامتثال للأهداف واستثمار الفرص.</p>
                            <p>تنتهج ميكروسمارت استراتيجية التحليل الشامل لكافة مكونات النظام والاهداف الاستراتيجية للمنظمة وتعمل على تحليل القوي العاملة وتحديد الطاقات الكامنة ومقارنة القوة المتاحة مع الطموحات الاستراتيجة للمنظمة وتقديم خطة متكاملة تشمل الفجوة والتوصيات التى تعمل على سد الفجوة وسبل استقطاب العقول المبدعة الكفيلة بتحقيق الطموحات.</p>
                            <p>تتمسك ميكروسمارت بالاعتقاد الراسخ أن استثمار المنظمات في تطوير قوي العمل يساهم بشكل أساسي فى  تحقيق الأهداف علي مستوي زمني محدد، إلا أنه يشكل محور أساسي فى استقطاب العقول المبدعة و فى استثمار الفرص الكامنة على المستوى الزمني البعيد.</p>

                        </div>
                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-organizations">
                            <img src="{{ asset('website/images/20230510145745__fpdl.in__3d-seo-optimization_165488-5895-removebg-preview.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        @section('scripts')

        @endsection
