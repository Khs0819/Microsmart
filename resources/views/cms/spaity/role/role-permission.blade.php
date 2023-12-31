@extends('cms.parent')

@section('title', 'اعطاء الصلاحيات')

@section('main-title', 'اعطاء الصلاحيات')

@section('small-title', 'اعطاء الصلاحيات')

@section('styles')

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card ">
                        <div class="card-header ">
                            <h3 class="card-title"></h3>
                            {{-- <a href="{{ route('roles.index') }}" type="button"  class="btn btn-success">الأدوار</a> --}}

                            <div class="card-tools">
                                <div class="mx-auto ">
                                    <form action="" method="get" style="margin-bottom:2%;">
                                        <div class="row">
                                            <div class="input-icon col-md-5">
                                                <input type="text" class="form-control" placeholder="البحث باسم الصلاحية"
                                                    name='name'
                                                    @if (request()->name) value={{ request()->name }} @endif />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-7">
                                                <button class="btn btn-success btn-md" type="submit"> فلترة</button>
                                                <a href="{{ route('roles.permissions.index', $roleId) }}"
                                                    class="btn btn-danger">
                                                    انهاء الفلترة</a>
                                                <a href="{{ route('roles.index') }}" class="btn btn-dark">الرجوع</a>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>الترتيب</th>
                                        <th> الصلاحية</th>
                                        <th> نوع الحساب</th>
                                        <th> الحالة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            {{-- <span class="tag tag-success">Approved</span>s --}}
                                            <td>{{ ++$count }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->guard_name }}</td>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="permission_{{ $permission->id }}"
                                                        onchange="storeRolePermission({{ $roleId }},{{ $permission->id }})"
                                                        @if ($permission->active) checked @endif>
                                                    <label for="permission_{{ $permission->id }}">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        function storeRolePermission(roleId, permissionId) {
            let data = {
                permission_id: permissionId,
            };

            store('/dashboard/roles/' + roleId + '/permissions', data);

        }
    </script>
@endsection
