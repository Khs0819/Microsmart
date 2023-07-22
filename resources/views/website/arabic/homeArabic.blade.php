@extends('website.arabic.parent')

@section('title','الرئيسية')

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
                    <a class="nav-link" href="{{ route('website.contactAR') }}">
                      اتصل بنا
                    </a>
                  </li>
        </ul>
    </div>
</nav>
        <div class="banner-home">
            <div class="slideshow-container" onmouseover="show()" onmouseout="hide()">
                  <div class="mySlides fade img1">
                        <div class="container d-flex align-items-center">
                            <div class="Home-text text-container">
                                <h1>ميكروسمارت</h1>
                            <p>نحن الصلة بين الموهبة والإبداع</p>
                            <a class="main" href="">ميكروسمارت</a>
                            <a href="{{ route('website.microsmartArabic') }}">تواصل معنا</a>
                            </div>


                        </div>

                  </div>
                  <div class="mySlides fade img2">
                    <div class="container d-flex align-items-center">
                        <div class="Home-text text-container">
                            <h1>الاستراتيجة</h1>
                       <p>نحن الصلة بين التخطيط والأهداف</p>
                        <a class="main" href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
                        <a href="{{ route('website.microsmartArabic') }}">تواصل معنا</a>
                        </div>


                    </div>

              </div>
              <div class="mySlides fade img3">
                <div class="container d-flex align-items-center">
                    <div class="Home-text text-container">
                        <h1>تكنولوجيا المعلومات</h1>
                    <p>طريقك نحو تحقيق افكارك الابداعية</p>
                    <a class="main" href="{{ route('website.microsmartArabic') }}">تكنولوجيا المعلومات</a>
                    <a href="{{ route('website.microsmartArabic') }}">تواصل معنا</a>
                    </div>


                </div>

          </div>
              </div>
              <div style="text-align:center" class="slider-dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            </div>

            <section class="elements">
                <div class="container">
                    <div class="contant">
                        <div class="row1">
                            <div class="car car1">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>أين نعمل</h4>
                                    <p>يقع المقر الرئيسي لشركة ميكروسمارت فى فلسطين – غزة حيث أطلقت برامجها. تعمل ميكروسمارت على تقديم خدماتها فى بيئات عمل مختلفة فى جميع أنحاء العالم عبر العديد من الوسائل المنسجة مع طبيعة الخدمات.</p>
                                </div>
                            </div>
                            <div class="car car2">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>عملاؤنا</h4>
                                    <p>تزود ميكروسمارت خدماتها على عدة مستويات مختلفة: الأفراد، المنظمات، أسواق العمل والسلع والخدمات، المجتمع.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="car car3">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>معايير الميزة التنافسية</h4>
                                            <p>تتمسك ميكروسمارت بأربعة معايير للميزة التنافسية، الدقة فى الأداء، جودة المخرجات التى تلبي توقعات ورضي العملاء، تكلفة تنافسية، منح العملاء خيار الإبداع.</p>
                                </div>

                            </div>
                            <div class="car car4">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>المسؤولية المجتمعية</h4>
                                     <p>تتبنى ميكروسمارت سياسات تهتم بمصلحة المجتمع والمصلحة الفضلى لكل عملائنا.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </section>

            <section class="serv">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-sm-5 col-md-5 col-lg-5">
                            <div class="serv-text mx-4">
                                <h4>خدماتنا</h4>
                                <p>نصنع كل شيء بالشراكة مع عملائنا، نتناقش، نستمع، نفهم الآراء، نبحث في الخيارات من أجل أن نرتقي فى تحقيق الميزة التنافسية التى تمنحنا علامة تفوق العملاء.</p>

                            </div>

                        </div>
                        <div class="col-12 col-sm-7 col-md-7 col-lg-7">
                            <div class="serv-img">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 ">
                                        <div class="c">
                                            <div class="serv-img1">
                                                <a href="{{ route('website.digitalTransformation-servArabic') }}">
                                                    <img src="{{ asset('website/images/progrmmer.jpg') }}" alt="">
                                                </a>

                                            </div>
                                        <h5>التحول الرقمي</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 ">
                                        <div class="c">
                                            <div class="serv-img2">
                                                <a href="{{ route('website.design-servArabic') }}">
                                                    <img src="{{ asset('website/images/web.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>التصميم</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img3">
                                                <a href="{{ route('website.networks-servArabic') }}">
                                                    <img src="{{ asset('website/images/apps.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>الشبكات</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img4">
                                                <a href="{{ route('website.personnelTraining-servArabic') }}">
                                                    <img src="{{ asset('website/images/design.jpg') }}" alt="">
                                                </a>
                                            </div>
                                       <h5>تدريب أفراد</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img5">
                                                <a href="{{ route('website.OrganizationTraining-servArabic') }}">
                                                    <img src="{{ asset('website/images/mograpic.jpg') }}" alt="">
                                                </a>
                                            </div>
                                       <h5>تدريب منظمات </h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img6">
                                                <a href="{{ route('website.businessSolutions-servArabic') }}">
                                                    <img src="{{ asset('website/images/Consulting.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>حلول الأعمال </h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="competitor">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-7">
                            <div class="competitor-text">
                                <h5>هل أنت منافس ؟</h5>
                                <p>نحن، فريق عمل ميكروسمات، نسعي بعزيمة راسخة نحو التميز في كل ما نقوم به، نؤمن بأن مواردنا البشرية هي القوة الحقيقية التي تقود الي التفوق، ونُقدر أن كل فرد في فريقنا لدية ما يميزه.</p>
                                <p>لا يوجد حدود تقف بين ما نصنعة من أجل العمل بشغف لاحداث فرقا حقيقيا في توقعات العملاء والتطوير  المستمر في قدرات الفريق، وايجاد بيئة العمل المواتية للتطور مليئة بالتحديات ومجزية تشجع على الإبداع والابتكار والنمو الشخصي والتنوع.</p>
                                <p>بانضمامك لشركة ميكروسمارت، فإنك تصبح جزءًا من عائلة تدعم بعضها البعض، تلتزم بسبل المرونة والتوازن بين العمل والحياة لضمان رفاه وسلامة مواردنا البشرية.</p>

                               <p>نجتهد بتوفير كل ما يتطلب الأمر لجمع الموهبة مع الإبداع.</p>
                                <a href="mailto:info@microsmart.net">إلتحق بمواردنا البشرية</a>

                            </div>
                        </div>
                        <div class="col-12 col-lg-5 ">
                            <div class="competitor-img">
                                <img src="{{ asset('website/images/20230508011910_[fpdl.in]_young-caucasian-man-sitting-chair-bag-working-computer-remote-working-home-office-self-isolation-concept-flat-style_285336-1203.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card-page">
                <h4 class="text-center">القيم الأساسية لميكروسمارت</h4>
            <div class="page-c">
            <div class="card1">
            <div class="card-na">
                <div class="na-img">
                    <i class="fa fa-solid fa-user-tie"></i>
                </div>
            </div>
            <div class="card-co">
                <h1>الريادة</h1>
                <p>ننظر إلى المخاطر التي تمت معالجتها وتقديرها جيدا كفرص ، ونفكر بشكل استباقي ونستعد لتحقيق نجاح جديد.</p>
            </div>

            </div>
            <div class="card1">
                <div class="card-na">
                    <div class="na-img">
                        <i class="fa fa-solid fa-user-tie"></i>
                    </div>
                </div>
                <div class="card-co">
                    <h1>النزاهة</h1>
                    <p>العمل بأمانة وانفتاح وحيادية والالتزام بالمبادئ والقيم الأخلاقية القوية للشركة.</p>
                </div>

                </div>
                <div class="card1">
                    <div class="card-na">
                        <div class="na-img">
                            <i class="fa fa-solid fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="card-co">
                        <h1>المساءلة</h1>
                        <p>نعمل علي الوفاء بالالتزامات والواجبات التى تقع علي عاتقنا من خلال أن نكون موثوقين ومسؤولين ونضمن التسليم في الوقت المحدد بجودة عالية.</p>
                    </div>

                    </div>
                    <div class="card1">
                        <div class="card-na">
                            <div class="na-img">
                                <i class="fa fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="card-co">
                            <h1>الشفافية</h1>
                            <p>تسعي ميكروسمات إلى تعزيز العلاقة مع كل أصحاب المصلحة لعمليات ومشاريع ميكروسمارت، لذا تحرص على أن تجعل أعمالها كتاب مفتوح يحتوي صفحات واضحة تحمل المصداقية، الانتماء، والثقة.</p>
                        </div>

                        </div>
                        <div class="card1">
                            <div class="card-na">
                                <div class="na-img">
                                    <i class="fa fa-solid fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="card-co">
                                <h1>النمو والتآزر</h1>
                                <p>المثابرة المستمرة للتطوير والتعلم يعد الركيزة الأهم التى تدعم التقدم المهني والشخصي، نحن نقدر ونطور المواهب والمبادرات والتنوع لموظفينا. وندعم  الجهد الجماعي والتعاون الذى يؤدي إلى أفضل النتائج.</p>
                            </div>

                            </div>
                            <div class="card1">
                                <div class="card-na">
                                    <div class="na-img">
                                        <i class="fa fa-solid fa-user-tie"></i>
                                    </div>
                                </div>
                                <div class="card-co">
                                    <h1>الشغف</h1>
                                    <p>نعمل علي جمع القدرة على الإنجاز مع الرغبة فى تحقيق أفضل النتائج وننظر إلى التحدي بأثارة وأهتمام.</p>
                                </div>

                                </div>
                             </div>
                     </section>

            <section class="CompanyAddress">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex align-items-center ">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="CompanyAddress-text">
                                <h4>عنوان الشركة</h4>
                                <p>غزة - شارع عمر المختار -  مقابل منتزة بلدية غزة -  عمارة الجاردنز -  الطابق السادس.</p>
                                <a href="mailto:info@microsmart.net">اتصل بنا</a>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 r">
                            <div class="CompanyAddress-img">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d715.066519576467!2d34.45408062822397!3d31.511832114145264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1685817752148!5m2!1sar!2s" width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            @endsection

            @section('scripts')

        </div>
            @endsection

