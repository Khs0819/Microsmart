@extends('cms.parent')

@section('title', 'الطلاب ')

@section('left-title', 'عرض الطلاب ')

@section('active title', 'عرض الطلاب ')


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
                            <h3 class="card-title float-left"> عرض الطلاب </h3>
                        </div>
                        <br>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                            <thead>
                                <tr class="bg-info">

                                    <th> الرقم</th>
                                    <th> اسم الطالب </th>
                                    <th> الجنس </th>
                                    <th> رقم الهاتف </th>
                                    <th> المحافظة </th>
                                    <th> حالة التعلم </th>
                                    <th> الكورسات </th>
                                    <th> التفضيلات </th>
                                    <th> التفاصيل </th>
                                    <th> الاعدادات </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    {{-- @foreach ($user->group as $groups) --}}

                                    <tr>

                                        <td>{{ ++$count }}</td>
                                        <td>{{ $user->firstName . ' ' . $user->lastName }}</td>
                                        <td><span
                                                class="badge @if ($user->gender == 'ذكر') bg-primary @else  bg-danger @endif">
                                                {{ $user->gender }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td><span class="badge">{{ $user->governorate }}</span></td>
                                        <td>{{ $user->educationStatus }}</td>
                                        <td><a href="{{ route('indexCourses', ['id' => $user->id]) }}"
                                                class="btn btn-success"><i class="fa-solid fa-book"></i></a> </td>
                                        <td><a href="{{ route('indexPreference', ['id' => $user->id]) }}"
                                                class="btn btn-danger"><i class="fa-solid fa-heart"></i></a> </td>
                                        <td><a href="{{ route('indexStudent', ['id' => $user->id]) }}"
                                                class="btn btn-warning"><i class="fa-solid fa-user"></i></a> </td>
                                        <td>
                                            <div class="btn group">
                                                {{-- <a href="{{ route('courses.edit', $user->id) }}" type="button"
                                                    class="btn btn-info">
                                                    تعديل
                                                </a> --}}

                                                <button type="button" onclick="performDestroy({{ $user->id }} , this)"
                                                    class="btn btn-danger">
                                                    حذف
                                                </button>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
                            </span>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        function performDestroy(id, reference) {
            let url = '/dashboard/users/' + id;
            confirmDestroy(url, reference);
        }
    </script>
@endsection
