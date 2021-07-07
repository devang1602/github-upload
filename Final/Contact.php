<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact</title>
    <style>
        .form-box {
            width: 380px;
            height: 480px;
            position: relative;
            margin: 2% auto;
            background: rgb(255, 255, 255);
            padding: 10px;
            overflow: hidden;
        }
   
        .button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #0000001f;
            border-radius: 30px;
        }

        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: rgb(202, 202, 202);
            border-radius: 30px;
            transition: .5s;
        }

        .input-group-login {
            top: 150px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-group-register {
            top: 120px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }

        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: rgb(224, 219, 219);
            border: 0;
            outline: none;
            border-radius: 30px;
        }

        .check-box {
            margin: 30px 10px 34px 0;
        }

        span {
            color: rgb(0, 0, 0);
            font-size: 12px;
            bottom: 68px;
            position: absolute;
        }

        #login {
            left: 50px;
        }

        #login input {
            color: rgb(0, 0, 0);
            font-size: 15;
        }

        #register {
            left: 450px;
        }

        #register input {
            color: rgb(0, 0, 0);
            font-size: 15;
        }

        #MenuItems {
            width: 100%;

        }
        body{
            background:black ;
        }
        .container{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/background.png);
            background-position: center;
            background-size: cover;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
        }
        .navbar{
            height: 12%;
            display: flex;
            align-items: center;
        }
        .logo{
            width: 50px;
            cursor: pinter;
        }
        .menu-icon{
            width: 30px;
            cursor: pointer;
            margin-left: 40px;
        }
        nav{
            flex: 1;
            text-align: right;
        }
        nav ul li{
            list-style: none;
            display: inline-block;
            margin-left: 60px;
        }
        nav ul li a{
            text-decoration: none;
            color: #fff;
            font-size: 13px;
        }
    </style>

</head>

<body >
    <div class="container">
        <div class="navbar">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="https://localhost/Final/Contact.php">CONTACT</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon">
        </div>
    <section >
                 
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action = "RedirectedPage_Login.php" method = "POST">
                    <input type='email' name="Email_Id" id="Email_Id" class='input-field' placeholder='Email Id' required>
                    <input type='password' name="password" id="password"class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' class='submit-btn'>Log in</button>
                </form>
                <form id='register' class='input-group-register' action = "RedirectedPage_Register.php" method = "POST">
                    <input type='text' name="First_Name" id="First_Name"class='input-field' placeholder='First Name' required>
                    <input type='text' name="Last_Name" id="Last_Name"class='input-field' placeholder='Last Name ' required>
                    <input type='email'name="Email_Id" id="Email_Id" class='input-field' placeholder='Email Id' required>
                    <input type='password' name="password" id="password"  onchange='check();' class='input-field' placeholder='Enter Password' required />
                    <input type='password' name="confirm_password" id="confirm_password"  onchange='check();' class='input-field' placeholder='Confirm Password' required />
                    <span id='message'></span><br>
                    <input type='checkbox' class='check-box' required><span>I agree to the terms and conditions</span>
                    <button type='submit' class='submit-btn'>Register</button>
                </form>
            </div>
       
    </section>
    <script src="script.js"></script>
    </body>
    
    </html>