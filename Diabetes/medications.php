<!DOCTYPE html>
<html>
<head>
<style>
.btn{
width:260px;
height:50px;
margin-left:120px
}
.btn1{
width:260px;
height:85px;
margin-left:42px
}
.button1{
width:250px;
height:45px;
border:none;
outline:none;
box-shadow:0 3px 2px 0 #333;
color:#fff;
font-size:14px;
text-shadow:0 1px rgba(0,0,0,0.4);
background-color:#333;
font-weight:700;
background-image:url(../images/1.png);
background-repeat:no-repeat;
background-position:200px
}
.button1:hover{
background-color:#555;
cursor:pointer
}
.button1:active{
padding-top:2px;
box-shadow:none
}
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>
</head>
<?php
session_start();
?>
<body>

<ul class="topnav" id="myTopnav">

<li><a><?php $name=$_SESSION['username'];
echo  "Welcome: ".$name."<br>";?></a></li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="active" href="ask.php">Home</a></li>
  <li><a href="instructions.php">Instructions</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="user2.php">Logout</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<div style="padding-left:150px">
<h2>Medications:-</h2>
<h4>Regular exercise helps</h4>


<ul>
 <li>Exercise helps improve blood circulation in the system, particularly in the arms and legs, where diabetic patients mostly complain of problems.</li>

<li>It is an excellent way to fight stress, both at the body and mind level, which in turn helps keep glucose levels down.</li>

<li>Regular exercise patterns can be extremely beneficial to older patients with diabetes.In their case, the condition is partly due to lack of physical activity.<br> A few minutes of brisk walking and joint movements, coupled with some gentle yoga postures , Triangle Pose, Standing Spinal Twist, and Butterfly Pose<br> and followed by relaxation in yoga nidra can help.</li>


</ul>
<h4>Eating right matters</h4>

The type of food you eat and how much can be greatly responsible for diabetes and other lifestyle diseases. It is therefore important to:
<ul>
 <li>Eat at least three meals a day, along with one or two snacks evenly spaced out throughout the day.</li>

<li>As far as possible, have each meal/snack at about the same time every day.</li>

<li>Avoid skipping your meals.</li>

<li>Keep about the same amount of carbohydrate intake in each meal every day.</li>
</ul>
<h4>Bhara Bhindi (Stuffed Okra) for Diabetics</h4>
<ul>
   <li> Bhindi (Okra) - 250 gms, slit</li>
   <li> Coconut- 1 1/2 tbsp</li>
   <li> Pumpkin - 2 tbsp</li>
   <li> Fresh coriander - 1 tbsp</li>
   <li> Coriander powder - 1/2 tsp</li>
   <li> Black pepper powder - 1/4tsp</li>
   <li> Turmeric - 1/2 tsp</li>
   <li> Rock salt - as per taste</li>
   <li> Anaradana (dry pomegranate seeds) or fresh grated Amla(Indian gooseberry) - 1/2 tsp</li>
   <li> Garam masala - 1/4 tsp</li>
   <li> Slit the Bhindi horizontally</li>
   <li> Mix coconut and all spices to make the stuffing</li>
   <li> Stuff the Bhindi and steam it for eight minutes</li>
   <li> Serve hot</li>
</ul>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
