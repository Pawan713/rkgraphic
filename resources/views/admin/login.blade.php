<!doctype html>
<html lang="en" dir="ltr">
<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>RK Graphics</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Core css -->
<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('admin/assets/css/theme1.css')}}"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="{{route('admin.login')}}"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Admin Login</div>
                {{-- <div class="form-group">
                    <select class="custom-select">
                        <option>Project Manager</option>
                        <option>Team Leader</option>
                        <option>Employee</option>
                    </select>
                </div> --}}
                <form action="{{route('adminLogin')}}" method="POST">
                  @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                  <input type="submit" value="Sign in" class="btn btn-primary btn-block">
                    {{-- <a href="index-2.html" class="btn btn-primary btn-block" title="">Sign in</a> --}}
                </div>
              </form>

            </div>
            {{-- <div class="text-center text-muted">
                Don't have account yet? <a href="register.html">Sign up</a>
            </div> --}}
        </div>        
    </div>
    <div class="auth_right full_img"></div>
</div>

<script src="{{asset('admin/assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/core.js')}}"></script>
</body>

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
</html>