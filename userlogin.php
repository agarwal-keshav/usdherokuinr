<!DOCTYPE html>
<html>
<head><title>userlogin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="userlogin.css">
        <link rel="stylesheet" type="text/css" href="register.css">
 <!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->

</head>

    <body>

    <div class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpeg">
  
        <ul>
          <li><a href="pagewithnav.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li id = "help"><a href="contactus.html">Contact Us</a></li>
          <li><a href = "help.html">Help</a></li>
          <li><a href="userlogin.php">Login</a></li>
          <li><a href="index.php">Signup</a></li>
          
       </ul>
    </div>
</div>
</div>
        <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
                 <form name="loginuser"action="" method="POST">
                 <input type="email"  name="email" placeholder="Your Email.." required>
                 <input type="password" name="pwd" placeholder="Your password.." required>
                 <input type="submit" value="Submit" name="submit">
                 <p style="color:white;text-align:center">New User?  Please <a style="color:white;" href="index.php">SignUp</a></p>
                </form>
        </div>
        

<?php
$servername = "ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "s44lc2ogaus73p5t";
$password = "qw96rj8jjclp89p6";
$dbname = "jjeg2e3r4t8fydlj";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$pwd = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

//ek tarah se aisa likhna hai jaise ki 
$sq = "SELECT * FROM registertable WHERE EMAIL='$email' and PASS='$pwd'";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
    echo'<center><span style="color: #e95959;text-align:center;"><h2>login successful welcome.$row["FNAME"].<h2></span></center>';
    header("Location:available.html");
  }
else
   { echo'<center><span style="color: white;font-family: "Times New Roman", Times, serif; text-align:center;"><h5>Sorry, your credentials are not valid, Please try again<h5></span></center>';
    
     //echo'<center><span style="color: white;font-family: "Times New Roman", Times, serif;text-align:center;"><h5>New User?<h5></span></center>';
   }
   }
?>

</div>
  </body>
</html>
              
