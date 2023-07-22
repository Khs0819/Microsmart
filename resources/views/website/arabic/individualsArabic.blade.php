@extends('website.arabic.parent')

@section('title','الأفراد')

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
                <a class="nav-link dropdown-toggle active"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 التدريب
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-end active" href="{{ route('website.individualsArabic') }}">الأفراد</a></li>
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


        <div class="banner-individuals">
            <div class="container d-flex align-items-center ">
                <p>بشغف، نجعل تفوق العملاء علامة تميزنا</p>
            </div>
        </div>


        <section class="indiv-individuals">
            <h3 class="text-center">الأفراد</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-individuals">
                            <p>تتبني ميكروسمارت فى برامج التدريب الموجة نحو الأفراد منهجية التدريب المبني على الكفاءة والذى يستند على مبدأ أساسي وهو فردانية الاحتياجات التدريبية. الكفاءة تحتاج الي رعاية مستمرة على مستوى الكفاءة الشخصية التى يجب أن تتسم بالتطوير المستمر، والتدريب الانتقائى لكفاءة المهنة الذى يساهم فى الانتقال من الممارس للمهنة إلى الخبير.</p>
                            <p>تعمل ميكروسمات على تحليل الاحتياجات التدريبية وتطوير مؤشرات قابلة للقياس وتحديد مخرجات التدريب المتوقعة بشكل دقيق يتضمن مكونات الكفاءة (المعرفة، المهارة والسلوك)، حيث يستطيع المتدرب معرفة معرفة مخرجات التدريب بشكل مسبق وقياس الأثر على الكفاءة فى مراحل مختلفة للتدريب ، كما تحرص ميكروسمارت على تزويد المتدرب تقرير أداء مفصل يوضح كافة الجوانب التى تتعلق بكفاءة الفرد فيما يتعلق بمهام ونشاط المتدرب، وتوصيات تتضمن جوانب القوة والتحسين ونصائح متخصصة تنسجم مع موضوع التدريب.</p>
                            <p>توظف ميكروسمارت طاقم عمل ومتخصصين محترفين فى التدريب بناء على مقاييس وخصائص متعددة تنسجم مع المخرجات الفريدة لكل دورة تدريبية لضمان احترافية توصيل مخرجات التدريب وفق مخرجات التدريب المعدة مسبقا.</p>

                        </div>
                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-individuals">
                            <img src="{{ asset('website/images/20230510144917__fpdl.in__young-smiling-woman-jane-sitting-with-crossed-legs-holding-laptop-freelance-studying-online-education-work-home-work-concept-3d-vector-people-character-illustration-carto.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection

        @section('scripts')

        @endsection
