@extends('cms.parent')

@section('title', 'الكورسات التدريبية')

@section('main_title', '')

@section('sub_title', 'عرض الكورسات التدريبية')


@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('courses.create') }}" type="button" class="btn btn-primary">اضافة كورس جديد</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                        <thead>
                            <tr class="bg-info">
                                <th>اسم الكورس</th>
                                <th>PDF</th>
                                <th>اسم البرنامج</th>
                                <th>الاعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>
                                        <a href="{{ asset('storage/files/courses/' . $course->pdf) }}"
                                            download="{{ $course->name }}">
                                            <i class="fa-solid fa-download"></i>
                                    </td>
                                    <td> <span class="badge bg-success ">{{ $course->program->name }}</span></td>
                                    <td>
                                        <div class="btn group">
                                            <a href="{{ route('courses.edit', $course->id) }}" type="button"
                                                class="btn btn-info">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <button type="button" onclick="performDestroy({{ $course->id }} , this)"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            {{ $courses->links() }}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function performDestroy(id, referance) {
            let url = '/dashboard/courses/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
