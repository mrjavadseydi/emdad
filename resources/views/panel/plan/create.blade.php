@extends('master.master')
@section('position')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ایجاد طرح</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="{{route('panel')}}">خانه</a></li>
                <li class="breadcrumb-item ">
                    <a href="{{route('plan.index')}}">
                        طرح ها
                    </a>
                </li>
                <li class="breadcrumb-item active">ایجاد طرح</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title d-inline">ایجاد طرح
                    </h3>

                </div>
                @if ($errors->any())
                    <div class="alert alert-danger m-1">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">

                    <form action="{{route('plan.store')}}" method="post">
                        @csrf
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    مجری
                                </label>
                                <select class="form-control" name="executer_id">
                                    @foreach($executers as $executer)

                                        <option value="{{$executer->id}}">
                                            {{$executer->name}}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label>
                                    مسئول
                                </label>


                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">
                                            {{$user->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row input-group p-1">


                            <div class="col-md-6">
                                <label>
                                    عنوان طرح
                                </label>
                                <input type="text" name="title" class="form-control" placeholder="تاسیس ارایشگاه"
                                       value="{{Request()->old('title')??""}}">
                            </div>

                            <div class="col-md-6">
                                <label>
                                    نوع تسهیلات
                                </label>
                                <input type="text" name="type" class="form-control "
                                       placeholder="نوع تسهیلات" value="{{Request()->old('type')??""}}">
                            </div>
                        </div>

                        <div class="row input-group p-1">
                            <div class="col-md-6">

                                <label>
                                    گروه فعالیت
                                </label>
                                <select class="form-control" name="group">
                                    <option>۱</option>
                                    <option>۲</option>
                                    <option>۳</option>
                                    <option>۴</option>
                                    <option>۵</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label>
                                    منبع اعتبار
                                </label>
                                <input type="text" name="source" class="form-control" placeholder="منبع اعتبار"
                                       value="{{Request()->old('source')??""}}">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    بانک عامل
                                </label>

                                <input type="text" name="bank" class="form-control" placeholder="بانک عامل"
                                       value="{{Request()->old('bank')??""}}">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    اشتغال
                                </label>
                                <input type="number" name="employment" class="form-control" placeholder="12"
                                       value="{{Request()->old('employment')??""}}">
                            </div>
                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-4">
                                <label>
                                    تاریخ ثبت
                                </label>

                                <input type="text" name="text" class="form-control normal-example" placeholder="*******"
                                       value="{{Request()->old('date')}}">
                            </div>
                            <div class="col-md-4">
                                <label>
                                    کد طرح
                                </label>
                                <input type="number" name="code" class="form-control" placeholder="123444"
                                       value="{{Request()->old('code')}}">
                            </div>
                            <div class="col-md-4">
                                <label>
                                    فضا
                                </label>
                                <input type="text" name="space" class="form-control" placeholder="31123"
                                       value="{{Request()->old('space')}}">
                            </div>
                        </div>
                        <hr>
                        <span>
                            سرمایه طرح
                        </span>
                        <div class=" mt-2">

                            <label class="p-1 d-block">
                                آورده مجری (نام اقلام با امکانات):
                            </label>
                            <div class="col-12 ">
                                <textarea name="executer_summery"
                                          class="form-control p-0">{{Request()->old('executer_summery')??""}}</textarea>

                            </div>
                        </div>
                        <div class="row input-group p-1">

                            <div class="col-md-6">
                                <label>
                                    ارزش آورده:
                                </label>
                                <input type="number" name="executer_fund" class="form-control" placeholder="100000000"
                                       value="{{Request()->old('executer_fund')}}">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    مبلغ تسهیلات:
                                </label>
                                <input type="number" name="fund" class="form-control" placeholder="100000000"
                                       value="{{Request()->old('fund')}}">
                            </div>
                        </div>
                        <div class=" mt-2">

                            <label class="p-1 d-block">
                                خلاصه اقلام خریداری شده با تسهیلات:
                            </label>
                            <div class="col-12 ">
                                <textarea name="summery"
                                          class="form-control p-0">{{Request()->old('summery')??""}}</textarea>

                            </div>
                        </div>
                        <hr>
                        <span>
                            سوابق مهارتی
                        </span>
                        <div id="place1"></div>
                        <hr>
                        <span>
                           شناسه رهگیری مستندات طرح
                        </span>
                        <div id="place2"></div>

                        <div class="p-2 col-12">
                            <button class="btn btn-sm btn-info" type="button" onclick="f1()">افزودن مهارت</button>
                            <button class="btn btn-sm btn-info" type="button" onclick="f2()">افزودن شناسه رهگیری
                                مستندات
                            </button>

                        </div>
                        <div class="col-12">
                            <input type="submit" class="m-3 btn btn-success btn-block" value="ثبت">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none">
        <div class="clone">
            <div class="row input-group p-1">
                <div class="col-md-6">

                    <label>
                        نوع سابقه مهارتی
                    </label>
                    <select class="form-control" name="skillType[]">
                        <option>سوابق تجربی/شاگردی</option>
                        <option>گواهینامه مهارتی بدون معرفی امداد</option>
                        <option>گواهینامه مهارتی با معرفی امداد</option>
                    </select>


                </div>
                <div class="col-md-6">
                    <label>
                        توضیحات
                    </label>
                    <input type="text" name="skillValue[]" class="form-control" placeholder="توضیحات">
                </div>
            </div>
        </div>
        <div class="clone2">
            <div class="row input-group p-1">
                <div class="col-md-6">

                    <label>
                        بخش مربوطه:
                    </label>
                    <select class="form-control" name="metaType[]">
                        <option>کد رهگیری درخواست</option>
                        <option>شناسه فنی حرفه ای</option>
                        <option>شماره گواهینامه ماشین</option>
                        <option>گواهی دردست اقدام(شماره و تاریخ)</option>
                        <option>شناسه مجوز شغلی</option>
                        <option>کد سامانه رصد</option>
                    </select>


                </div>
                <div class="col-md-6">
                    <label>
                        توضیحات
                    </label>
                    <input type="text" name="metaValue[]" class="form-control" placeholder="توضیحات">
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

        function f1() {

            var lsthmtl = $(".clone").html();
            $("#place1").after(lsthmtl);
        }

        function f2() {

            var lsthmtl = $(".clone2").html();
            $("#place2").after(lsthmtl);
        }
    </script>
@endsection
