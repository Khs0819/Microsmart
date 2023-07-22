@extends('cms.parent')

@section('title', ' الطالب')

@section('sub_title', ' تفضيلات الطالب')


@section('styles')
@endsection

@section('content')

    <!-- Main content -->
    <style>
        .show li>a {
            font-weight: 500;
            /* border-radius: 7px;
                                                                padding:0 5px;
                                                                background: rgb(12, 12, 12); */
        }
    </style>
    <section class="content">
        <div class="container">
            <div class="row show">
                <div class="card card-primary card-outline col-6 mx-auto">
                    <div class="card-body box-profile ">

                        <h3 class="profile-username text-center">{{ $users->firstName . ' ' . $users->lastName }}</h3>


                        <p class="text-muted text-center">{{ $users->phone }}</p>

                        {{-- $table->string('technique');
                        $table->string('period');
                        $table->string('computer')->nullable();
                        $table->enum('language', ['العربية', 'الانجليزية'])->default('العربية')->nullable(); --}}
                        @foreach ($preferences as $preference)
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>تقنية التدريب</b> <a class="float-right text-danger">{{ $preference->technique }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>التوقيت المناسب لعقد الدورات التدريبية</b> <a
                                        class="float-right text-danger">{{ $preference->period }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>جهاز الكمبيوتر الذي تفضل استخدامه أثناء التدريب</b> <a
                                        class="float-right text-danger">{{ $preference->computer ?? 'جهاز الشركة' }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b> اللغة التي تفضل أثناء التدريب </b> <a
                                        class="float-right text-danger">{{ $preference->language }}</a>
                                </li>

                            </ul>
                        @endforeach


                        <a type="button" href="{{ route('users.index') }}" class="btn btn-primary btn-block"><b>قائمة
                                الطلاب</b></a>

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
