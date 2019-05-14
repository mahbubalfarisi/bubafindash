@extends('login-layout')
<title>Register</title>
@section('content')
    <div class="content" style="margin-top: 55px !important">
        <div class="row">
            <!-- Register User -->
            <div class="col-md-12">
                <div class="card-login card-user">
                    <div class="card-header">
                        <h5 class="card-title" style="text-align: center;">Register Account</h5>
                        <hr>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ url('/registerPost') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 pr-1 ml-auto mr-auto">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1 ml-auto mr-auto">
                                        <div class="form-group">
                                            <label for="alamat">Password:</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1 ml-auto mr-auto">
                                        <div class="form-group">
                                            <label for="alamat">Password Confirmation:</label>
                                            <input type="password" class="form-control" id="confirmation" name="confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1 ml-auto mr-auto">
                                        <div class="form-group">
                                            <label for="alamat">Name:</label>
                                            <input type="text"  class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1 ml-auto mr-auto">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md btn-primary">Register New Account</button>
                                            <button type="reset" class="btn btn-md btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-3 pr-1">
                                        <a href="/login"><i class="fas fa-angle-left"></i> Back to Login Page</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /.content -->
@endsection