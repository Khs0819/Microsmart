@extends('cms.parent')

@section('title', 'الصلاحيات')

@section('main-title', 'تعديل صلاحية')

@section('sub-title', 'تعديل صلاحية')

@section('styles')

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">تعديل بيانات الصلاحية</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="guard_name">نوع الحساب</label>
                                        <select class="form-select form-select-sm" name="guard_name" style="width: 100%;"
                                            id="guard_name" aria-label=".form-select-sm example">
                                            <option value="admin" @if ($permissions->guard_name == 'admin') selected @endif>أدمن
                                            </option>
                                            <option value="author" @if ($permissions->guard_name == 'author') selected @endif>مدير
                                                برنامج
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">اسم الصلاحية</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $permissions->name }}" placeholder="ادخل اسم الصلاحية">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick="performUpdate({{ $permissions->id }})"
                                    class="btn btn-primary">تعديل</button>
                                <a href="{{ route('permissions.index') }}" type="button" class="btn btn-info">الغاء</a>

                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>
                <!--/.col (left) -->


                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection


@section('scripts')
    <script>
        function performUpdate(id) {

            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('guard_name', document.getElementById('guard_name').value);

            storeRoute('/dashboard/update-permissions/' + id, formData);
        }
    </script>
@endsection
