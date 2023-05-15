<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
 
    @include('components.link')
</head>
<body  style="background-image: url('frontend/img/bg-01.jpg');">

    <div class="main" >

        <section class="signup" >
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Tài khoản</span>
                            <input class="input100" type="text" name="username" placeholder="Nhập tên tài khoản">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Mật khẩu</span>
                            <input class="input100" type="password" name="pass" placeholder="Nhập mật khẩu">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>