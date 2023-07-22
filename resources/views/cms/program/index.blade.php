@extends('cms.parent')

@section('title', 'البرامج التدريبية')

@section('main_title', '')

@section('sub_title', 'عرض البرنامج التدريبية')


@section('styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('programs.create') }}" type="button" class="btn btn-primary">اضافة برنامج جديد</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                        <thead>
                            <tr class="bg-info">
                                <th>اسم البرنامج</th>
                                <th>عدد الكورسات</th>
                                <th>تعديل اسم البرنامج</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $program->name }}</td>
                                    <td><span class="badge bg-success ">({{ $program->courses_count }}) كورس</span></td>
                                    <td>
                                        <div class="btn group">
                                            <a href="{{ route('programs.edit', $program->id) }}" type="button"
                                                class="btn btn-info">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            {{-- <button type="button" onclick="performDestroy({{ $program->id }} , this)"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button> --}}

                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            {{ $programs->links() }}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function performDestroy(id, referance) {
            let url = '/dashboard/programs/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
