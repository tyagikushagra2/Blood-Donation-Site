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

h3
{
    font-style: bold;
}


#Submit
{
    font-size: 40px;
}

#div2
{
  float: left;
  width: 300px;
  height: 400px;
  border: 5px red solid;
  padding: 10px;
  background-color: #D3D3D3;

}

#login
{
  float: left;
  width: 500px;
  height: 400px;
  border: 5px red solid;
  font-size: 25px;
  margin-left: 50px;
}

#div3
{
  float: left;
  width: 400px;
  height: 400px;
  border: 5px red solid;
  padding: 10px;
  margin-left: 60px;
  background-color: #D3D3D3;
}

.textarea
{
  border: 2px black solid;
  font-size: 20px;
}

#Submit
{
   font-size: 20px;
   border: 2px black solid;
}

#Intro
{
  font-size: 25px;
}

#Tips
{
   font-size: 25px;
   background-color: #D3D3D3;
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
</ul>
</nav>
</div>

<div id = "Head">
<img id = "img2" src = "pic10.jpg" width = 1380px height = 700px alt = "Photo">   
</div>
<br>


<div id = "div2">
<h2 align = "center">"Excuses never save a life, Blood donation does."</h2>
<br>
<p id = "Intro"> Welcome to our site where this community of people like us are helping the needy ones by donating blood.
    Be a part of our community a be a real life hero by saving someones life. </p>
     
</div>
  
  <form id = "login" align = "center" action = "LoggedIn.php" method = "POST">
  <h2 align = "center">LOGIN</h2>
  <div class="row">
      <div class="col-25">
        <label for="username">Username</label>
      </div>
      <div class="col-75">
      <input type = "text" name = "username" class = "textarea">
      </div>
    </div>  
    <br>

    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
      <input type = "password" name = "pass" id = "pass" class = "textarea">
      </div>
    </div> 
    <br>
   <input type = "submit" name = "Submit" id = "Submit" value = "Submit">
   <p> Don't have and account ?? <a href = "CreateAcc.php">Create Account </a>
   </form>

<div id = "div3">
 <h2 align = "center">Blood Donation Tips</h2>
 <ul id = "Tips">
 <li>Donation frequency should be Every 56 days from Donation.</li>
 <li>You must be in good health condition.</li>
 <li>You must be at least 16 years above to donate.</li>
 <li>You must weigh at least 50 KG. </li>
</ul>

</div>

</body>


</html>