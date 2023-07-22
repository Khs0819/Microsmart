@extends('website.arabic.parent')

@section('title','الاستراتيجية')

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
                <a class="nav-link active" href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
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

        <div class="banner-Strategy">
            <div class="container d-flex align-items-center ">
                <p>بشغف، نجعل تفوق العملاء علامة تميزنا</p>
            </div>
        </div>


        <section class="Vision-Strategy">
            <h3 class="text-center toptext">الاستراتيجية</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-Vision">
                            <h3 >الرؤية</h3>
<p>بحلول 2027، ميكروسمارت المنافس الأول، والأكثر موثوقية، فى تقديم خدمات تتفوق على توقعات عملائها فى مجالات التدريب، خدمات الأعمال، وحلول تكنولوجيا المعلومات الرقمية لمنظمات الاعمال.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-Vision">
                            <img src="{{ asset('website/images/20230509155129__fpdl.in__dart-arrow-violet-hit-center-target-customer-cartoon-pastel-minimal-style-you-can-used-attraction-campaign-accurate-promo-print-ad-business-finance-ux-ui-3d-vector-illust.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="message-Strategy">
            <div class="container">
                <div class="row d-flex align-items-center">

                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-message">
                            <img src="{{ asset('website/images/20230509160036__fpdl.in__3d-paper-plane-mail-icon-send-new-message-minimal-email-sent-letter-social-media-online-marketing-subscribe-newsletter-3d-plane-flight-icon-vector-rendering-illustration_.png') }}" alt="">

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-message">
                            <h3 >الرسالة</h3>
                           <p>تنطلق ميكروسمارت نحو تحقيق الميزة التنافسية فى تقديم خدماتها فى مجال التدريب وفق منهجية التدريب المبني على الكفاءة، وتحقيق المصلحة الفضلى من خلال تنويع مزيج خدمات التدريب.</p>
                           <p>تعمل ميكروسمارت على تزويد منظمات الأعمال ميزة التفرد فى مجال تكنولوجيا المعلومات الرقمية تستند على مبدأ تفوق العملاء، وتقدم خدمات حلول الأعمال التى تمنح المنظمات قدرات ذكية وأكثر لياقة واستباقية فى التفوق والامتثال للأهداف واستثمار الفرص.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="Objectives-Strategy">
            <h3 class="text-center">الأهداف</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="zx img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/classroom.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>تصميم أنظمة تدريب متخصصة للأفراد، وبناء  القدرات لمنظمات الأعمال، وفق مبادئ فردانية احتياجات العملاء، الجودة، والمصلحة الفضلى لعملاء ميكروسمارت.</p>

                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>تزويد خدمات تكنولوجيا المعلومات الرقمية لمنظمات الأعمال بمبدأ تفوق العملاء.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/design-thinking.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>تقديم خدمات حلول الأعمال للمنظمات فى مجالات الإدارة الاستراتيجية والتنظيم والموارد البشرية.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                 <div class="zx img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>تقديم حلول تقنية إبداعية فى مجالات تكنولوجيا المعلومات الرقمية فى ميادين التعليم، الإدارة التسويق، الدعاية، ومنتجات تطبيقة لخدمة الإنسان والمجتمع.</p>

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
