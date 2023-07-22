@extends('website.arabic.parent')

@section('title','عن الشركة')

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
                <a class="nav-link active" href="{{ route('website.microsmartArabic') }}">ميكروسمارت</a>
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

        <div class="banner-microsmart">
            <div class="container d-flex align-items-center ">
                <p>نحن الصلة بين الموهبة و الابداع</p>
            </div>
        </div>


        <section class="introductory-microsmart">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-introductory">
                            <h3>لمحة تعريفية</h3>
                            <p>تأسست ميكروسمارت فى فبراير - 2019، لتقديم خدمات متخصصة فى مجالات التدريب المبني على الكفاءة التي تلبي احتياجات الأفراد، كما تتمتع بقدرات احترافية فى تزويد خدمات بناء القدرات للمنظمات، وتزويد خدمات  تكنولوجيا المعلومات الرقمية وفق مبدأ تفوق العملاء، وخدمات حلول الأعمال في مجالات الريادة والأعمال .</p>

                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-introductory">
                            <img src="{{ asset('website/images/Resume-bro.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="Administration-microsmart">
            <h3 class="text-center topp">الإدارة</h3>
            <div class="container">
                <div class="row align-items-center my-5">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="text-Administration">
                            <h3>مجلس الإدارة</h3>
<p>تتمثل المهام والمسؤليات الرئيسية لمجلس إدارة شركة ميكروسمارت في صياغة الخطة الاستراتيجية للبرامج المختلفة و مشاركة الإدارة التنفيذية فى وضع إجراءات العمل (SOPs) موضع التنفيذ وفقا للخطة الاستراتيجية والمبادئ والبروتكولات والقيم والمسؤوليات ومدونة السلوك المتوقعة من الأعضاء والتنفيذيين.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="img-Administration">
                            <img src="{{ asset('website/images/Connected world-cuate.png') }}" alt="">
                        </div>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="img2-Administration">
                                <img src="{{ asset('website/images/Pitch meeting-bro.png') }}" alt="">
                            </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="text2-Administration text-center">
                            <h3>المجلس الاستشاري</h3>
                           <p>مجموعة من الخبراء الذين يتميزون بالمهنية والخبرة فى مجالات عدة، يقدمون المشورة والتوجيهات والمعرفة  لمجلس الإدارة.</p>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="text3-Administration text-center">
                            <h3> الإدارة التنفيذية</h3>
                            <p>يتولي مهام الإدارة التنفيذية مدراء البرامج لشركة ميكروسمارت، وتتمثل مهامها الرئيسية فى تنفيذ الرؤية و الرسالة الاستراتيجية المناطة بالبرامج على المستويات الادارية والعملياتية مستندة على الكفاءات والقيم والمبادئ وبيئة العمل الإيجابية المواتية لتحقيق الطموحات.</p>
                        </div>
                    </div>

            </div>


        </div>
    </div>

    <section class="CompanyAddress">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="CompanyAddress-text">
                        <h4>عنوان الشركة</h4>
                        <p>غزة - شارع عمر المختار -  مقابل منتزة بلدية غزة -  عمارة الجاردنز -  الطابق السادس.</p>

                        <a href="mailto:info@microsmart.net">اتصل بنا</a>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 r">
                    <div class="CompanyAddress-img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d715.066519576467!2d34.45408062822397!3d31.511832114145264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1685817752148!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection

    @section('scripts')

    @endsection
