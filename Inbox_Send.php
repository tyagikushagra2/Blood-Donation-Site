<html>

<style>

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
  <br>

<?php
 
  $To = $_POST['to'];
  $msg = $_POST['msg'];

  $conn = mysqli_connect("localhost", "root", "", "BloodBank");
  session_start();
  $from = $_SESSION['username'];

  $sql = "INSERT INTO `Inbox` VALUES ('$msg', '$from', '$To')";
  $result = mysqli_query($conn, $sql);

if(!$conn)
{
    echo "Error in connection";
}

if(!$_SESSION['username'])
{
    echo "Session is null";
}

if(!$result)
{
    echo "Error in query";
}
 
echo "<h2>Message Sent to ".$To.",</h2>";

?>
<br>
<ul style = "background-color:  #7393B3; font-size: 30px;">

<li><a href = "Inbox_Rec.php">Received Messages</a></li><br>
<li><a href = "Inbox_form.php">Send Message</a></li>

</body>

    </html>