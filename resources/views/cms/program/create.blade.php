@extends('cms.parent')

@section('title', 'البرامج التدريبية')

@section('main_title', '')

@section('sub_title', 'اضافة برنامج تدريبي')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title float-left">اضافة بيانات برنامج</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="name">اسم البرنامج</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="ادخل اسم البرنامج">
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                                <a href="{{ route('programs.index') }}" type="button" class="btn btn-secondary">رجوع</a>

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
        function performStore() {

            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);


            store('/dashboard/programs', formData);
        }
    </script>

@endsection
