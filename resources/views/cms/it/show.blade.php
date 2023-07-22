{{-- @extends('dashboard.parent') --}}
@extends('cms.parent')

@section('title', ' الطالب')

@section('sub-title', ' معلومات الطالب ')

@section('styles')
@endsection

@section('content')

    <!-- Main content -->
    <style>
        .show li>a {
            font-weight: 500;
            /* border-radius: 7px;                                                                                        background: rgb(12, 12, 12); */
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="row show">
                <div class="card card-primary card-outline col-6 mx-auto">
                    <div class="card-body box-profile ">

                        <h3 class="profile-username text-center">{{ $users->firstName . ' ' . $users->lastName }}</h3>
                        <p class="text-muted text-center">{{ $users->phone }}</p>
                        <ul class="list-group list-group-unbordered mb-3">

                            <li class="list-group-item">
                                <b> الاسم الكامل</b> <a
                                    class="float-right text-danger">{{ $users->firstName . ' ' . ($users->midName ?? '') . ' ' . $users->lastName }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>تاريخ الميلاد </b> <a
                                    class="float-right text-danger">{{ $users->day . '/' . $users->month . '/' . $users->year }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>الجنس</b> <a class="float-right text-danger">{{ $users->gender }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>الايميل</b> <a class="float-right text-danger">{{ $users->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>المحافظة</b> <a class="float-right text-danger">{{ $users->governorate }}</a>
                            </li>
                            <li class="list-group-item">
                                <b> المؤهل العلمي </b> <a class="float-right text-danger">{{ $users->degree }}</a>
                            </li>
                            <li class="list-group-item">
                                <b> حالة الإلتحاق بالتعليم </b> <a
                                    class="float-right text-danger">{{ $users->educationStatus }}</a>
                            </li>

                            @if ($users->educationStatus == 'خريج')
                                <li class="list-group-item">
                                    <b> سنة التخرج </b> <a class="float-right text-danger">{{ $users->graduationYear }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b> حالة العمل </b> <a
                                        class="float-right text-danger">{{ $users->employmentStatus }}</a>
                                </li>
                                @if ($users->educationStatus == 'ملتحق بالعمل')
                                    <li class="list-group-item">
                                        <b> قطاع العمل </b> <a class="float-right text-danger">{{ $users->workSector }}</a>
                                    </li>
                                @endif

                                <li class="list-group-item">
                                    <b> الجامعة </b> <a class="float-right text-danger">{{ $users->university }}</a>
                                </li>
                                @if ($users->country != null)
                                    <li class="list-group-item">
                                        <b> الدولة </b> <a class="float-right text-danger">{{ $users->country }}</a>
                                    </li>
                                @endif
                                <li class="list-group-item">
                                    <b> التخصص </b> <a class="float-right text-danger">{{ $users->major }}</a>
                                </li>
                            @elseif($users->educationStatus == 'طالب جامعي')
                                <li class="list-group-item">
                                    <b>المستوى الدراسي</b> <a
                                        class="float-right text-danger">{{ $users->academicLevel }}</a>
                                </li>

                                <li class="list-group-item">
                                    <b> الجامعة </b> <a class="float-right text-danger">{{ $users->university }}</a>
                                </li>
                                @if ($users->country != null)
                                    <li class="list-group-item">
                                        <b> الدولة </b> <a class="float-right text-danger">{{ $users->country }}</a>
                                    </li>
                                @endif

                                <li class="list-group-item">
                                    <b> التخصص </b> <a class="float-right text-danger">{{ $users->major }}</a>
                                </li>
                            @else
                            @endif

                        </ul>
                        <a href="{{ route('it.index') }}" class="btn btn-primary btn-block"><b>قائمة الطلاب</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </section>
    <!-- /.content -->

@endsection

@section('scripts')
    <script src="{{ asset('cms/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

@endsection
