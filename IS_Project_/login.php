<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropoff Mtaani</title>
    <link rel="shortcut icon" type="image/png" href="Logo/logo1.png">
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
   <?php
   include("connection.php");
   
   ?>
    <div class="hero">
        <div class="form-box">
                <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                        <button type="button" class="toggle-btn" onclick="rejister()">Register</button>
                </div>
                <form id="login" class="input-group" action="login.php" method="post">

                        <input type="Email" class="input-field" name="Email"placeholder='Email' required>
                        <input type='password' class='input-field'name="password" placeholder='Password' required>
                        <input type='checkbox' class='check-box'><span>Remember me</span>
                        <button type="submit-btn" name="login" value="Log in"class="submit-btn"><a href=dash_board.php>Log in</a></button>
                        
                       
                </form>
                <form id="rejister" class="input-rejister" action="login.php" method="post"> 
                    <input type="text" class="input-field" name="First_name" value="" placeholder="First name" >
                    <input type="text" class="input-field" name="Second_name" value="" placeholder="Second name" >
                    <input type="number" class="input-field" name="Mobile_number" value="" placeholder="Mobile number" >
                    <input type="Email" class="input-field" name="Email" value="" placeholder="Email" >
                    <input type="password" class="input-field" name="Enter_password" value="" placeholder="Enter password" >
                    <input type="password" class="input-field" name="Confirm_password" value="" placeholder="Confirm password">
                    <input type="checkbox" class="check-box" ><span>I agree to the terms and condition</span>
                
                        <button type="submit-btn" name="submit" value="Register" class="submit-btn"><a href=dash_board.php>Register</a></button>
                        
                    
                 </form>
               
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("rejister");
        var z = document.getElementById("btn");

        function rejister(){
            x.style.left="-400px"
            y.style.left="50px"
            z.style.left="110px"
        }
        function login(){
            x.style.left="50px"
            y.style.left="450px"
            z.style.left="0px"
        }
        

    </script>
</body>
</html>  