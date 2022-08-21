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

#GrpSelect
{
    margin-top: 100px;
   margin-left: 690px;
    font-size: 30px;
    background-color: #D3D3D3;
    padding: 5px;
}

.textarea
{
    font-size: 25px;
}

#sub
{
    font-size: 30px;
    background-color: grey;
}


#names
{
    background-color: white;
    font-size: 30px;
}


a:hover
{
   font-size: 20px;
}

#msg:hover
{
    color: red;
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

<h1 align = "center">

<form action = "" method = "POST" id = "GrpSelect" align = "center">
Blood Group: <select name = "Grp" class = "textarea">
      <option value = "A+">A+</option>
      <option value = "B+">B+</option>
      <option value = "B-">B-</option>
      <option value = "O+">O+</option>
</select><br>
City: <select name = "city" class = "textarea">
      <option value = "Ghaziabad">Ghaziabad</option>
      <option value = "Noida">Noida</option>
      <option value = "Meerut">Meerut</option>
      <option value = "Kanpur">Kanpur</option>
</select><br><br>
State: <select name = "state" class = "textarea">
      <option value = "Uttar Pradesh">Uttar Pradesh</option>
      <option value = "Uttrakhand">Uttrakhand</option>
      <option value = "Delhi">Delhi</option>
      <option value = "Haryana">Haryana</option>
</select><br><br>
<input type = "submit" name = "submit" id = "sub">
</form>
</body>

</html>

<?php

$grp = $_POST['Grp'];
$state = $_POST['state'];
$city = $_POST['city'];

$conn = mysqli_connect("localhost", "root", "", "BloodBank");

if(isset($_POST['submit']))
{
$result = mysqli_query($conn, "SELECT * FROM `Donors`");

while($row = mysqli_fetch_assoc($result))
{
    if($row['BloodGrp'] == $grp && $row['City'] == $city && $row['State'] == $state)
    {
        echo "<div style = 'background-color: white; border: 5px black solid'><u><h2 id = 'names'>Name: ".$row['Name']."<br> Address: ".$row['City']."<br> State:".$row['State']."</h2></u></div>";
             
    }
}

echo "<a href = 'Inbox_form.php' id = 'msg' style = 'font-size: 30px;'><h2>Click Here to Send message to Desired Username</h2></a>";

}

?>