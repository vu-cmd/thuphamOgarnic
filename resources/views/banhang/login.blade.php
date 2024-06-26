<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/login_register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>
                    <form action="{{ route('postLogin') }}" method="post" class="login-form">
                        @csrf

                        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif

                  @if(Session::has('flag'))
                      <div class="alert alert-danger {{ Session::get('flag') }}">{{ Session::get('message') }}</div>
                  @endif

                        <input name="email" type="email" class="auth-form-input" placeholder="Email" required>
                        <div class="input-icon">
                            <input name="password" type="password" class="auth-form-input " placeholder="Password" required>
                            <i class="field-icon click-eye" ></i>
                        </div>
                        <div class="footer-action">
                            <input type="submit" value="Sign In" class="auth-submit" style="height: 40px; line-height: 15px ;">
                            <a href="{{route('getRegister')}}" class="auth-btn-direct">Sign Up</a>
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="#">Forgot password</a>
                    </div>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image_login">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190620/ourmid/pngtree-organic-vegetable-poster-background-material-image_173394.jpg" alt="login">
                </div>
            </div>
        </div>
    </div>
    <script src="js/common.js"></script>
</body>
</html>