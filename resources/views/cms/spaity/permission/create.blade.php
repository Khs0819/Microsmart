@extends('cms.parent')

@section('title', 'الصلاحيات')

@section('main-title', 'اضافة صلاحية')

@section('sub-title', 'اضافة صلاحية')

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
                            <h3 class="card-title float-left">انشاء صلاحية جديدة</h3>
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
                                            <option value="admin">أدمن </option>
                                            <option value="author">مدير برنامج </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">اسم الصلاحية</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="ادخل اسم الصلاحية">
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick="performStore()" class="btn btn-primary">تخزين</button>
                                <a href="{{ route('permissions.index') }}" type="button" class="btn btn-info">الرجوع</a>

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
        function performStore() {

            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('guard_name', document.getElementById('guard_name').value);

            store('/dashboard/permissions', formData);
        }
    </script>
@endsection
