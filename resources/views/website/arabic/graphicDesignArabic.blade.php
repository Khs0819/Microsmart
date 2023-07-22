@extends('website.arabic.parent')

@section('title','التصميم الجرافيكي')

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
                        <a href="#" class="dropdown-item text-end dropdown-toggle" data-bs-toggle="dropdown">التحول الرقمي</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-end" href="{{ route('website.businessSolutionsITArabic') }}">حلول الأعمال IT</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.ProgrammingWebsitesArabic') }}">تصميم وبرمجة مواقع الإنترنت</a></li>
                            <li><a class="dropdown-item text-end" href="{{ route('website.PhoneApplicationsArabic') }}">تطبيقات الهواتف الذكية</a></li>
                        </ul>
                    </li>
                    <li class="dropstart">
                        <a href="#" class="dropdown-item text-end dropdown-toggle active" data-bs-toggle="dropdown">التصميم</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-end active" href="{{ route('website.graphicDesignArabic') }}">التصميم الجرافيكي الإبداعي</a></li>
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

        <div class="banner-graphicDesign">
            <div class="container d-flex align-items-center ">
               <p>ميكروسمارت، فلسطينية الهوية.. برؤية عالمية</p>
            </div>
        </div>


        <section class="graphic-graphicDesign">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12  col-lg-7">
                        <div class="text-graphic">
                            <h3>التصميم الجرافيكي الإبداعي</h3>
                            <p>نحترف مهارة التصميم الجرافيكي الإبداعي التى تطبع فى وعي عملاء منظمات الأعمال تجربة بصرية فريدة ومميزة لجعل الهوية البصرية للعلامة التجارية راسخة ومؤثرة في السلوك التجاري والشرائي. نحترف العمل على توظيف الألوان والصور والخطوط والأشكال بشكل مبتك ومنسجم مع الهوية البصرية للعلامة التجارية، نعمل باحتراف على فهم المنافسين وتحليل متطلبات النجاح لتحقيق إمتياز تفوق عملاء ميكروسمارت.</p>

                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-graphic">
                            <img src="{{ asset('website/images/20230511144509__fpdl.in__web-design-concept-3d-illustration-icon-composition-with-program-interface-drawing-graphic-elements-site-layout-professional-software-designer-vector-illustration-modern-.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-graphicDesign"></div>


        <section class="graphic2-graphicDesign">
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
