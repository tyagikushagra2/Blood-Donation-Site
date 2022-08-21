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

#send
{
  margin-left: 700px;
  font-size: 30px;
  margin-top: 100px;
  background-color: #D3D3D3;
}

.textarea
{
  font-size: 25px;
  border: 2px black solid;
}

#Navs
{
  background-color: #D3D3D3;
  height: 80px;
  padding: 5px;
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

<form id = "Send" action = "Inbox_Send.php" method = "POST">
<h1 align = "center" style = "color: grey;"><u>SEND MESSAGE TO DESIRED USERNAME</u></h1>
To : <br><input type = "text" name = "to" class = "textarea"><br><br>
Message : <br><textarea name="msg" rows="4" cols="40" class = "textarea"></textarea><br><br>
<input type = "submit" value = "SUBMIT" style = "font-size: 30px; border:  2px black solid;">
</form>




</body>
</html>
