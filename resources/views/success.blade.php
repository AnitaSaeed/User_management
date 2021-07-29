@extends('layout')
@section('content')
    <div class="container" style="padding-top:50px">
        <div class="card">
            <div style="margin: 50px">
            <div class="alert alert-success">
                کاربر با موفقیت ثبت شد!
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="/user/create" style="width: 100%"> ثبت کاربر جدید</a>

                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary" href="/user" style="width: 100%"> مشاهده کاربران</a>

                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
