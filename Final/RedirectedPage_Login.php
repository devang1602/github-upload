<?php 
include "Connection.php";
session_start();  


function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
}

    $email = validate($_POST['Email_Id']);
    $pass = validate($_POST['password']);

    $sql="SELECT * FROM user_data WHERE Email_Id='$email' and Password1='$pass'";
    $result=mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(!$row){
        echo '<p class="error">Username password combination is wrong!</p>';
    }
    else{
    $_SESSION['login'] = true;  
    $_SESSION['firstname'] = $row['First_Name'];  
    $_SESSION['lastname'] = $row['Last_Name'];  
    $_SESSION['email'] = $row['Email_Id']; 
    echo '<p class="success">Congratulations, you are logged in!</p>';
    }

    mysqli_free_result($result);
    mysqli_close($con);

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Login</title>
    
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
                    
                    <b>WELCOME</b>
                </div>
                <br>
                <form name="login" class="output-group-login' method="post" action="index.html">  
                    <span class="output-field">Your First Name: <?=$_SESSION['firstname']?></span><br><br>
                    <span class="output-field"> Your Last Name: <?=$_SESSION['lastname']?> </span><br><br>
                    <span class="output-field"> Your Email:     <?=$_SESSION['email']?></span><br><br><br>
                    <button type='submit' class='submit-btn'>Log out</button>
                </form>  
            </div>
    </section>
    
    </body>
</html>  
                