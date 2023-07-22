@extends('cms.parent')

@section('title', 'الكورسات التدريبية')

@section('main_title', '')

@section('sub_title', 'تعديل كورس')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">تعديل بيانات كورس</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>

                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="name">اسم الكورس</label>
                                        <input type="text" value="{{ $courses->name }}" class="form-control"
                                            id="name" name="name" placeholder="ادخل اسم الكورس">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pdf">ملف الpdf</label>
                                        <input type="file" class="form-control" id="pdf" name="pdf">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الدولة</label>
                                            <select class="form-control select2" id="program_id" name="program_id"
                                                style="width: 100%;">
                                                <option value="{{ $courses->program->id }}" selected>
                                                    {{ $courses->program->name }} </option>
                                                @foreach ($programs as $program)
                                                    @if ($courses->program->id != $program->id)
                                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick=" performUpdate({{ $courses->id }})"
                                    class="btn btn-primary">تعديل</button>
                                <a href="{{ route('courses.index') }}" type="button" class="btn btn-secondary">الغاء</a>

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
        function performUpdate(id) {

            let formData = new FormData();

            formData.append('name', document.getElementById('name').value);
            formData.append('pdf', document.getElementById('pdf').files[0]);
            formData.append('program_id', document.getElementById('program_id').value);

            storeRoute('/dashboard/update-courses/' + id, formData);
        }
    </script>
@endsection
