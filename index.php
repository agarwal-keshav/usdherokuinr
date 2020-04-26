<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" type="text/css" href="register.css">
      </head>
<body>
    <div id = "keshavkad" class="navigation-bar">
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
                    <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
        <form onsubmit="return validate(this)" method="POST" action="index.php">
                 
                 <input type="text"  name="fname" placeholder="Your Name.." required>
                <input type="email"  name="email" placeholder="Your Email.." required>
                 <input type="password" name="pwd"  placeholder="Enter password.." required >
                 <!--input type="password" name="repwd"  placeholder="Re-enter password.." -->
                 <input type="submit" name="submit">
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
 
     $fname =$_POST['fname'];
     $email =$_POST['email'];
     $pwd=$_POST['pwd'];
     //$rpwd=$_POST['repwd'];
     $sq = "INSERT INTO registertable(FNAME,EMAIL,PASS) VALUES('$fname','$email','$pwd')";
     $sql = "SELECT * FROM registertable WHERE EMAIL='$email' ";
     $upd = $conn->query($sq);
     $upd1 = $conn->query($sql);
     if($upd1->num_rows>0)
     {
      echo'<center><span style="color: white;text-align:center;"><h3>Account already exists. <a style="color:white" href="userlogin.php" > Login</a> <h3></span></center>';
     }
     if ($upd){
   echo "<br/><br/><span>Data Inserted successfully...!!</span>";
  header("Location:available.html");
   }
   else{
     echo' <center><span style="color: white;text-align:center;"></span>';
     //echo"Error: " . $sq . "<br>" . $conn->error;
   }
  }
   mysqli_close($conn);
 ?>
    </body>
        </html>


