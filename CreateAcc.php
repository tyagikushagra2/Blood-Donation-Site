<?php
    

    $username = $_POST["Username"];
    $pass = $_POST["Pass"];
    $confpass = $_POST["ConfPass"];
    $email = $_POST["Email"];
    $add = $_POST["Address"];
    $city = $_POST["City"];
    $state = $_POST["State"];
    $mob = $_POST["mobno"];
    $grp = $_POST["Grp"];
    
    $conn = mysqli_connect("localhost", "root", "", "BloodBank");

if(isset($_POST['Submit']))
{

$result = mysqli_query($conn, "SELECT * FROM `Details`");
$i = 0;

while($row = mysqli_fetch_assoc($result))
{
    if($row['Username'] == $username)
    {
       $i = 1;
       break;
    }
}

if($i == 0)
{
$sql = "INSERT INTO `Details` VALUES ('$username','$pass','$email','$add','$city','$state','$mob','$grp')";
mysqli_query($conn, $sql);
echo "<script lang = 'javascript'>alert('Account Created');</script>";
}

else
{
    echo "<script lang = 'javascript'>alert('Username exists');</script>";
}
}

?>


<html>

<script lang = "javascript">


function validate()
{
    var name = document.getElementById('Username').value;
    var pass = document.getElementById('Pass').value;
    var conf = document.getElementById('ConfPass').value;
    var email = document.getElementById('Email').value;
    var add = document.getElementById('Address').value;
    var city = document.getElementById('City').value;
    var state = document.getElementById('State').value;
    var mobno = document.getElementById('mobno').value;
    var grp = document.getElementById('Grp').value;

    function validate()
    {
        if(name.length == 0)
        {
            alert("Enter Name");
            return false;
        }
   
        if(pass.length == 0)
        {
            alert("Enter pass");
            return false;
        }

        if(conf.length == 0)
        {
            alert("Confirm pass does not match");
            return false;
        }

        if(email.length == 0)
        {
            alert("Enter email");
            return false;
        }

        if(add.length == 0)
        {
            alert("Enter address");
            return false;
        }

        if(city.length == 0)
        {
            alert("Enter city");
            return false;
        }

        if(state.length == 0)
        {
            alert("Enter state");
            return false;
        }

        if(mobno.length == 0)
        {
            alert("Enter mobile no.");
            return false;
        }

        if(conf != pass)
        {
            alert("Confirm pass does not match");
            return false;
        }

        return true;

    }
}


</script>

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



.textarea
{
    font-size: 20px;
    border: 2px black solid;
}

#submit
{
    font-size: 30px;
    border: 2px black solid;
}

#Navs
{
  background-color: #D3D3D3;
  height: 80px;
}


#signUp
{
  
   margin-top: 30px;
   margin-left: 825px;
   font-style: bold;
   font-size: 25px;
   background-color: white;
   padding: 10px;
   float: left;
   border: 5px black solid;
}

#pic3
{
    float:left;
    margin-top: 100px;
    margin-right: 10px;
    width: 520px;
    height: 700px;
    border: 2px black solid;
}

#pic5
{
    float:left;
    margin-top: 100px;
    margin-left: 10px;
    width: 560px;
    height: 700px;
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
<li><a href = "#">Donors</a></li>
<li><a href = "#">Donate</a></li>
</ul>
</nav>
</div>
<br><br>

<form id = "signUp" action = "" method = "POST" onsubmit = "return validate()">
    <h2> SIGN UP </h2>
    Enter Username :  <br>  <input type = "text" name = "Username" class = "textarea"><br>
    Create Password :  <br> <input type = "password" name = "Pass" class = "textarea"><br>
    Confirm Password : <br> <input type = "password" name = "ConfPass" class = "textarea"><br>
    Email :       <br>      <input type = "text" name = "Email" class = "textarea"><br>
    Address :      <br>     <input type = "text" name = "Address" class = "textarea"><br>
    City :          <br>    <input type = "text" name = "City" class = "textarea"><br>
    State :          <br>   <input type = "text" name = "State" class = "textarea"><br>
    Mobile no. :     <br>   <input type = "text" name = "mobno" class = "textarea"><br>
    Blood Grp :      <br>   <input type = "text" name = "Grp" class = "textarea"><br><br>
    <input type = "submit" value = "SUBMIT" name = "Submit" id = "submit">
</form>


</body>


</html>

