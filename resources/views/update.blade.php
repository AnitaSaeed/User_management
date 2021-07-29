
@extends('layout')
@section('content')

    <div class="container" style="margin-top: 50px !important;">
        <div class="card">
            <div class="card-header">
                ویرایش کاربر
            </div>
            <div class="container" style="padding: 50px !important;">
                <form method="post" action="/user/{{$user->id}}">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <label for="exampleInputEmail1">نام:</label>

                            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                            @error('name')
                            <small class="inp-span-s text-danger">نام را وارد کنید</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">نام خانوادگی:</label>

                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{$user->last_name}}">
                            @error('last_name')
                            <small class="inp-span-s text-danger">نام خانوادگی را وارد کنید</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <label for="exampleInputEmail1">کد ملی:</label>

                            <input type="text" name="national_number" id="national_number" class="form-control" value="{{$user->national_number}}">
                            @error('national_number')
                            <span class="inp-span-s text-danger">کد ملی را وارد کنید</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">موبایل :</label>

                            <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
                            @error('phone')
                            <span class="inp-span-s text-danger">شماره موبایل را وارد کنید</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ایمیل:</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$user->email}}">
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
