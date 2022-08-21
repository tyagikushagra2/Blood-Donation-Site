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

#request
{
    background-color: #ea3c53;
    color: white;
}
</style>

<body>
<div id = "Navs">
<img id = "img1" src = "logo.jpg" width = 100px>
<nav align = "right">
<ul>
<li><a href = "Home.php">Home</a></li>
<li><a href = "#">About</a></li>
<li><a href = "#">Donors</a></li>
<li><a href = "#">Donate</a></li>
<li><a href = "Inbox.php">Inbox</a></li>
<li><a href = "Logout.php">Log Out</a></li>
</ul>
</nav>
</div>
<br><br>
<h1 align = "center">“Blood is a life, pass it on!”</h1><br>
<?php

$conn = mysqli_connect("localhost", "root", "", "BloodBank");

$result = mysqli_query($conn, "SELECT * FROM `Requests`");

session_start();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{
    if($row['To'] == $_SESSION['username'])
    {
        $i = 1;
        echo "<h1 id = 'request'> Request From ".$row['From']."<br><a href = 'Inbox_form.php'>Send Message</a></h1><br>";
    }
}

if($i == 0)
{
    echo "<h2> No Requests</h2>";
}

?>



</body>

</html>
