@extends('website.arabic.parent')

@section('title','شروط الاستخدام')

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
        <div class="banner-PhoneApplications">
            <div class="container d-flex align-items-center ">
                <p>حركة مستمرة، وحافز لا يتوقف</p>
            </div>
        </div>
        <div class="use">
            <div class="container">
                <h1>شروط الاستخدام</h1>
               <h3 class="my-4 mmyyyy">التاريخ: شهر مايو، لسنة 2023</h3>
        <ol>
          <li>
            <h3>1-	قبول شروط الاستخدام:</h3>
            <p>إن الخدمات المقدمة من قبل ميكروسمارت لعملائها خاضعة لشروط الاستخدام الموضحة أدناه:</p>
            <ul>
                <li>يحق لميكروسمارت أن تعمل على تحديث وتعديل وتغيير أي من شروط الاستخدام في أي وقت.</li>
                <li>يمكن أن تعمل ميكروسمارت بشكل طوعي على التنوية عن أي من التعديلات أو التغيرات عبر موقعها الالكتروني فقط.</li>
                <li>يوافق العملاء بأن لديهم القدرة والصلاحية لقبول الشروط والتقيد بالالتزامات الموضحة في شروط الاستخدام.</li>

            </ul>
          </li>
          <li>
            <h3>2-	وصف الخدمات:</h3>

            <ul>
                <li>عبر موقعها الالكتروني، تقدم ميكروسمارت لعملائها محتوي واضح من البرامج التدريبية التى تستهدف الأفراد والمنظمات، خدمات تكنولوجيا المعلومات المتنوعة، وخدمات متخصصة لشركات ومنظمات الأعمال، وأنشطة التسويق.</li>
                <li>أيضا، قد يشتمل الموقع الالكتروني إعلانات ومعلومات إضافية لأنشطة الشركة، أو أنشطة لشركاءالشركة.</li>

            </ul>
          </li>
          <li>
           <h3>3-	حدود الاستخدام:</h3>
            <ul>
                <li>لا يُسمح لأي طرف من أفراد و شركات ومنظمات أن تنسخ أو ترسل أو توزع أو تنشر أو تبيع أو تعيد إنتاج أي أعمال مشتقة من المعلومات والبرامج والخدمات التي تميز أو تخص ميكروسمارت، إلا إذا كان هناك اشعارات أو اتفاقيات بخلاف ذلك.</li>
                <li>تشغيل وتوفر ودخول الموقع الالكتروني، ربما يتوقف بشكل كامل أو جزئي لأسباب تتعلق بالأنترنت أو الشبكات.</li>
                <li>يقع على عاتق المستخدمين عدم انتهاك خصوصية وسلامة شبكات وأنظمة ميكروسمارت وعدم تجاوز الدخول القانوني لهذه الشبكات والأنظمة.</li>

            </ul>
          </li>
          <li>
            <h3>4-	الدخول:</h3>
            <ul>
              <li>يستطيع العملاء الدخول الي الموقع الالكتروني لميكروسمارت وبعناية قراءة ما تقدمة ميكروسمارت من خدمات ومنتجات بتفاصيل واضحة.</li>
              <li>يكون العملاء بالعمر القانوني ومؤهلين قانونيا  للاستفادة من خدمات ميكروسمارت تبعا للوصف والتفاصيل المتعلقة بالخدمات.</li>
              <li>يمكن للعملاء التسجيل في طلب الدورات التدريبية، أو تقديم طلب من خلال " اتصل بنا" لطلب خدمة أخرى، عبر الموقع الالكتروني لميكروسمارت. </li>
              <li>بتاتا وبشكل قاطع، لا تطلب ميكروسمارت من خلال موقعها الالكتروني أو من خلال مواقعها للتواصل الاجتماعي من عملائها الافصاح عن أي معلومات مالية.</li>
            </ul>
          </li>
          <li>
        </ol>


            </div>
        </div>
        @endsection

        @section('scripts')

        @endsection
