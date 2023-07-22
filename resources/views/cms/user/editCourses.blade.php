@extends('cms.parent')

@section('title', 'الطلبات')

@section('main_title', '')

@section('sub_title', 'تعديل الطلب')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">تعديل بيانات الطلب</h3>


                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="status">الحالة</label>
                                        <select class="form-select form-select-sm" name="status" style="width: 100%;"
                                            id="status" aria-label=".form-select-sm example">
                                            @if ($CourseUsers->status != null)
                                                <option selected value="{{ $CourseUsers->status }}">
                                                    {{ $CourseUsers->status }} </option>
                                            @endif
                                            @if ($CourseUsers->status != 'لم يراجع الطلب')
                                                <option value="لم يراجع الطلب">لم يراجع الطلب</option>
                                            @endif
                                            @if ($CourseUsers->status != 'حضر')
                                                <option value="حضر">حضر</option>
                                            @endif

                                            @if ($CourseUsers->status != 'اعتذر')
                                                <option value="اعتذر">اعتذر</option>
                                            @endif

                                            @if ($CourseUsers->status != 'تأجيل')
                                                <option value="تأجيل">تأجيل</option>
                                            @endif
                                            @if ($CourseUsers->status != 'لم يرد')
                                                <option value="لم يرد">لم يرد</option>
                                            @endif
                                            @if ($CourseUsers->status != 'رقم الاتصال خاطئ')
                                                <option value="رقم الاتصال خاطئ">رقم الاتصال خاطئ</option>
                                            @endif
                                            @if ($CourseUsers->status != 'أخرى')
                                                <option value="أخرى">أخرى , وضف في الملاحظات</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="notice"> ملاحظات</label>
                                        <textarea class="form-control" style="resize: none;" id="notice" name="notice" rows="3"
                                            placeholder=" الملاحظات او التوضيحات ان وجدت" cols="30">{{ $CourseUsers->notice }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick=" performUpdate({{ $CourseUsers->id }})"
                                    class="btn btn-primary">تعديل</button>
                                <a href="{{ route('indexCourses', ['id' => $CourseUsers->user_id]) }}" type="button"
                                    class="btn btn-secondary">الغاء</a>

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
            formData.append('notice', document.getElementById('notice').value);
            formData.append('status', document.getElementById('status').value);


            storeRoute('/dashboard/update-coursesUsers/' + id, formData);
        }
    </script>
@endsection
