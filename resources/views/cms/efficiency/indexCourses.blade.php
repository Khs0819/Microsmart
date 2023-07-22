@extends('cms.parent')

@section('title', ' الكورسات')

@section('sub_title', ' كورسات الطالب')


@section('styles')
@endsection


@section('styles')
    <style>

    </style>

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="profile-username text-center">{{ $users->firstName . ' ' . $users->lastName }}</h3>
                            <p class="text-muted text-center">{{ $users->phone }}</p>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                            <thead>
                                <tr class="bg-info">

                                    <th> اسم الكورس</th>
                                    <th> اسم البرنامج </th>
                                    <th> حالة الطلب </th>
                                    <th> الملاحظات </th>
                                    <th> الاعدادات </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($CourseUsers as $CourseUser)
                                    @foreach ($courses as $course)
                                        <tr>
                                            @if ($course->id == $CourseUser->course_id)
                                                <td>{{ $course->name }}</td>
                                                <td>{{ $course->program->name }}</td>
                                                <td>{{ $CourseUser->status ?? 'لم يراجع الطلب' }}</td>
                                                <td>
                                                    <textarea class="form-control" style="resize: none;" id="description" name="description" rows="3"
                                                        placeholder="لا يوجد ملاحظات" cols="30" readonly>{{ $CourseUser->notice }}</textarea>
                                                </td>

                                                <td>
                                                    <div class="btn group">
                                                        <a href="{{ route('edit-efficiency-coursesUsers', $CourseUser->id) }}"
                                                            type="button" class="btn btn-info">
                                                            تعديل
                                                        </a>

                                                        <button type="button"
                                                            onclick="performDestroy({{ $CourseUser->id }} , this)"
                                                            class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>

                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <a href="{{ route('efficiency.index') }}" type="button" class="btn btn-secondary">الرجوع لقائمة
                                الطلاب</a>
                        </div>

                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        function performDestroy(id, referance) {
            let url = '/dashboard/coursesUsers/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
