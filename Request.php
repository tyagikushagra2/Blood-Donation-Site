<?php

 
 $name = $_POST['name'];

 $conn = mysqli_connect("localhost", "root", "", "BloodBank");

 $i = 0;




 if(isset($_POST['send']))
 {

    $result = mysqli_query($conn, "SELECT * FROM `Deltails`");

    while($row = mysqli_fetch_assoc($result))
    {
        if($row['Username'] == $name)
        {
            $i = 1;
            break;
        }
    } 

    if($i == 1)
    {
     session_start();
     $user = $_SESSION['username'];
     mysqli_query($conn, "INSERT INTO `Requests` VALUES ('$name','$user','No')"); 
     echo "<script lang = 'javascript'>alert('Request Sent');</script>";
    }
 }
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

#request
{
    margin-left: 700px;
    font-size: 30px;
    padding: 5px;
    background-color: #D3D3D3;
}

#name
{
    font-size: 18px;
    border: 2px black solid;
}

#send
{
    font-size: 35px;
    border: 2px black solid;
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
<br><br>

<form action = "" method = "POST" id = "request" align = "center">
<h1 align = "center" style = "font-size: 20px;"><b> "It feels good, It makes me Proud, I am a blood donor.”</b></h1><br>
Enter Username to Request: <input type = "text" name = "name" id = "name"><br><br>
<input type = "submit" name = "send" value = "Send" id = "send">
<h1 style = "font-size: 20px;"> Wanna talk to this donor ?? <a href = "Inbox_form.php"> Click Here to send Message </a></h1>
</form>



</body>

</html>