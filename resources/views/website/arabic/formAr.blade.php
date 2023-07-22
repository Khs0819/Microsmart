<?php
use App\Models\Program;
$programs = Program::all();
?>
<?php
use App\Models\Course;
$courses = Course::all();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('website/images/tap.png') }}">
    <title>MicroSmart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('website/Css/formAr.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="{{ route('website.homeArabic') }}">
                    <img src="{{ asset('website/images/mm.svg') }}" alt="MicroSmart Logo">
                </a>
            </div>
            <div class="hours">
                <i class="fa-solid fa-user-clock my-2"></i>
                <div class="headerText mx-1">
                    <h3>ساعات العمل</h3>
                    <p>السبت- الخميس 8 صباحا - 5 مساءا</p>
                </div>
            </div>



            <div class="mail">
                <a href="{{ route('website.contactAR') }}">
                    <i class="fa-solid fa-envelope"></i>
                    <p>اتصل بنا</p>
                </a>


            </div>

            <div class="dropdown">
                <a class=" langg dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    اللغة (AR)
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('website.formAr') }}">EN</a></li>
                </ul>
            </div>
        </div>
    </header>

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
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        التدريب
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-end"
                                href="{{ route('website.individualsArabic') }}">الأفراد</a></li>
                        <li><a class="dropdown-item text-end"
                                href="{{ route('website.organizationsArabic') }}">المنظمات</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">تكنولوجيا المعلومات</a>
                    <ul class="dropdown-menu">
                        <li class="dropstart">
                            <a href="#" class="dropdown-item text-end dropdown-toggle"
                                data-bs-toggle="dropdown">التحول الرقمي</a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item text-end"
                                        href="{{ route('website.businessSolutionsITArabic') }}">حلول الأعمال IT</a>
                                </li>
                                <li><a class="dropdown-item text-end"
                                        href="{{ route('website.ProgrammingWebsitesArabic') }}">تصميم وبرمجة مواقع
                                        الإنترنت</a></li>
                                <li><a class="dropdown-item text-end"
                                        href="{{ route('website.PhoneApplicationsArabic') }}">تطبيقات الهواتف
                                        الذكية</a></li>
                            </ul>
                        </li>
                        <li class="dropstart">
                            <a href="#" class="dropdown-item text-end dropdown-toggle"
                                data-bs-toggle="dropdown">التصميم</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-end"
                                        href="{{ route('website.graphicDesignArabic') }}">التصميم الجرافيكي
                                        الإبداعي</a></li>
                                <li><a class="dropdown-item text-end"
                                        href="{{ route('website.MotionGraphicArabic') }}">الموشن جرافيك</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item text-end"
                                href="{{ route('website.networksArabic') }}">الشبكات</a></li>
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





    <div class="banner-form">
        <div class="container d-flex align-items-center ">
            <p>بشغف، نجعل تفوق العملاء علامة تميزنا</p>
        </div>
    </div>



    <div class="form-page">
        <div class="container">
            <div class="form-side">
                <div>
                    <h1>طلب التسجيل في الدورات التدريبية</h1>
                    <div id="multi-step-form-container">
                        <!-- Form Steps / Progress Bar -->
                        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                            <!-- Step 1 -->
                            <li class="form-stepper-active text-center form-stepper-list" step="1">
                                <a class="mx-2">
                                    <span class="form-stepper-circle">
                                        <span>1</span>
                                    </span>
                                    <div class="label">التدريب</div>
                                </a>
                            </li>
                            <!-- Step 2 -->
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>2</span>
                                    </span>
                                    <div class="label text-muted">المعلومات الشخصية</div>
                                </a>
                            </li>
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>3</span>
                                    </span>
                                    <div class="label text-muted">التعليم</div>
                                </a>
                            </li>
                            <!-- Step 3 -->
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>4</span>
                                    </span>
                                    <div class="label text-muted">تأكيد التسجيل </div>
                                </a>
                            </li>
                        </ul>
                        <!-- Step Wise Form Content -->
                        <form id="userAccountSetupForm" name="userAccountSetupForm">
                            <!-- Step 1 Content -->
                            <section id="step-1" class="form-step">
                                <div class="space">
                                    <label for="training-program">برامج التدريب <span
                                            style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                        </span>:</label>
                                    <select id="training-program" name="training-program"
                                        onchange="handleTrainingProgram()">
                                        <option disabled selected>-- اختر</option>
                                        @foreach ($programs as $program)
                                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                                        @endforeach
                                    </select>


                                    <div id="efficiency-checkbox" class="hidden space">

                                        @foreach ($courses as $course)
                                            @if ($course->program_id == 1)
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="">{{ $course->name }}</label>
                                                    <input type="checkbox" name="engineering-checkbox"
                                                        value="{{ $course->id }}" class="checked">
                                                    <a title="Download PDF" class="download-pdf"
                                                        download="{{ $course->name }}"
                                                        href="{{ asset('storage/files/courses/' . $course->pdf) }}">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div id="Administration-checkbox" class="hidden space">
                                        @foreach ($courses as $course)
                                            @if ($course->program_id == 2)
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="">{{ $course->name }}</label>
                                                    <input type="checkbox" name="engineering-checkbox"
                                                        value="{{ $course->id }}" class="checked">
                                                    <a title="Download PDF" class="download-pdf"
                                                        download="{{ $course->name }}"
                                                        href="{{ asset('storage/files/courses/' . $course->pdf) }}">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>


                                    <div id="IT-checkbox" class="hidden space">
                                        @foreach ($courses as $course)
                                            @if ($course->program_id == 3)
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="">{{ $course->name }}</label>
                                                    <input type="checkbox" name="engineering-checkbox"
                                                        value="{{ $course->id }}" class="checked">
                                                    <a title="Download PDF" class="download-pdf"
                                                        download="{{ $course->name }}"
                                                        href="{{ asset('storage/files/courses/' . $course->pdf) }}">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>



                                    <div class="space">
                                        <h6 class="font-normal">تفضيلات العملاء :</h6>
                                        <div class="space">
                                            <label for="training-technology">تقنية التدريب:</label>
                                            <select id="training-technology" name="training-technology">
                                                <option disabled selected>-- اختر</option>
                                                <option value="وجاهية">وجاهية</option>
                                                <option value="عن بعد">عن بعد (online) </option>
                                            </select>
                                        </div>

                                        <div class="space">
                                            <label for="training-time">التوقيت المناسب لعقد الدورات التدريبية:</label>
                                            <select id="training-time" name="training-time">
                                                <option disabled selected>-- اختر</option>
                                                <option value="صباحا">صباحا</option>
                                                <option value="ظهرا">ظهرا</option>
                                                <option value="مساءا">مساءا</option>
                                                <option value=" متاح بكل وقت">متاح بكل وقت</option>
                                            </select>
                                        </div>

                                        <div id="for-IT" class="space hidden">
                                            <label for="computer-device">جهاز الكمبيوتر الذي تفضل استخدامه أثناء
                                                التدريب:</label>
                                            <select id="computer-device" name="computer-device">
                                                <option disabled selected>-- اختر</option>
                                                <option value="المحمول الخاص">المحمول خاصتك</option>
                                                <option value="جهاز الشركة">جهاز الشركة</option>
                                            </select>
                                        </div>

                                        <div class="space">
                                            <label for="preferred-language">اللغة التي تفضل أثناء التدريب:</label>
                                            <select id="preferred-language" name="preferred-language">
                                                <option disabled selected>-- اختر</option>
                                                <option value="العربية">العربية</option>
                                                <option value="الانجليزية">الانجليزية</option>
                                            </select>
                                        </div>
                                        <div class="mt-3 d-flex justify-content-end">
                                            <button class="button btn-navigate-form-step" type="button"
                                                step_number="2">التالي</button>
                                        </div>

                                    </div>

                            </section>


                            <section id="step-2" class="form-step d-none">
                                <h6 class="font-normal">المعلومات الشخصية: </h6>
                                <!-- Step 1 input fields -->
                                <div class="mt-3">
                                    <div class="space">
                                        <label for="Name">الاسم <span
                                                style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                            </span>:</label>
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <input id="firstName" type="text" name="firstName"
                                                    placeholder=" الأول" required>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input title="اختياري" id="midName" type="text" name="midName"
                                                    placeholder="الأب(اختياري)" required>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input id="lastName" type="text" name="lastName"
                                                    placeholder="العائلة" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space">
                                        <label for="">تاريخ الميلاد <span
                                                style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                            </span>:</label>
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <input id="day" type="text" name="day"
                                                    placeholder=" اليوم" maxlength="2" required>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input id="month" type="text" name="month"
                                                    placeholder="الشهر" min="1" max="12" maxlength="2"
                                                    required>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input id="year" type="text" name="year"
                                                    placeholder="السنة" min="1900" max="2023" maxlength="4"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space">
                                        <label for="gender">الجنس <span
                                                style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                            </span>:</label>
                                        <select id="gender" name="gender" required>
                                            <option disabled selected>-- اختر</option>
                                            <option value="ذكر">ذكر</option>
                                            <option value="أنثى">أنثى</option>
                                        </select>
                                        <div class="space">
                                            <label for="Governorate">المحافظة</label>
                                            <div class="row">
                                                <div class="col">
                                                    <select name="Governorate" id="Governorate"
                                                        onchange="showHideElements()" required>
                                                        <option disabled selected> -- اختر</option>
                                                        <option value="شمال غزة">شمال غزة</option>
                                                        <option value="مدينة غزة">مدينة غزة</option>
                                                        <option value="الوسطى">الوسطى</option>
                                                        <option value="خانيونس">خانيونس</option>
                                                        <option value="رفح">رفح</option>
                                                        <option value="الضفة الغربية">الضفة الغربية</option>
                                                    </select>
                                                </div>

                                                <div id="WestBank-select" class="col" style="display: none;">
                                                    <label for="otherG">حدد</label>
                                                    <input type="text" id="otherG" name="otherG"
                                                        maxlength="40">
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="font-normal mt-4">معلومات الاتصال :</h6>
                                        <div class="mt-3">
                                            <label for="country-code">رقم الهاتف <span
                                                    style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                                </span>:</label>
                                            <div class="phone-input">
                                                <select id="country-code" onchange="showHidephone()">
                                                    <option disabled selected value="xx">-- اختر</option>
                                                    <option value="جوال">جوال</option>
                                                    <option value="أوريدو">أوريدو</option>
                                                    <option value="شبكة خلوية أخرى">شبكة خلوية أخرى</option>
                                                </select>
                                                <input type="text" id="phone" placeholder="رقم الهاتف"
                                                    maxlength="14">
                                                <input class="phone" style="display: none;" type="text"
                                                    id="phone-numberj" placeholder="رقم الهاتف" minlength="3"
                                                    maxlength="10" size="10" number>
                                                <input class="phone" style="display: none;" type="text"
                                                    id="phone-numbero" placeholder="رقم الهاتف" minlength="3"
                                                    maxlength="10" size="10" number>
                                                <input class="phone" style="display: none;" type="text"
                                                    id="phone-numberx" placeholder="رقم الهاتف" minlength="3"
                                                    maxlength="14" number>
                                            </div>

                                            <div class="space">
                                                <label for="email">البريد الإلكتروني :</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input id="email" type="email" name="email" required
                                                            placeholder="البريد الإلكتروني">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="mt-3 d-flex justify-content-between">
                                            <button class="button btn-navigate-form-step" type="button"
                                                step_number="1">السابق</button>
                                            <button class="button btn-navigate-form-step" type="button"
                                                step_number="3">التالي</button>
                                        </div>
                            </section>




                            <!-- Step 2 Content, default hidden on page load. -->
                            <section id="step-3" class="form-step d-none">
                                <h6 class="font-normal">التعليم :</h6>
                                <!-- Step 2 input fields -->
                                <div class="space">
                                    <label for="education-status">حالة الإلتحاق بالتعليم <span
                                            style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                        </span>:</label>
                                    <select id="education-status" name="education-status"
                                        onchange="handleEducationStatus()">
                                        <option disabled selected>-- اختر</option>
                                        <option value="AAA">طالب جامعي</option>
                                        <option value="BBB">خريج</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>

                                <div id="other-field" class="hidden space">
                                    <label for="other-text">حدد:</label>
                                    <input type="text" id="other-text" name="other-text" maxlength="50">
                                </div>

                                <div id="academic-level-field" class="hidden space">
                                    <label for="academic-level">المستوى الدراسي:</label>
                                    <select id="academic-level" name="academic-level">
                                        <option disabled selected>-- اختر</option>
                                        <option value="المستوى الأول">المستوى الأول</option>
                                        <option value="الثاني">الثاني</option>
                                        <option value="الثالث">الثالث</option>
                                        <option value="الرابع">الرابع</option>
                                        <option value="الخامس">الخامس</option>
                                    </select>
                                </div>

                                <div id="graduation-field" class="hidden space">
                                    <label for="graduation-year">ادخل سنة التخرج:</label>
                                    <input type="text" id="graduation-year" name="graduation-year"
                                        maxlength="4">
                                    <div class="space">
                                        <label for="employment-status">حالة العمل:</label>
                                        <select id="employment-status" name="employment-status"
                                            onchange="handleEmploymentStatus()">
                                            <option disabled selected>-- اختر</option>
                                            <option value="AAA">ملتحق بالعمل</option>
                                            <option value="أبحث عن عمل">أبحث عن عمل</option>
                                        </select>
                                    </div>

                                </div>

                                <div id="work-sector-field" class="hidden space">
                                    <label for="work-sector">قطاع العمل:</label>
                                    <select id="work-sector" name="work-sector" onchange="handleWorkSector()">
                                        <option disabled selected>-- اختر</option>
                                        <option value="القطاع الحكومي">القطاع الحكومي</option>
                                        <option value="القطاع الخاص">القطاع الخاص</option>
                                        <option value="المؤسسات غير الحكومية">المؤسسات غير الحكومية</option>
                                        <option value="المؤسسات الدولية">المؤسسات الدولية</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>

                                <div id="work-sector-other-field" class="hidden space">
                                    <label for="other-work-sector">حدد:</label>
                                    <input type="text" id="other-work-sector" name="other-work-sector">
                                </div>

                                <div class="space">
                                    <label for="degree">الدرجة العلمية التي أنهيت أو ما زلت ملتحق بها <span
                                            style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                        </span>:</label>
                                    <select id="degree" name="degree" onchange="handleDegree()">
                                        <option disabled selected>-- اختر</option>
                                        <option value="دبلوم">دبلوم</option>
                                        <option value="بكالوريوس">بكالوريوس</option>
                                        <option value="ماجستير">ماجستير</option>
                                        <option value="دكتوراة">دكتوراة</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>

                                <div id="degree-other-field" class="hidden space">
                                    <label for="degree-other-text">حدد:</label>
                                    <input type="text" id="degree-other-text" name="degree-other-text"
                                        maxlength="50">
                                </div>

                                <div id="university-field" class="hidden space">
                                    <label for="university">الجامعة:</label>
                                    <select id="university" name="university" onchange="handleUniversity()">
                                        <option disabled selected>-- اختر</option>
                                        <option value="جامعات فلسطينية">جامعات فلسطينية</option>
                                        <option value="جامعات عربية">جامعات عربية</option>
                                        <option value="جامعات أجنبية">جامعات أجنبية</option>
                                    </select>
                                </div>

                                <div id="university1" class="hidden space">
                                    <label for="university11">اختر من القائمة:</label>
                                    <select id="university11" name="university11" onchange="University5()">
                                        <option disabled selected>-- اختر</option>
                                        <option value="الجامعات الفلسطينية">الجامعات الفلسطينية</option>
                                        <option value="الكليات الجامعية">الكليات الجامعية</option>
                                        <option value="الكليات المتوسطة">الكليات المتوسطة</option>
                                    </select>
                                </div>

                                <div id="arab-university-field" class="hidden space">
                                    <label for="country">اسم الدولة:</label>
                                    <input type="text" id="country" class="country">

                                    <label for="university-name">اسم الجامعة:</label>
                                    <input type="text" id="university-name" class="university">
                                </div>

                                <div id="foreign-university-field" class="hidden space">
                                    <label for="country">اسم الدولة:</label>
                                    <input type="text" id="country" class="country">

                                    <label for="university-name">اسم الجامعة:</label>
                                    <input type="text" id="university-name" class="university">
                                </div>
                                <div id="palestinian-university-field" class="hidden space">
                                    <label for="palestinian-university">اختر من القائمة:</label>
                                    <select id="palestinian-university" name="palestinian-university">
                                        <option value="جامعة الأزهر">جامعة الأزهر</option>
                                        <option value="الجامعة الإسلامية">الجامعة الإسلامية</option>
                                        <option value="جامعة الأقصى">جامعة الأقصى</option>
                                        <option value="جامعة غزة">جامعة غزة</option>
                                        <option value="جامعة فلسطين">جامعة فلسطين</option>
                                        <option value="جامعة فلسطين الأهلية">جامعة فلسطين الأهلية</option>
                                        <option value="جامعة الخليل">جامعة الخليل</option>
                                        <option value="جامعة بولتكنك فلسطين">جامعة بولتكنك فلسطين</option>
                                        <option value="جامعة بيت لحم">جامعة بيت لحم</option>
                                        <option value="جامعة القدس">جامعة القدس</option>
                                        <option value="جامعة القدس المفتوحة">جامعة القدس المفتوحة</option>
                                        <option value="الجامعة العربية المفتوحة - فلسطين">الجامعة العربية المفتوحة -
                                            فلسطين</option>
                                        <option value="جامعة بيرزيت">جامعة بيرزيت</option>
                                        <option value="جامعة النجاح الوطنية">جامعة النجاح الوطنية</option>
                                        <option value="جامعة فلسطين التقنية-خضوري">جامعة فلسطين التقنية-خضوري</option>
                                        <option value="الجامعة العربية الأمريكية">الجامعة العربية الأمريكية</option>
                                        <option value="جامعة الإستقلال">جامعة الإستقلال</option>
                                        <option value="جامعة الإسراء">جامعة الإسراء</option>
                                        <option value="جامعة الزيتونة للعلوم والتكنولوجيا">جامعة الزيتونة للعلوم
                                            والتكنولوجيا</option>
                                        <option value="جامعة دار الكلمة للفنون والثقافة">جامعة دار الكلمة للفنون
                                            والثقافة</option>
                                        <option value="جامعة نابلس التقنية">جامعة نابلس التقنية</option>
                                    </select>
                                </div>

                                <div id="college-university-field" class="hidden space">
                                    <label for="college-university">اختر من القائمة:</label>
                                    <select id="college-university" name="college-university">
                                        <option value="كلية فلسطين التقنية دير البلح">كلية فلسطين التقنية دير البلح
                                        </option>
                                        <option value="كلية ابن سينا للعلوم الصحية">كلية ابن سينا للعلوم الصحية
                                        </option>
                                        <option value="الكلية الجامعية للعلوم التربوية">الكلية الجامعية للعلوم التربوية
                                        </option>
                                        <option value="كلية فلسطين التقنية الجنوبية">كلية فلسطين التقنية الجنوبية
                                        </option>
                                        <option value="كلية فلسطين التقنية الشمالية">كلية فلسطين التقنية الشمالية
                                        </option>
                                        <option value="الكلية التقنية العالمية">الكلية التقنية العالمية</option>
                                        <option value="كلية فلسطين التقنية أبو ديس">كلية فلسطين التقنية أبو ديس
                                        </option>
                                        <option value="الكلية الجامعية للعلوم التطبيقية">الكلية الجامعية للعلوم
                                            التطبيقية</option>
                                        <option value="الكلية التقنية الشمالية">الكلية التقنية الشمالية</option>
                                        <option value="كلية فلسطين التقنية حلحول">كلية فلسطين التقنية حلحول</option>
                                    </select>
                                </div>
                                <div id="mid-college-university-field" class="hidden space">
                                    <label for="college">اختر كلية:</label>
                                    <select id="college" name="college">
                                        <option value="كلية المجتمع الإبراهيمية">كلية المجتمع الإبراهيمية</option>
                                        <option value="كلية صحة المجتمع">كلية صحة المجتمع</option>
                                        <option value="كلية إنعاش الأسرة">كلية إنعاش الأسرة</option>
                                        <option value="كلية الخليل للتمريض">كلية الخليل للتمريض</option>
                                        <option value="كلية المهن التطبيقية - بوليتكنك فلسطين">كلية المهن التطبيقية -
                                            بوليتكنك فلسطين</option>
                                        <option value="كلية هشام حجاوي التكنولوجية">كلية هشام حجاوي التكنولوجية
                                        </option>
                                        <option value="كلية مجتمع النجاح الوطنية">كلية مجتمع النجاح الوطنية</option>
                                        <option value="كلية الحاجة عندليب العمد">كلية الحاجة عندليب العمد</option>
                                        <option value="كلية الدراسات المتوسطة الأزهر">كلية الدراسات المتوسطة الأزهر
                                        </option>
                                        <option value="كلية مجتمع الأقصى للدراسات المتوسطة">كلية مجتمع الأقصى للدراسات
                                            المتوسطة</option>
                                        <option value="كلية مجتمع غزة للدراسات السياحية">كلية مجتمع غزة للدراسات
                                            السياحية</option>
                                        <option value="كلية مجتمع غزة-الوكالة">كلية مجتمع غزة-الوكالة</option>
                                        <option value="كلية العلوم التربوية - الطيرة">كلية العلوم التربوية - الطيرة
                                        </option>
                                        <option value="الكلية العربية للعلوم التطبيقية">الكلية العربية للعلوم التطبيقية
                                        </option>
                                        <option value="كلية تدريب خانيونس">كلية تدريب خانيونس</option>
                                        <option value="كلية مجتمع طاليتا قومي">كلية مجتمع طاليتا قومي</option>
                                        <option value="كلية التمريض - مستشفى الكاريتاس">كلية التمريض - مستشفى الكاريتاس
                                        </option>
                                        <option value="الكلية الذكية للتعليم الحديث">الكلية الذكية للتعليم الحديث
                                        </option>
                                    </select>

                                </div>
                                <div id="ss" class="hidden space">
                                    <label for="major">التخصص :</label>
                                    <input id="major" name="major" type="text" placeholder="حدد">
                                </div>
                                <div class="mt-3 d-flex justify-content-between">
                                    <button class="button btn-navigate-form-step" type="button"
                                        step_number="2">السابق</button>
                                    <button class="button btn-navigate-form-step" type="button"
                                        step_number="4">التالي</button>
                                </div>
                            </section>


                            <!-- Step 3 Content, default hidden on page load. -->
                            <section id="step-4" class="form-step d-none">
                                <h6 class="font-normal">تأكيد التسجيل <span
                                        style="color: #e22c08; font-size: 150%; font-weight: normal; position: relative; top: 5px;">*
                                    </span>:</h6>
                                <!-- Step 3 input fields -->
                                <div class="mt-3">
                                    <input type="checkbox" class="policy" id="check" name="check">
                                    <label class="confiarm" for=""> أوافق علي بنود <a class="usep"
                                            target="_blank" href="{{ route('website.privacyAr') }}">الخصوصية</a> <a
                                            class="usep" target="_blank" href="{{ route('website.useAr') }}">
                                            والاستخدام.</a></label>

                                </div>
                                <div class="mt-3 d-flex justify-content-between">
                                    <button class="button btn-navigate-form-step" type="button"
                                        step_number="3">السابق</button>
                                    <button onclick="performStore()" class="button" type="button">إرسال</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="logo">
                        <a href="{{ route('website.homeArabic') }}">
                            <img src="{{ asset('website/images/mm.svg') }}" alt="">
                        </a>

                    </div>
                    <p>نرى التفاصيل بدقة وعناية، نبدع في عصف وإثارة الأفكار ، نحترف تحقيق الأهداف، لا تنفصل أهدافنا عن
                        أهداف عملائنا، نحن شركاء في التفوق.</p>
                    <div class="icon-footer">
                        <a href="">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>


                    </div>

                    <div class="privUse">
                        <p>بنود <a href="{{ route('website.privacyAr') }}">الخصوصية </a>و <a
                                href="{{ route('website.useAr') }}">الاستخدام</a></p>
                    </div>


                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="nnav">
                        <a href="{{ route('website.homeArabic') }}">الرئيسية</a>
                        <a href="{{ route('website.microsmartArabic') }}">ميكروسمارت</a>
                        <a href="{{ route('website.StrategyArabic') }}">الاستراتيجية</a>
                        <a href="{{ route('website.individuals') }}">التدريب</a>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="nnav">
                        <a href="{{ route('website.businessSolutionsITArabic') }}">تكنولوجيا المعلومات</a>
                        <a href="{{ route('website.businessSolutionsArabic') }}">حلول الأعمال</a>
                        <a href="mailto:microsmart@gmail.com">اتصل بنا</a>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="full">
                        <div class="k d-flex justify-content-center my-3">
                            <i class="fa-solid fa-user-clock mx-2"></i>
                            <p>السبت-الخميس 8 صباحا- 5 مساءا</p>
                        </div>
                        <div class="k d-flex justify-content-center my-3">
                            <i class="fa-solid fa-location-dot mx-2"></i>
                            <p>غزة - شارع عمر المختار - مقابل منتزة بلدية غزة - عمارة الجاردنز - الطابق السادس.</p>

                        </div>
                        <div class="k d-flex justify-content-center my-3">
                            <i class="fa-solid fa-phone mx-2"></i>
                            <p>+972597364417</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="ff">
            <div class="container d-flex align-items-center justify-content-center">
                <p>Copyright © 2023 MicroSmart</p>
            </div>
        </div>
    </footer>



    <script src="{{ asset('website/Js/form.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


    <script>
        function performStore() {
            var agree;
            if (document.querySelector(".agree") != null) {
                agree = document.querySelector(".agree").value;
            } else {
                agree = null;
            }

            var phone;
            let phones = document.querySelectorAll(".phone");
            for (let i = 0; i < phones.length; i++) {
                if (phones[i].value.length > 3) {
                    phone = phones[i].value;
                    break;
                }
            }

            var governorate;
            if (document.getElementById('Governorate').value == "الضفة الغربية") {
                governorate = document.getElementById('otherG').value;
            } else {
                governorate = document.getElementById('Governorate').value;
            }

            var educationStatus;
            if (document.getElementById('education-status').value == "أخرى") {
                educationStatus = document.getElementById('other-text').value;
            } else {
                educationStatus = document.getElementById('education-status').value;
            }
            var workSector;
            if (document.getElementById('work-sector').value == "أخرى") {
                workSector = document.getElementById('other-work-sector').value;
            } else {
                workSector = document.getElementById('work-sector').value;
            }

            var degree;
            if (document.getElementById('degree').value == "أخرى") {
                degree = document.getElementById('degree-other-text').value;
            } else {
                degree = document.getElementById('degree').value;
            }


            var university;
            if (document.getElementById('university').value == "جامعات فلسطينية") {
                if (document.getElementById('university11').value == "الجامعات الفلسطينية") {
                    university = document.getElementById('palestinian-university').value;

                } else if (document.getElementById('university11').value == "الكليات الجامعية") {
                    university = document.getElementById('college-university').value;

                } else if (document.getElementById('university11').value == "الكليات المتوسطة") {
                    university = document.getElementById('college').value;
                }

            } else {
                let universities = document.querySelectorAll(".university");
                for (let i = 0; i < universities.length; i++) {
                    if (universities[i].value != null) {
                        university = universities[i].value;
                        break;
                    }
                }

                var country = null;
                let countries = document.querySelectorAll(".country");
                for (let i = 0; i < countries.length; i++) {
                    if (countries[i].value != null) {
                        country = countries[i].value;
                        break;
                    }
                }
            }

            var ck = document.querySelectorAll(".check");
            var arr = [];
            for (let i = 0; i < ck.length; i++) {
                arr[i] = ck[i].value;
            }

            let formData = new FormData();
            formData.append('firstName', document.getElementById('firstName').value);
            formData.append('midName', document.getElementById('midName').value);
            formData.append('lastName', document.getElementById('lastName').value);
            formData.append('day', document.getElementById('day').value);
            formData.append('month', document.getElementById('month').value);
            formData.append('year', document.getElementById('year').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('computer-device', document.getElementById('computer-device').value);
            formData.append('graduation-year', document.getElementById('graduation-year').value);
            formData.append('preferred-language', document.getElementById('preferred-language').value);
            formData.append('major', document.getElementById('major').value);
            formData.append('phone', phone);
            formData.append('courses', arr);
            formData.append('agree', agree);

            if (document.getElementById('gender').value != '-- اختر') {
                formData.append('gender', document.getElementById('gender').value);
            } else {
                formData.append('gender', "0");
            }

            if (governorate != '-- اختر') {
                formData.append('governorate', governorate);
            } else {
                formData.append('governorate', "0");
            }

            if (educationStatus != '-- اختر') {
                formData.append('education_status', educationStatus);
            } else {
                formData.append('education_status', '0');
            }

            if (degree != '-- اختر') {
                formData.append('degree', degree);
            } else {
                formData.append('degree', "0");
            }

            if (document.getElementById('academic-level').value != '-- اختر') {
                formData.append('academic-level', document.getElementById('academic-level').value);
            } else {
                formData.append('academic-level', '');
            }

            if (document.getElementById('employment-status').value != '-- اختر') {
                formData.append('employment_status', document.getElementById('employment-status').value);
            } else {
                formData.append('employment_status', '');
            }

            if (document.getElementById('training-technology').value != '-- اختر') {
                formData.append('training-technology', document.getElementById('training-technology').value);
            } else {
                formData.append('training-technology', "0");
            }

            if (document.getElementById('training-time').value != '-- اختر') {
                formData.append('training-time', document.getElementById('training-time').value);
            } else {
                formData.append('training-time', "0");
            }

            if (workSector != '-- اختر') {
                formData.append('work-sector', workSector);
            } else {
                formData.append('work-sector', '');
            }

            if (university != '-- اختر') {
                formData.append('university', university);
            } else {
                formData.append('university', '');
            }
            if (country != null) {
                formData.append('country', country);
            } else {
                formData.append('country', '');
            }


            Store('/dashboard/users', formData);

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('cms/js/crud.js') }}"></script>
</body>

</html>
