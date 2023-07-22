@extends('website.arabic.parent')

@section('title','تصميم و برمجة مواقع الويب')

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
                <a class="nav-link " href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
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
                            <li><a class="dropdown-item text-end active" href="{{ route('website.ProgrammingWebsitesArabic') }}">تصميم وبرمجة مواقع الإنترنت</a></li>
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

        <div class="banner-ProgrammingWebsites">
            <div class="container d-flex align-items-center ">
                <p>ميكروسمارت الصلة بين الموهبة والإبداع</p>
            </div>
        </div>


        <section class="Websites-ProgrammingWebsites">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-Websites">
                            <h3>تصميم وبرمجة مواقع الانترنت</h3>
                           <p>تتواصل منظمات الأعمال بشكل دائم بدون انقطاع مع عملائها والبيئة الخارجية على مستوي العالم عبر الموقع الالكتروني لتحقيق أهدافها المختلفة، مما يمكن المنظمات من أداء وظائفها بسهولة ومرونة.</p>
                           <p>جذب العملاء من خلال الانفتاح على تبادل المعلومات وعرض ميزات فريدة للموقع الالكتروني ذو جودة عالية للمستخدمين والتحسين المستمر لتجربة المستخدم وتحسين الوصول إلى المحتوى والتحكم فى الوصول إلى المعلومات، ورفع مستوي الأمان و حماية خصوصية العملاء يعتبر مجال اختصاص وإبداع لفريق عمل ميكروسمارت.</p>
                           <p>الميزات التقنية المتقدمة المتاحة لدي ميكروسمارت، التى يمكن منحها لموقعك الالكتروني لتجعل تجربة منظمتك متقدمة وممتعة, تستند على أصول معرفية وتقنية تعمل ميكروسمارت على تعزيزها وتنميتها باستمرار.</p>
                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-Websites">
                            <img src="{{ asset('website/images/20230511130640__fpdl.in__content-management-system-cartoon-style-vector-concept-illustration_92926-1622_large-removebg-preview.png') }}" alt="">


                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-ProgrammingWebsites"></div>


        <section class="Websites2-ProgrammingWebsites">
            <div class="container text-center">
                <div class="common_text ">

                  <p>نحن ندرك أن فريق ميكروسمات فى تكنولوجيا المعلومات يمثل  عنصر فريد ومتميز لتحقيق رؤية ورسالة شركتنا، لذلك نحرص على توفير بيئة عمل ملهمة ومحفزة لإطلاق إبداعاتهم وتطوير قدراتهم المهنية. بفضل الجهد المستمر والتزامنا بتقديم الأفضل، تمكن فريق تكنولوجيا المعلومات الحفاظ على تميزنا وتحقيق رضا العملاء وثقتهم فى خدماتنا.</p>
                  <a href="mailto:info@microsmart.net">تواصل معنا </a>

                </div>

            </div>

        </section>

        @endsection

        @section('scripts')

        @endsection
