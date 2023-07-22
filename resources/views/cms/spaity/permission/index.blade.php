@extends('cms.parent')

@section('title', ' الصلاحيات')

@section('main-title', 'عرض الصلاحيات')

@section('sub-title', 'عرض الصلاحيات')

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
                            <form action="" method="get" style="margin-bottom:2%;">
                                <div class="row">
                                    <div class="input-icon col-sm-4">
                                        <input type="text" class="form-control" placeholder="ادخل اسم الصلاحية"
                                            name='name'
                                            @if (request()->name) value={{ request()->name }} @endif />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>

                                    <div class="col-sm-8">
                                        <button class="btn btn-success btn-md" type="submit"> فلترة</button>
                                        <a href="{{ route('permissions.index') }}" class="btn btn-danger">انهاء الفلترة</a>
                                        {{-- @can('Create-City') --}}

                                        <a href="{{ route('permissions.create') }}"><button type="button"
                                                class="btn btn-md btn-primary"> اضافة صلاحية جديدة</button></a>
                                        {{-- @endcan --}}
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>الترتيب</th>
                                        <th>اسم الصلاحية</th>
                                        <th>نوع الحساب</th>
                                        <th>الاعدادات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ ++$count }}</td>
                                            <td>{{ $permission->name }}</td>
                                            @if ($permission->guard_name == 'admin')
                                                <td>أدمن</td>
                                            @else
                                                <td>مدير برنامج</td>
                                            @endif


                                            <td>
                                                <div class="btn group">
                                                    <a href="{{ route('permissions.edit', $permission->id) }}"
                                                        type="button" class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                        {{-- <i class="far fa-edit"></i> --}}
                                                    </a>
                                                    <button type="button"
                                                        onclick="performDestroy({{ $permission->id }} , this)"
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
                    {{ $permissions->links() }}
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
            let url = '/dashboard/permissions/' + id;
            confirmDestroy(url, referance);
        }
    </script>
@endsection
