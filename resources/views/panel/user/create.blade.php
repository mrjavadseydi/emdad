@extends('master.master')
@section('position')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">کاربران</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="{{route('panel')}}">خانه</a></li>
                <li class="breadcrumb-item active">کاربران </li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title d-inline">ایجاد کاربر
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    نام
                                </label>

                                <input type="text" name="name" class="form-control" placeholder="محمد علی احمدی">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    نام پدر
                                </label>
                                <input type="text" name="fathername" class="form-control" placeholder="سعید احمدی">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    مدرک تحصیلی
                                </label>

                                <input type="text" name="degree" class="form-control" placeholder="دیپلم ریاضی">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    تلفن همراه
                                </label>
                                <input type="text" name="mobile" class="form-control" placeholder="091549515555">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    تلفن ثابت
                                </label>

                                <input type="text" name="phone" class="form-control" placeholder="05632222222">
                            </div>
                            <div class="col-md-6">
                                <label>
                                   فاصله از مرکز(km)
                                </label>
                                <input type="number" name="distance" class="form-control" placeholder="12">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    کلمه عبور
                                </label>

                                <input type="password" name="password" class="form-control" placeholder="*******">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    تکرار کلمه عبور
                                </label>
                                <input type="password" name="re_password" class="form-control" placeholder="*******">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    نوع کاربر
                                </label>
                                <select class="form-control" name="user_type">
                                    <option>مددجو</option>
                                    <option>کارمند امداد</option>
                                    <option>کارمند شرکت</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label>
                                    تاریخ تولد
                                </label>
                                <input type="text" name="re_password" class="form-control normal-example" placeholder="*******">
                            </div>
                        </div>
                        <div class="row input-group p-1 mt-2">

                                <label class="p-1">
                                    آدرس :
                                </label>
                                <textarea name="address" class="form-control"></textarea>

                        </div>
                        <input type="submit" class="m-3 btn btn-success" value="ثبت">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col -->

@endsection
@section('script')
    <script src="{{asset('AdminAsset/dist/js/persian-date.min.js')}}"></script>
    <script src="{{asset('AdminAsset/dist/js/persian-datepicker.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.normal-example').persianDatepicker({
                format: 'YYYY/MM/DD',
            });

        });
    </script>
@endsection
