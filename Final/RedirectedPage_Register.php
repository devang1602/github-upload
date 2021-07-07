<html>
 <head>
 <title> RedirectedPage </title>
 <link rel="stylesheet" href="style2.css">
 <script>
  function myfunc()
 {
	confirmation = prompt("Enter 1 to Confirm and 0 to Deny.");
	if (confirmation == 1)
	{
		<?php
		include("Connection.php");
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
			}
		$temp_first = $_POST["First_Name"];
		$temp_last = $_POST["Last_Name"];
		$temp_email = $_POST["Email_Id"];
		$temp_pass = $_POST["password"];
		
		$first = filter_var($temp_first, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$last = filter_var($temp_last, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$email = filter_var($temp_email, FILTER_SANITIZE_STRING);
		$pass = filter_var($temp_pass, FILTER_SANITIZE_STRING);

		$stmt = $con->prepare("INSERT INTO user_data (First_Name, Last_Name, Email_Id, Password1 ) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $first, $last, $email, $pass);
		$stmt->execute();
		$stmt->close();
		$con->close();
		?>
		alert("Values Inserted Successfully!!");
	}
 }
</script>
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
                    
                    <b>Confirm your details:</b>
                </div>
                <br>
                <form name="login" class="output-group-login' method="post" action="index.html">  
                    <span class="output-field">
						<?php
 							echo "FirstName: " .$first. "<br>";
 							echo "LastName: " .$last. "<br>";
 							echo "Email Id: " .$email. "<br><br>";
 						?>
					<input type="button" id="confirm" onclick="myfunc()" value="Confirm">
				</span><br><br><br>

                </form>  
            </div>
    </section>
    
    </body>
  
