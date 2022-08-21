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


#Msgs
{
    background-color: #7BCCB5;
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

<?php
$conn = mysqli_connect("localhost", "root", "", "BloodBank");


 $sql = "SELECT * FROM `Inbox`";
 $result = mysqli_query($conn, $sql);

 session_start();
 $username = $_SESSION['username'];
 $i = 0;
 while($row = mysqli_fetch_assoc($result))
 {
     if($row['To'] == $username)
     {
         if($i % 2 == 0)
         echo "<h2 id = 'Msgs'>From : ".$row['From']."<br> Msg : ".$row['Message']."<br><br></h2>";
         else
         echo "<h2>From : ".$row['From']."<br> Msg : ".$row['Message']."<br><br></h2>";
         
         $i++;
     }
 }
 
?>


</body>


</html>