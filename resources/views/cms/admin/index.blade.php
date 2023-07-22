@extends('cms.parent')

@section('title', 'Admins')

@section('sub-title', 'عرض المسؤولين')

@section('styles')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h3 class="card-title"> Index Data of Admin</h3> --}}
                            <a href="{{ route('admins.create') }}" type="button" class="btn btn-info">اضافة أدمن جديد</a>

                            <div class="card-tools">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                                <thead>
                                    <tr class="bg-info">
                                        <th>الاسم الكامل</th>
                                        <th>الصورة</th>
                                        <th>الايميل</th>
                                        <th>رقم الهاتف</th>
                                        <th>الاسم الوظيفي</th>
                                        <th>الجنس</th>
                                        <th>تاريخ الميلاد</th>
                                        <th>الاعدادات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}

                                        <tr>
                                            <td>{{ $admin->first_name . ' ' . $admin->last_name }}</td>
                                            <td>
                                                <img class="img-circle img-bordered-sm"
                                                    src="{{ asset('storage/images/admin/' . $admin->image) }}"
                                                    width="60" height="60" alt="User Image">
                                            </td>
                                            <td>{{ $admin->email }}</td>
                                            <td>{{ $admin->mobile ?? '' }}</td>
                                            @foreach ($roles as $role)
                                                @if ($admin->role_id == $role->id)
                                                    <td>{{ $role->name }}</td>
                                                @endif
                                            @endforeach
                                            <td>{{ $admin->gender ?? '' }}</td>
                                            <td>{{ $admin->date ?? '' }}</td>
                                            <td>
                                                <div class="btn group">
                                                    <a href="{{ route('admins.edit', $admin->id) }}" type="button"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="button"
                                                        onclick="performDestroy({{ $admin->id }} , this)"
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
                    </div>
                    {{ $admins->links() }}
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection


@section('scripts')
    <script>
        function performDestroy(id, referance) {
            let url = '/dashboard/admins/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
