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
                <a class="nav-link" href="{{ route('website.homeArabic') }}">الرئيسية</a>
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
                            <li><a class="dropdown-item text-end active" href="{{ route('website.businessSolutionsITArabic') }}">حلول الأعمال IT</a></li>
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



        <div class="banner-businessSolutionsIT">
            <div class="container d-flex align-items-center ">
                <p>بشغف، نجعل تفوق العملاء علامة تميزنا</p>
            </div>
        </div>


        <section class="businessSolutions-businessSolutionsIT">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-businessSolutionsIT">
                            <h3>حلول الأعمال</h3>
                           <p>إن إختلاف منظمات الأعمال فى هيكلها وعملياتها والطريقة التى تدير بها أعمالها يتطلب فهم دقيق لاحتياجات المنظمات المتمايزة والتى يحتاج إلى فريق عمل محترف يملك خبرات متراكمة فى تقديم حلول الأعمال فى مجال تكنولوجيا المعلومات الرقمية.</p>
                           <p>نؤمن بقاعدة الإستثناء عند تقديم خدماتنا لحل تحديات الأعمال، نعتبر كل منظمة تتميز بالإستثنائية التى تمنحنا التميز في الإبداع والإبتكار التى يبدأ من الفهم الدقيق لاحتياجات العملاء ونثير كل الاعتبارات فى الحاضر لنستشرف المستقبل لنمنح عملائنا أدوات التفوق.</p>
                          <p>عالم الأعمال أصبح رقميا أكثر تحولا للتكنولوجيا، تطور لا يتوقف، الحاجة إلى الإنسجام مع التطور تتعاظم وتصبح ضرورة.</p>

                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-businessSolutionsIT">
                            <img src="{{ asset('website/images/20230511121850__fpdl.in__online-marketing-financial-report-chart-data-analysis-web-development-concept-tablet-with-data-chart-3d-vector-illustration_145666-1529_large-removebg-preview.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="Advantages-businessSolutionsIT">
            <h3 class="text-center">نمنحك مزايا متقدمة </h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/classroom.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>سهولة ومرونة الإعدادات.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>النتنفيذ وفق جول زمني دقيق.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/design-thinking.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>الاستمرارية في الدعم الفني والتطوير.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>التمسك بمعايير الميزة التنافسية التى  تتبنها ميكروسمارت.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                 <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>الدقة فى الأداء.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>جودة المخرجات التى تلبي توقعات ورضى العملاء.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                 <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>تكلفة تنافسية.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>منح العملاء خيار الإبداع.</p>

                            </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>


        <div class="bann-businessSolutionsIT"></div>

        <section class="businessSolutions2-businessSolutionsIT">
            <div class="container text-center">

                <div class="common_text">
                    <p>نحن ندرك أن فريق ميكروسمات فى تكنولوجيا المعلومات يمثل  عنصر فريد ومتميز لتحقيق رؤية ورسالة شركتنا، ولذلك نحرص على توفير بيئة عمل ملهمة ومحفزة لإطلاق إبداعاتهم وتطوير قدراتهم المهنية. وبفضل الجهد المستمر والتزامنا بتقديم الأفضل، تمكن فريق تكنولوجيا المعلومات الحفاظ على تميزنا وتحقيق رضا العملاء وثقتهم فى خدماتنا.</p>
                        <a href="mailto:info@microsmart.net">تواصل معنا </a>
                    </div>

            </div>

        </section>

        @endsection

        @section('scripts')

        @endsection
