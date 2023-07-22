@extends('cms.parent')

@section('title', 'الأدوار')

@section('main_title', '')

@section('sub_title', 'تعديل دور')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">تعديل بيانات دور</h3>
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
                                            <option value="admin" @if ($roles->guard_name == 'admin') selected @endif>أدمن
                                            </option>
                                            <option value="author" @if ($roles->guard_name == 'author') selected @endif>مدير
                                                برنامج
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">اسم الدور</label>
                                        <input type="text" value="{{ $roles->name }}" class="form-control"
                                            id="name" name="name" placeholder="ادخل اسم الدور">
                                    </div>
                                </div>





                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick=" performUpdate({{ $roles->id }})"
                                    class="btn btn-primary">تعديل</button>
                                <a href="{{ route('roles.index') }}" type="button" class="btn btn-secondary">الغاء</a>

                            </div>
                        </form>
                    </div>




                </div>


            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function performUpdate(id) {

            let formData = new FormData();

            formData.append('name', document.getElementById('name').value);
            formData.append('guard_name', document.getElementById('guard_name').value);

            storeRoute('/dashboard/update-roles/' + id, formData);
        }
    </script>
@endsection
