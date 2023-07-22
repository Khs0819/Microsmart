@extends('cms.parent')

@section('title', ' الأدوار')

@section('main-title', 'عرض الأدوار')

@section('sub-title', 'عرض الأدوار')

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
                        <div class="card-header float-left">
                            {{-- <h3 class="card-title"> Index Data of Roles</h3> --}}
                            {{-- <a href="{{ route('countries.create') }}" type="button" class="btn btn-info">Add New Roles</a> --}}
                            <form action="" method="get" style="margin-bottom:2%;">
                                <div class="row ">
                                    <div class="input-icon col-sm-">
                                        <input type="text" class="form-control" placeholder="ادخل اسم الدور"
                                            name='name'
                                            @if (request()->name) value={{ request()->name }} @endif />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>

                                    <div class="col-sm-8">
                                        <button class="btn btn-success btn-md" type="submit"> فلترة</button>
                                        <a href="{{ route('roles.index') }}" class="btn btn-danger"> انهاء الفلترة</a>
                                        {{-- @can('Create-City') --}}

                                        <a href="{{ route('roles.create') }}"><button type="button"
                                                class="btn btn-md btn-primary"> اضافة دور جديد </button></a>
                                        {{-- @endcan --}}
                                    </div>

                                </div>
                            </form>
                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>الترتيب</th>
                                        <th>اسم الدور</th>
                                        <th>نوع الحساب</th>
                                        <th>الصلاحيات</th>
                                        <th>الاعدادات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}

                                        <tr>
                                            <td>{{ ++$count }}</td>
                                            <td>{{ $role->name }}</td>

                                            @if ($role->guard_name == 'admin')
                                                <td>أدمن</td>
                                            @else
                                                <td>مدير برنامج</td>
                                            @endif
                                            <td><a href="{{ route('roles.permissions.index', $role) }}"
                                                    class="btn btn-info">({{ $role->permissions_count }})
                                                    صلاحية</a> </td>


                                            <td>
                                                <div class="btn group">
                                                    <a href="{{ route('roles.edit', $role->id) }}" type="button"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                        {{-- <i class="far fa-edit"></i> --}}
                                                    </a>
                                                    <button type="button"
                                                        onclick="performDestroy({{ $role->id }} , this)"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>

                                                </div>
                                            </td>

                                            <td></td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    {{-- {{ $roles->links()}} --}}
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection


@section('scripts')
    <script>
        function performDestroy(id, referance) {
            let url = '/dashboard/roles/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
