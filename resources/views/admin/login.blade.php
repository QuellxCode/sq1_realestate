<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @include('admin.include.head')
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">

        <div class="logo-w">
            <a href="index.html"><img alt="" src="img/logo-big.png"></a>
        </div>
        @include('shared.errors')

        <h4 class="auth-header">
            Login Form
        </h4>

        <form action="{{url('/login')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" placeholder="Enter your email" type="text" name="email">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" placeholder="Enter your password" type="password" name="password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit" >Log me in</button>
                <div class="form-check-inline">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
