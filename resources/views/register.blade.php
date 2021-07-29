@extends('layout')
@section('content')

    <div class="container" style="margin-top: 50px !important;">
        <div class="card">
            <div class="card-header">
                فرم ثبت نام کاربر
            </div>
            <div class="container" style="padding: 50px !important;">
                <form method="post" action="/user">
                    @csrf
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <label for="exampleInputEmail1">نام:</label>

                            <input type="text" name="name" id="name" class="form-control" placeholder="نام کاربر">
                            @error('name')
                            <small class="inp-span-s text-danger">نام را وارد کنید</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">نام خانوادگی:</label>

                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="نام خانوادگی کاربر">
                            @error('last_name')
                            <small class="inp-span-s text-danger">نام خانوادگی را وارد کنید</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <label for="exampleInputEmail1">کد ملی:</label>

                            <input type="text" name="national_number" id="national_number" class="form-control" placeholder="کد ملی را وارد کنید">
                            @error('national_number')
                            <span class="inp-span-s text-danger">کد ملی را وارد کنید</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">موبایل :</label>

                            <input type="text" name="phone" id="phone" class="form-control" placeholder="09123456789">
                            @error('phone')
                            <span class="inp-span-s text-danger">شماره موبایل را وارد کنید</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ایمیل:</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="ایمیل را وارد کنید">
                                @error('email')
                                <span class="inp-span-s text-danger"> ایمیل را وارد کنید.ایمیل باید غیر تکراری باشد</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1">رمز عبور:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="رمز عبور را وارد کنید">
                                @error('password')
                                <span class="inp-span-s text-danger">شماره موبایل را وارد کنید.</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                             <button type="submit" class="btn btn-primary register" style="width: 30%" >ثبت</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
