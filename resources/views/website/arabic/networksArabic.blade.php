@extends('website.arabic.parent')

@section('title','الشبكات')

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
                    <li><a class="dropdown-item text-end active" href="{{ route('website.networksArabic') }}">الشبكات</a></li>
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

        <div class="banner-networks">
            <div class="container d-flex align-items-center ">
              <p>بشغف، نجعل تفوق العملاء علامة تميزنا</p>
            </div>
        </div>


        <section class="net-networks">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-net">
                            <h3>الشبكات</h3>
                            <p>إن مهام إنشاء الشبكات من تصميم وبناء واستخدام الشبكة بما يشمل أيضا إدارة وصيانة وتشغيل البنية التحتية للشبكة والبرمجيات والسياسات ومتطلبات أمان صارمة مثل التشفير من طرف إلى طرف يتطلب فنيين شبكة متخصصين للإشراف على الشبكة وتنفيذ تلك المهام.</p>
                            <p>نحن شركة متخصصة فى تزويد شبكات الكمبيوتر والاتصالات للعملاء سواء كانوا أفراد أو منظمات، نعمل على توفير حلول متخصصة يمكن الاعتماد عليها للتأكد من أن شبكتك الحالية أو الجديدة تعمل بأمان وكفاءة. </p>

                            <p>بالإضافة إلى ذلك، نحن نقدم خدمات الصيانة بحيث يمكن لعملائنا الاعتماد علينا لإصلاح أي مشاكل تظهر في الشبكة في أي وقت.
                                طوال الوقت، نحن نعمل على تقديم خدمات عالية الجودة وبأسعار تنافسية، ونسعى دائمًا لتحسين تجربة عملائنا.
                                </p>
                        </div>



                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-net">
                            <img src="{{ asset('website/images/20230511150052__fpdl.in__web-development-concept-3d-illustration-icon-composition-with-website-layout-development-content_9209-8454_large-removebg-preview.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-networks"></div>


        <section class="net2-networks">
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
