@extends('master.master')
@section('position')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ایجاد پرونده</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="{{route('panel')}}">خانه</a></li>
                <li class="breadcrumb-item ">
                    <a href="{{route('plan.index')}}">
                        پرونده ها
                    </a>
                </li>
                <li class="breadcrumb-item active">ایجاد پرونده</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title d-inline">ایجاد پرونده
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
                            <div class="col-md-4">
                                <label>
                                    نام و نام خانوادگی
                                </label>
                                <input type="name" name="title" class="form-control" placeholder="علی احمدی "
                                       value="{{Request()->old('name')??""}}">
                            </div>

                            <div class="col-md-4">
                                <label>
                                    متولد
                                </label>
                                <input type="number" min="1350" max="1400" name="birth" class="form-control "
                                       placeholder="۱۳۶۷" value="{{Request()->old('birth')??""}}">
                            </div>
                            <div class="col-md-4">
                                <label>
                                    تلفن همراه
                                </label>
                                <input type="number"  name="mobile" class="form-control "
                                       placeholder="091549515555" value="{{Request()->old('mobile')??""}}">
                            </div>
                        </div>

                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                   وضعیت تاهل
                                </label>
                                <select class="form-control" name="marriage">
                                    <option value="False">مجرد</option>
                                    <option value="True"> متاهل</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    تعداد عائله
                                </label>
                                <input type="number" min="0"  name="family" class="form-control" placeholder="4"
                                       value="{{Request()->old('family')??""}}">
                            </div>

                        </div>
                        <div class="row input-group p-1">
                            <div class="col-md-6">
                                <label>
                                    مدرک تحصیلی
                                </label>
                                <select class="form-control" name="degree">
                                    <option >بدون مدرک</option>
                                    <option >کاردانی</option>
                                    <option > کارشناسی</option>
                                    <option > کارشناسی ارشد</option>
                                    <option > دکتری</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>
                                   نوع حمایت
                                </label>
                                <select class="form-control" name="support_type">
                                    <option >1</option>
                                    <option >2</option>
                                    <option > 3</option>
                                </select>
                            </div>
                        </div>
                        <div class=" mt-2">

                            <label class="p-1 d-block">
                                ادرس:
                            </label>
                            <div class="col-12 ">
                                <textarea name="address"
                                          class="form-control p-0 w-99">{{Request()->old('address')??""}}</textarea>

                            </div>
                        </div>
{{--                        <div class="row input-group p-1">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>--}}
{{--                                    تاریخ ثبت--}}
{{--                                </label>--}}

{{--                                <input type="text" name="date" class="form-control normal-example" placeholder="*******"--}}
{{--                                       value="{{Request()->old('date')}}">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>--}}
{{--                                    کد پرونده--}}
{{--                                </label>--}}
{{--                                <input type="number" name="code" class="form-control" placeholder="123444"--}}
{{--                                       value="{{Request()->old('code')}}">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <label>--}}
{{--                                    فضا--}}
{{--                                </label>--}}
{{--                                <input type="text" name="space" class="form-control" placeholder="31123"--}}
{{--                                       value="{{Request()->old('space')}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <hr>--}}
{{--                        <span>--}}
{{--                            سرمایه پرونده--}}
{{--                        </span>--}}
{{--                        <div class=" mt-2">--}}

{{--                            <label class="p-1 d-block">--}}
{{--                                آورده مجری (نام اقلام با امکانات):--}}
{{--                            </label>--}}
{{--                            <div class="col-12 ">--}}
{{--                                <textarea name="executer_summery"--}}
{{--                                          class="form-control p-0">{{Request()->old('executer_summery')??""}}</textarea>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row input-group p-1">--}}

{{--                            <div class="col-md-6">--}}
{{--                                <label>--}}
{{--                                    ارزش آورده:--}}
{{--                                </label>--}}
{{--                                <input type="number" name="executer_fund" class="form-control" placeholder="100000000"--}}
{{--                                       value="{{Request()->old('executer_fund')}}">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label>--}}
{{--                                    مبلغ تسهیلات:--}}
{{--                                </label>--}}
{{--                                <input type="number" name="fund" class="form-control" placeholder="100000000"--}}
{{--                                       value="{{Request()->old('fund')}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class=" mt-2">--}}

{{--                            <label class="p-1 d-block">--}}
{{--                                خلاصه اقلام خریداری شده با تسهیلات:--}}
{{--                            </label>--}}
{{--                            <div class="col-12 ">--}}
{{--                                <textarea name="summery"--}}
{{--                                          class="form-control p-0">{{Request()->old('summery')??""}}</textarea>--}}

{{--                            </div>--}}
{{--                        </div>--}}
                        <hr>
                        <span>
                            سوابق مهارتی
                        </span>
                        <div id="place1"></div>
                        <hr>
                        <span>
                           شناسه رهگیری مستندات پرونده
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
                <div class="col-md-4">

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
                <div class="col-md-5">
                    <label>
                        توضیحات
                    </label>
                    <input type="text" name="metaValue[]" class="form-control" placeholder="توضیحات">
                </div>
                <div class="col-md-3">
                    <label>
                        وضعیت استعلام:
                    </label>
                    <select class="form-control" name="metaActive[]">
                        <option value="true">تایید شده</option>
                        <option value="false"> عدم تایید</option>
                    </select>


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
            $("#executor").change(()=>{
                var selectedItem = $('#executor').children("option:selected").val();
                if(selectedItem.length>0){
                    axios.post('/panel/skill/list',{id:selectedItem})
                        .then(res => {
                            let data = res.data;
                            data = data.map(item => {
                                return `
                                 <div class="row input-group p-1">
                <div class="col-md-6">

                    <label>
                        نوع سابقه مهارتی
                    </label>
                    <select class="form-control" name="skillType[]">
                        <option
${item.type=="سوابق تجربی/شاگردی" ? "selected" : null}
>سوابق تجربی/شاگردی</option>
                        <option
${item.type=="گواهینامه مهارتی بدون معرفی امداد" ? "selected" : null}
>گواهینامه مهارتی بدون معرفی امداد</option>
                        <option
${item.type=="گواهینامه مهارتی با معرفی امداد" ? "selected" : null}
>گواهینامه مهارتی با معرفی امداد</option>
                    </select>


                </div>
                <div class="col-md-6">
                    <label>
                        توضیحات
                    </label>
                    <input type="text" name="skillValue[]" class="form-control" value="${item.value}" placeholder="توضیحات">
                </div>
            </div>
                                `
                            });
                            $("#place1").after(data);
                        }).catch(err => {
                        console.log(err)
                    });
                }
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

    <script>
        $(".select2").select2({
            placeholder: "انتخاب کنید"
        });
    </script>
@endsection
