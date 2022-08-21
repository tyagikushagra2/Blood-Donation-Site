<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$found = 0;

$conn = mysqli_connect("localhost", "root", "", "BloodBank");

if(!$conn)
{
    die("Connection Error !!!");
}

$sql = "SELECT `Username`, `Password` FROM `Details`";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
    if($row['Username'] == $username && $row['Password'] == $pass)
    {
       $found = 1;
       break;
    }
}

if($found != 1)
{
  die("No record found");
}


session_start();
$_SESSION['username'] = $username;


mysqli_close($conn);

?>

<html>
   
<style>
body
{
    background-image: url("bg.jpg");
    background-size: cover;
}
#img1
{
    border: 2px red solid;
    float: left;
    height: 77px;
}

nav li
{
    display: inline-block;
    font-size: 30px;
    margin: 10px;
    text-decoration: none;
    text-transform: uppercase;
    background: red;
    color: white;
}

nav a
{
  color: white;
  text-decoration: none;
}

#Navs
{
  background-color: #D3D3D3;
  height: 80px;
}

#notifics
{
  padding: 5px;
  margin-top: 100px;
  margin-left: 800px;
  
}

#Links li a
{
  color: black;
  font-size: 30px;
}

#Links li a:hover
{
  color: red;
  font-size: 30px;
}

#family
{
  height: 400px;
  width: 800px;
  margin-top: 20px;
  margin-left: 280px;
}

</style>

  <body>
  <div id = "Navs">
<img id = "img1" src = "logo.jpg" width = 100px>
<nav align = "right">
<ul>
<li><a href = "Home.php">Home</a></li>
<li><a href = "#">About</a></li>
<li><a href = "Donors.php">Donors</a></li>
<li><a href = "Donate.php">Donate</a></li>
<li><a href = "Inbox.php">Inbox</a></li>
<li><a href = "Logout.php">Log Out</a></li>
</ul>
</nav>
</div>


<div id = "notifics">
<h2 align = "center">"Blood can circulate forever if you keep donating it."</h2>
 <ul id = "Links">
 <li><a href = "Inbox.php">Check your Inbox</a> <br></li>
 <li><a href = "Check_Request.php">Check Requests</a><br></li>
 <li><a href = "Request.php">Make a Request</a></li>
</div>



</body>
  

</html>
