@extends('website.arabic.parent')

@section('title','التحول الرقمي')

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
                <a class="nav-link active" href="{{ route('website.homeArabic') }}">الرئيسية</a>
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
        <div class="banner-digitalTransformation-servArabic">
            <div class="container d-flex align-items-center ">
                <p>نحن الصلة بين الموهبة و الابداع</p>
            </div>
        </div>

        <section class="serv-digitalTransformation-servArabic">
            <h3 class="text-center ss">التحول الرقمي</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-digitalTransformation-servArabic">
                          <h3>هل أنت جاهز لتجعل عملك أكثر سهولة وكفاءة وفاعلية؟</h3>
                          <p>العمليات اليدوية المرهقة تجعل العمل روتينياً وأكثر استهلاكاً للوقت والجهد والمال،  نملك القدرات التى تتيح لمنظمات الأعمال أن تنتقل إلى التحول الرقمي على مستوي العمليات القابلة للتكرار والتى تعد مفتاحاً لنشاط المنظمة، والانتقال نحو الإدارة المحوسبة، والانفتاح نحو الفرص بأمان.</p>
                          <a class="servA" href="{{ route('website.businessSolutionsITArabic') }}">المزيد</a>

                        </div>
                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-digitalTransformation-servArabic">
                            <img src="{{ asset('website/images/20230510144917__fpdl.in__young-smiling-woman-jane-sitting-with-crossed-legs-holding-laptop-freelance-studying-online-education-work-home-work-concept-3d-vector-people-character-illustration-carto.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection

        @section('scripts')

        @endsection
