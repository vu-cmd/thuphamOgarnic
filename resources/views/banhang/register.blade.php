<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/login_register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Create Account
                    </h2>
                    <!-- <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                    <form action="{{ route('postRegister') }}" method="post" class="login-form">
                         @csrf

                         @if (count($errors)>0)
                    <div class="alert alert danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <!-- <div class="alert alert success">{{ Session::get('success') }} </div> -->
                         <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                              </div>
                           @endif   
                    
                        <input type="text" name="name" class="auth-form-input" placeholder="Name">
                        <input type="email" name="email" class="auth-form-input" placeholder="Email" required>
                        <input type="text" name="address" class="auth-form-input" placeholder="Address" required>
                        <input type="text" name="phone" class="auth-form-input" placeholder="Phone number" required>
                        <div class="input-icon">
                            <input type="password" name="password" class="auth-form-input" placeholder="Password" required>
                            <!-- <i class="fa fa-eye show-password "></i> -->
                             <i class="bx fa-fw field-icon click-eye"></i>
                        </div>
                        <input type="password" name="confirm-password" class="auth-form-input" placeholder="Confirm Password" required>
                         <i class="field-icon click-eye"></i>
                        <!-- <label class="btn active">
                        </label> -->
                        <div class="footer-action">
                            <input type="submit" value="Sign Up" class="auth-submit" style="height: 40px; line-height: 15px ;">
                             
                            <!-- <button type="button"  value="Sign Up" class="btn btn-outline-primary auth-submit">Primary</button> -->
                            <a href="{{route('getLogin')}}" class="auth-btn-direct">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="auth-action-right">
                <div class="auth-image_register">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190620/ourmid/pngtree-organic-vegetable-poster-background-material-image_173394.jpg" alt="login">
                </div>
            </div> -->
        </div>
    </div>
    <script src="js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>