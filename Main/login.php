<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/0f57b9b4e5.js" crossorigin="anonymous"></script>
  
</head>
<body>
    <div class="wapper">
        <form action="login_submit.php" method="post">
            <div class="box sign_in">
                <h2>Sign in</h2>
                    <div class="input_box">
                        <input type="text" required="required" name="user">
                        <span><i class="fa-solid fa-user-secret"></i>User name</span>
                        <div></div>
                    </div>
                    <div class="input_box">
                        <input type="password" required="required" name="pass">
                        <span><i class="fa-solid fa-lock"></i>Password</span>
                        <div></div>
                    </div>
                    <div class="links">
                        <a href="">Forgot Password</a>
                        <a href="#" class="links_signup">Sign up</a>
                    </div>
                    <input type="submit" value="Login">
            </div>
        </form>
        
        <form action="regis_submit.php" method="post">
            <div class="box sign_up">
                <h2>Registration</h2>
                    <div class="input_box">
                        <input type="text" required="required" name="username">
                        <span><i class="fa-solid fa-user"></i>User name</span>
                        <div></div>
                    </div>
                    <div class="input_box">
                        <input type="text" required="required" name="user">
                        <span><i class="fa-solid fa-user-secret"></i>User </span>
                        <div></div>
                    </div>
                    <div class="input_box">
                        <input type="password" required="required" name="pass">
                        <span><i class="fa-solid fa-lock"></i>Password</span>
                        <div></div>
                    </div>
                    <div class="input_box">
                        <input type="password" required="required" name ="conpass">
                        <span><i class="fa-solid fa-lock"></i>Confirm Password</span>
                        <div></div>
                    </div>
                    <div class="links">
                        <div></div>
                        <a href="#" class="links_signin">Login</a>
                    </div>
                    <input type="submit" value="Register" />
            </div>
                
                
        </from>
       
        <script src="../Js/login.js"></script>
    </div>
</body>
</html>