<html>
<head>
    <title>Transparent Login & Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
</body>
    <div class="form">
        <div class="form-box"> 
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
          </div>
            <div class="social-icons">
            <img src="ffb.png">
            <img src="twe.png">
            <img src="ins.png">
        </div> 
        <form action = "loginpro.php" method = "post" id="login" class="input-group">
            <input type="text" class="input-field" name = email placeholder="Email Address" required>
            <input type="text" class="input-field" name = password placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log in</button>
        </form>
        <form action = "register.php" method = "post" id="register" class="input-group">
            <input type="text" class="input-field" name = username placeholder="Username" required>
            <input type="email" class="input-field" name = email placeholder="Email Address" required>
            <input type="text" class="input-field" name = password placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & Conditions</span>
            <button type="submit" class="submit-btn" name = "register">Register</button>
        </form>
    </div>

        </div>

        <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        } 
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
                   
        </script>

    </body>
</html>