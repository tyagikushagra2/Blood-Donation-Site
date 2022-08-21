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

#donorForm
{
  background-color: #ff355e;
  padding: 5px;
  font-size: 25px;
  font-weight: bold;
  padding: 5px;
}

.textarea
{
  font-size: 20px;
  border: 2px black solid;

}

#Tips
{
  float:left;
  width: 600px;
  height: 350px;
  font-size: 20px;
  background-color: #E5E4E2;
  padding: 10px;
}

#pic5
{
  float:left;
  width: 620px;
  margin-left: 150px;
}


</style>

   <script lang = "javascript">

     function validate()
     {
      var age = document.getElementById('age').value;
      var wt = document.getElementById('weight').value;
      var name = document.getElementById('name').value;
      var add = document.getElementById('add').value; 
          
          if(age.length == 0)
          {
            alert("ENTER AGE");
            return false;
          }

          else if(name.length == 0)
          {
            alert("ENTER NAME");
            return false;
          }

          else if(wt.length == 0)
          {
            alert("ENTER WEIGHT");
            return false;
          }

          else if(add.length == 0)
          {
            alert("ENTER ADDRESS");
            return false;
          }


          if(parseInt(age) < 16)
          {
            alert("Not aligible to donate as age is less than 16");
            return false;
          }

          else if(parseInt(wt) < 50)
          {
            alert("Weight is less than 50. Not eligible");
            return false;
          }

          return true;

     }
     

     </script>


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

<h1 align = "center">FILL THE FORM TO DONATE</h1>
<h2 align = "center">Please read blood donation tips carefully</h2><br><br>

<form action = "" method = "POST" id = "donorForm" align = "center" onsubmit = "return validate()">
Name: <input type = "text" name = "name" id = "name" class = "textarea" ><br><br>
Address: <input type = "text" name = "add"  id = "add" class = "textarea"><br><br>

City: <select name = "city" id = "city" class = "textarea">
      <option value = "Ghaziabad">Ghaziabad</option>
      <option value = "Noida">Noida</option>
      <option value = "Meerut">Meerut</option>
      <option value = "Kanpur">Kanpur</option>
</select><br><br>
State: <select name = "state" id = "state" class = "textarea">
      <option value = "Uttar Pradesh">Uttar Pradesh</option>
      <option value = "Uttrakhand">Uttrakhand</option>
      <option value = "Delhi">Delhi</option>
      <option value = "Haryana">Haryana</option>
</select><br><br>

Weight(Kg): <input type = "text" name = "weight" id = "weight" class = "textarea"><br><br> 
Age(yrs): <input type = "text" name = "age" id = "age" class = "textarea"><br><br> 

Blood Group: <select name = "Grp" id = "Grp" class = "textarea">
      <option value = "A+">A+</option>
      <option value = "B+">B+</option>
      <option value = "B-">B-</option>
      <option value = "O+">O+</option>
</select><br><br>

<input type = "submit" name = "Hospitals" class = "textarea"><br><br>
</form>
<div id = "Tips">

<h2>Blood Donation Tips</h2>
<ul>
<li>Donation frequency should be Every 56 days from Donation.</li><br>
<li>You must be in good health condition.</li><br>
<li>You must be at least 16 years above to donate</li><br>
<li>You must weigh at least 50 KG</li><br>

</div>

<img src = "pic5.jpg" id = "pic5">
<br><br>
</body>
</html>


<?php

$state = $_POST['state'];
$name = $_POST['name'];
$add = $_POST['add'];
$city = $_POST['city'];
$grp = $_POST['Grp'];

if(isset($_POST['Hospitals']))
{
$conn = mysqli_connect("localhost", "root", "", "BloodBank");
$result = mysqli_query($conn, "SELECT * FROM `Donors`");

$donorno = mysqli_num_rows($result) + 1;
mysqli_query($conn, "INSERT INTO `Donors` VALUES ('$donorno','$name', '$add', '$city', '$state', '$grp')");
echo "<script lang = 'javascript'>alert('Details saved. Our doctor will come to your home for necessary checkups'); </script>";
}

?>