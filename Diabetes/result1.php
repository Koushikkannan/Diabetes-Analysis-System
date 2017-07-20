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
$hba1c=$_SESSION['hb'];
$rpg=$_SESSION['rp'];
$fpg=$_SESSION['fp'];
function Fuzzy($HbA1c,$RPG,$FPG)
{
	$x=$HbA1c;
	$set_no_Hba1c=(($x-4.55)/1.95);
	$set_yes_Hba1c=((6.5-$x)/1.95);
	$sumval1=$set_no_Hba1c+$set_yes_Hba1c;
	if(($sumval1>$set_no_Hba1c)&&($sumval1>$set_yes_Hba1c))
	{
		$sum1=0;
	}
	else
	{
		$sum1=1;
	}
	$y=$RPG;
	$set_no_Rpg=(($y-140)/60);
	$set_yes_Rpg=((200-$y)/60);
	$sumval2=$set_no_Rpg+$set_yes_Rpg;
	if(($sumval2>$set_no_Rpg)&&($sumval2>$set_yes_Rpg))
	{
		$sum2=0;
	}
	else
	{
		$sum2=1;
	}
	$z=$FPG;
	$set_no_Fpg=(($z-70)/30);
	$set_yes_Fpg=((100-$z)/30);
	$sumval3=$set_no_Fpg+$set_yes_Fpg;
	if(($sumval3>$set_no_Fpg)&&($sumval3>$set_yes_Fpg))
	{
		$sum3=0;
	}
	else
	{
		$sum3=1;
	}
	//echo $sum1;
	//echo $sum2;
	//echo $sum3;
	$result=$sum1+$sum2+$sum3;
	//$count=count($result);
	//$result=$result/$count;
	if($result<=1)
	{
		//echo $result;
		//echo "<h2>Not having a chance of Diabetes</h2>";
		header('location:/Diabetes/resultncon.php');
	}
	else
	{
		//echo $result;
		//echo "<h2>Diabetes confirmed</h2>";
		header('location:/Diabetes/resultcon.php');
	}
	
}
Fuzzy($hba1c,$rpg,$fpg);
?>
</body>
</html>
