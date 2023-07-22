@extends('cms.parent')

@section('title', 'Admins')

@section('sub-title', 'تعديل أدمن')

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
                            <h3 class="card-title float-left">تعديل بيانات أدمن</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>

                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>الأدوار</label>
                                        <select class="form-control select2" id="role_id" name="role_id"
                                            style="width: 100%;">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">الأسم الأول</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            value="{{ $admins->first_name }}" placeholder="أدخل الاسم الأول">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="last_name">الأسم الاخير</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            value="{{ $admins->last_name }}" placeholder="أدخل الاسم الأخير">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email">الايميل</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $admins->email }}" placeholder="أدخل الايميل">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mobile">رقم الهاتف</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            value="{{ $admins->mobile }}" placeholder="أدخل رقم الهاتف">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="status"> الحالة</label>
                                        <select class="form-select form-select-sm" name="status" style="width: 100%;"
                                            id="status" aria-label=".form-select-sm example">
                                            <option selected> {{ $admins->status }} </option>
                                            <option value="فعال">فعال </option>
                                            <option value="غير فعال">غير فعال</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="gender">الجنس</label>
                                        <select class="form-select form-select-sm" name="gender" style="width: 100%;"
                                            id="gender" aria-label=".form-select-sm example">
                                            <option selected> {{ $admins->gender }} </option>
                                            <option value="ذكر">ذكر </option>
                                            <option value="أنثى">أنثى </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="image">الصورة الشخصية</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            placeholder="Enter Date of Admin">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">تاريخ الميلاد </label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            value="{{ $admins->date }}" placeholder="أدخل تاريخ الميلاد">
                                    </div>
                                </div>



                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="button" onclick="performUpdate({{ $admins->id }})"
                                        class="btn btn-primary">تعديل</button>
                                    <a href="{{ route('admins.index') }}" type="button" class="btn btn-info">الرجوع</a>

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
            formData.append('first_name', document.getElementById('first_name').value);
            formData.append('last_name', document.getElementById('last_name').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('date', document.getElementById('date').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('mobile', document.getElementById('mobile').value);
            formData.append('role_id', document.getElementById('role_id').value);
            formData.append('image', document.getElementById('image').files[0]);

            storeRoute('/dashboard/update-admins/' + id, formData);
        }
    </script>
@endsection
