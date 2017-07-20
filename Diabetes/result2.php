<!DOCTYPE html>
<html>
<head>
<style>
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

<body>

<ul class="topnav" id="myTopnav">

<li><a><?php session_start();$name=$_SESSION['username'];
echo  "Welcome: ".$name."<br>";?></a></li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="active" href="ask.php">Home</a></li>
  <li><a href="instructions.php">Instructions</a></li>
  <li><a href="medications.php">Medications</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="user2.php">Logout</a></li>
  
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<div style="padding-left:16px">
  <!--<h2>Update su</h2>-->

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
<?php

$con = mysqli_connect("localhost","root", "", "diabetes");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
$name=$_SESSION['username'];
    $sql = "SELECT name,gender,thirsty,urination,hunger,loss,weight,fluctuation,vision,fatigue,drinking,infection FROM details2 WHERE name='".$name."'";
$result = $con->query($sql);

            if ($result->num_rows > 0)
               {
               while($row = $result->fetch_assoc())
                 {  
$b1=$row['gender'];
if($b1=="fe")
{
	$b1=0;
//echo $b1;
}
else
{
	$b1=1;
//echo $b1;
}
$b2=$row['thirsty'];
if($b2=="no")
{
	$b2=0;
//echo $b2;
}
else
{
	$b2=1;
	//echo $b2;
}
$b3=$row['urination'];
if($b3=="no")
{
	$b3=0;
//echo $b3;
}
else
	{
		$b3=1;
	//echo $b3;
	}
$b4=$row['hunger'];
if($b4=="no")
{
	$b4=0;
//echo $b4;
}
else
{	
	$b4=1;
	//echo $b4;
}
$b5=$row['loss'];
if($b5=="no")
{
	$b5=0;
//echo $b5;
}
else
{
	$b5=1;
	//echo $b5;
}
$b6=$row['weight'];
if($b6=="no")
{
	$b6=0;
//echo $b6;
}
else
{
	$b6=1;
	//echo $b6;
}
$b7=$row['fluctuation'];
if($b7=="no")
{
	$b7=0;
//echo $b7;
}
else
{
	$b7=1;
	//echo $b7;
}
$b8=$row['vision'];
if($b8=="no")
{
	$b8=0;
//echo $b8;
}
else
{
	$b8=1;
	//echo $b8;
}
$b9=$row['fatigue'];
if($b9=="no")
{
	$b9=0;
//echo $b9;
}
else
{
	$b9=1;
	//echo $b9;
}
$b10=$row['drinking'];
if($b10=="no")
{
	$b10=0;
//echo $b10;
}
else
{
	$b10=1;
	//echo $b10;
}
$b11=$row['infection'];
if($b11=="no")
{
	$b11=0;
//echo "$b11<br>";
}
else
{
	$b11=1;
	//echo "$b11<br>";
}
//echo $b1+$b2+$b4;
$set1=$b2+$b3+$b4+$b5+$b8;
$set2=$b2+$b3+$b4+$b7+$b8;
$set3=$b2+$b3+$b4+$b6+$b7;
$set4=$b6+$b8+$b9+$b10+$b11;
/*echo"set1<br>";
echo "$set1<br>";
echo "$set2<br>";
echo "$set3<br>";
echo "$set4<br>";*/
$probability_factor=0.50;

$per_type1=$set1/$probability_factor*10;
$per_type2=$set2/$probability_factor*10;
$per_predi=$set3/$probability_factor*10;
$per_gesta=$set4/$probability_factor*10;
/*echo"set2<br>";
echo "$per_type1<br>";
echo "$per_type2<br>";
echo "$per_predi<br>";
echo "$per_gesta<br>";*/
if(($per_type1>0)&& ($per_type1>=$per_type2)&&($per_type1>=$per_predi)&&($per_type1>=$per_gesta))
{
	echo"<h3>You are having a chance of having $per_type1 % of Type 1 Diabetes</h3>";
	
}
else if(($per_type2>0)&&($per_type2>=$per_predi)&&($per_type2>=$per_gesta))
{
	echo"<h3>You are having a chance of having $per_type2 % of Type 2 Diabetes</h3>";
	
}
else if(($per_predi>0) && ($per_predi>=$per_gesta))
{
	echo"<h3>You are having a chance of having $per_predi % of Pre Diabetes</h3>";
	
}
else if(($b1==0)&&($per_gesta>0))
{
	echo"<h3>You are having a chance of having $per_gesta % of Gestational Diabetes</h3>";
	
}
else
{
	echo"<h3>Not having a chance of Diabetes</h3>";
}	
	}
			   }
            ?>
             
           

</body>
</html>
