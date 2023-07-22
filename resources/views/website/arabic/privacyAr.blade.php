@extends('website.arabic.parent')

@section('title','سياسة الخصوصية')

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
        <div class="privacy">
            <div class="container">
                <h1>سياسة الخصوصية</h1>
                <h3 class="my-4 mmyyyy">التاريخ: شهر مايو، لسنة 2023</h3>

        <p>تنطبق سياسة الخصوصية لميكروسمارت على موقعها الالكتروني ومواقع التواصل الاجتماعي، حيث يصف إشعار الخصوصية كيف ميكروسمارت تجمع البيانات الشخصية وكيفية معالجتها واستخدامها وحمايتها.</p>

        <p>يمكن لميكروسمارت أن تعمل على تعديل أو تغيير بنود سياسة الخصوصية بدون الرجوع إلى أي طرف.</p>

        <p>تعمل ميكروسمارت على تقديم خدمات التدريب للأفراد والمنظمات، خدمات تكنولوجيا المعلومات الرقمية وتشتمل هذه الخدمات المواقع الالكترونية، التطبيقات، البرامج، و كل ما يتعلق بأنشطة التسويق الالكتروني.</p>

        <ol>
          <li>
            <h3>1)	جمع البيانات: </h3>
            <ul>
              <li>في برنامج التدريب للأفراد، تعمل ميكروسمات على جمع البيانات عامة من عملائها تشمل الاسم، الجنس، تاريخ الميلاد، رقم الهاتف، البريد الالكتروني، المحافظة، التعليم، وتسمية الدورات التدريبية التى يرغب العملاء الإلتحاق بها، وتفضيلات العملاء.</li>
              <li>من خلال طلب (اتصل بنا) يستطيع العملاء، الأفراد وشركات ومنظمات الأعمال، الاتصال بالشركة، وطلب خدمة محددة، يشمل الطلب بيانات الاسم، رقم الاتصال، البريد الالكتروني، ونص الرسالة.</li>
              <li>تعمل ميكروسمارت على جمع بيانات من استبيانات لأغراض بحثية مختلفة، على سبيل المثال وليس الحصر، خدمات التدريب، تحسين الجودة، خدمات الأعمال، من خلال الموقع الاولكتروني أو وسائل التواصل الاجتماعي.</li>
              <li>يستخدم الموقع الالكتروني لميكروسمارت تقنية "ملفات تعريف الارتباط" لجمع معلومات حول كيفية استخدام الموقع الالكتروني، والتي قد تتضمن بياناتك حيث يعد استخدام ملفات تعريف الارتباط أمرًا ضروريًا لتشغيل موقعنا الالكتروني وتحسين تجربة عملائنا.</li>
            </ul>
          </li>
          <li>
            <h3>2)	استخدام البيانات:</h3>
            <p>تستخدم ميكروسمارت البيانات لتحقيق المهام التالية:</p>
            <ul>
              <li>تحسن جودة خدماتها.</li>
              <li>تحديد الاحتياجات التدريبية والتفضيلات للخدمات الفردية والأعمال.</li>
              <li>الاغراض التسويقية والبحثية.</li>
              <li>دراسة المنتجات والأسواق وتفضيلات المستهلك.</li>
              <li>التواصل مع العملاء.</li>
            </ul>
          </li>
          <li>
            <h3>3)	أمان البيانات:</h3>
            <ul>
              <li>كافة البيانات التي يقدمها العملاء تتميز بالخصوصية والسرية.</li>
              <li>الوصول إلى البيانات محدودة وفقًا للتخصص ومهام الموظفين المعنيين ووفق بروتوكولات الوصول وإجراءات أخرى.</li>
            </ul>
          </li>
          <li>
            <h3>4)	مشاركة البيانات: </h3>
            <ul>
              <li>لا تشارك ميكروسمارت البيانات الفردية للعملاء مع أي طرف.</li>
              <li>متاح لميكروسمارت مشاركة نتائج البحوث والدراسات بشكل عام بحيث لا يتضمن بيانات فردية للعملاء.</li>
            </ul>
          </li>
          <li>
            <h3>5)	حذف البيانات:</h3>
            <ul>
              <li>تحذف ميكروسمارت البيانات العملاء غير المكتملة والتي لا تتوافق مع معايير الجودة، ولا تتقيد ميكروسمارت بأي إجراء لإبلاغ العملاء الذين تنطبق على بياناتهم هذا البند.</li>
              <li>تحذف ميكروسمارت بيانات العملاء للعديد من الاعتبارات، على سبيل المثال وليس الحصر، تقديم الخدمة، تحديث وتطوير الموقع الالكتروني بشكل كلي أو جزئي، تطوير أدوات جمع البيانات، ويمكن لميكروسمارت بشكل طوعي أن تنوه لهذا الخصوص عبر موقعها الالكتروني فقط.</li>
            </ul>
          </li>
          <li>
            <h3>6)	اخلاء مسؤولية:</h3>
            <ul>
              <li>لا يمنح ولا يعطي إشعار الخصوصية هذا أي حقوق تعاقدية من أي نوع أو أي حقوق قانونية أخرى، ولا ينشئ أي التزامات على ميكروسمارت فيما يتعلق بأي طرف، أو نيابة عن أي طرف.</li>
             <li>-	في حال وجود رابط لطرف ثالث أو لشريك لميكروسمارت أو رابط تسويقي لطرف ما على موقعنا الالكتروني أو على مواقعنا للتواصل الاجتماعي، ميكروسمارت ليست مسؤولة عن محتوى مواقع الويب الخاصة بأي طرف أخر ولا نمثل أي طرف. لذلك، نوصيك بمراجعة سياسة الخصوصية والأمان لكل رابط تقوم بتسجيل الدخول إليه.</li>
            </ul>
          </li>
        </ol>


            </div>
        </div>
        @endsection

        @section('scripts')

        @endsection
