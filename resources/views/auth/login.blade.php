
<!DOCTYPE html>
<html class="login-page">
<head>
    <meta charset="UTF-8">
    <title>Sistem Inventaris Fakultas Teknik Unipma</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- bootstrap 3.0.2 -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/login.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("img/favicon.png") }}" rel="icon" type="image/x-icon" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/assets/v1/js/external/html5shiv.js"></script>
    <script src="/assets/v1/js/external/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        html,body{
            background-image: url('{{ asset("img/pat_03.png") }}'), url('{{ asset("img/unipma.jpg") }}');
        }
    </style>
</head>
<body>
<div align="left"  id="main_cont">
    <div class="form-box" id="login-box">
        <div class="header company-pattern">
            <img src="{{ asset("img/unipma.png") }}" height="150"><br/>
            Sistem Inventaris                    <p> <b>Universitas PGRI Madiun</b> </p>
        </div>

        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="body bg-gray">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Akun Pengguna"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi"/>
                </div>
                <div class="form-group">
                    <div class="checkbox" style="margin-left:20px">
                        <label>
                            <input type="checkbox" name="remember_me" value="1"/><font color="#636361"> Ingat saya</font>/
                        </label>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn btn-brand btn-block">Masuk Aplikasi</button>
                <a href="{{ url('/admin/password/reset') }}"><font color="#636361"> Lupa Password?</font></a>
                <a href="" target="_blank" style="float: right; color:#A7A9AC;"><font color="#636361">Copyright © 2018 Riska Bentol-Bentol </font></a>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
</div>

<!-- jQuery 2.0.2 -->
<script src="{{ asset("js/external/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("js/bootstrap.min.js") }}" type="text/javascript"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91361426-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
