@extends('cms.parent')

@section('title', 'تفضيلات المستخدم')

@section('main_title', '')

@section('sub_title', 'اضافة تفضيل للمستخدم')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">اضافة بيانات التفضيل</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="name">تقنية التدريب</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="ادخل اسم الكورس">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program_id">التوقيت المناسب لعقد الدورة التدريبية</label>
                                        <select class="form-control select2" id='program_id' name='program_id'
                                            style="width: 100%;">
                                            {{-- <option selected="selected">Alabama</option> --}}
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>



                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                                    <a href="{{ route('courses.index') }}" type="button" class="btn btn-secondary">رجوع</a>

                                </div>
                        </form>
                    </div>




                </div>


            </div>

        </div>
    </section>
@endsection

@section('scripts')

    <script>
        function performStore() {

            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('program_id', document.getElementById('program_id').value);

            store('/dashboard/courses', formData);
        }
    </script>

@endsection
