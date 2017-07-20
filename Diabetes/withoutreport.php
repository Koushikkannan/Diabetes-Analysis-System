<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #333;
}

.button5:hover {
    background-color: #555;
    color: white;
}
.set{
	width:30%;
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
$tErr= $uErr=$hErr=$lErr=$wErr=$fErr=$vErr=$faErr=$dErr=$iErr=$gErr="";
if(isset($_POST['submit']))
 {
 $thirsty = $urination=$hunger = $loss = $weight =$fluctuation=$vision=$fatigue=$drinking=$infection=$gender="";
$fthirsty = 0;
$furination=0;
$fhunger = 0;
$floss = 0;
$fweight =0;
$ffluctuation=0;
$fvision=0;
$ffatigue=0;
$fdrinking=0;
$finfection=0;
$fgender=0;
 function test_input($data)
 {    
 $data = trim($data);  
 $data = stripslashes($data);   
 $data = htmlspecialchars($data);
 return $data;
 }
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  

 if (empty($_POST["gender"]))
   {     
   $gErr = "Required"; 
   }
   else
   {   
   $gender = test_input($_POST["gender"]);  
   $fgender=1;
   }
 if (empty($_POST["thirsty"]))
   {     
   $tErr = " Required"; 
   }
   else
   {   
   $thirsty = test_input($_POST["thirsty"]);  
   $fthirsty=1;
   }
   
    if (empty($_POST["urination"]))
   {     
   $uErr = "Required"; 
   }
   else
   {   
   $urination = test_input($_POST["urination"]);  
   $furination=1;
   }
   
   
    if (empty($_POST["hunger"]))
   {     
   $hErr = "Required"; 
   }
   else
   {   
   $hunger = test_input($_POST["hunger"]);  
   $fhunger=1;
   }
    if (empty($_POST["loss"]))
   {     
   $lErr = "Required"; 
   }
   else
   {   
   $loss = test_input($_POST["loss"]);  
   $floss=1;
   }
    if (empty($_POST["weight"]))
   {     
   $wErr = "Required"; 
   }
   else
   {   
   $weight = test_input($_POST["weight"]);  
   $fweight=1;
   }
    if (empty($_POST["fluctuation"]))
   {     
   $fErr = "Required"; 
   }
   else
   {   
   $fluctuation = test_input($_POST["fluctuation"]);  
   $ffluctuation=1;
   }
    if (empty($_POST["vision"]))
   {     
   $vErr = "Required"; 
   }
   else
   {   
   $vision = test_input($_POST["vision"]);  
   $fvision=1;
   }
    if (empty($_POST["fatigue"]))
   {     
   $faErr = "Required"; 
   }
   else
   {   
   $fatigue = test_input($_POST["fatigue"]);  
   $ffatigue=1;
   }
   
   if (empty($_POST["drinking"]))
   {     
   $dErr = "Required"; 
   }
   else
   {   
   $drinking = test_input($_POST["drinking"]);  
   $fdrinking=1;
   }
    if (empty($_POST["infection"]))
   {     
   $iErr = "Required"; 
   }
   else
   {   
   $infection = test_input($_POST["infection"]);  
   $finfection=1;
   }
   
   
   } 

$_SESSION['gender'] = $gender;   
$_SESSION['thirsty']=$thirsty;
$_SESSION['urination'] = $urination;
$_SESSION['hunger']=$hunger;
$_SESSION['loss'] = $loss;
$_SESSION['weight'] = $weight;
$_SESSION['fluctuation'] = $fluctuation;
$_SESSION['vision'] = $vision;
$_SESSION['fatigue'] = $fatigue;
$_SESSION['drinking'] = $drinking;
$_SESSION['infection'] = $infection;


 if($fthirsty==1&&$furination==1&&$fhunger==1&&$floss==1&&$fweight==1&&$ffluctuation==1&&$fvision==1&&$ffatigue==1&&$fdrinking==1&&$finfection==1&&$fgender==1)
{
	//header('location:/Diabetes/form3.php');
	$con = mysqli_connect("localhost","root", "", "diabetes");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $name1=$_SESSION['username'];
  $b1=$_SESSION['gender'];
  $b2=$_SESSION['thirsty'];
  $b3=$_SESSION['urination'];
  $b4=$_SESSION['hunger'];
  $b5=$_SESSION['loss'];
  $b6=$_SESSION['weight'];
  $b7=$_SESSION['fluctuation'];
  $b8=$_SESSION['vision'];
  $b9=$_SESSION['fatigue'];
  $b10=$_SESSION['drinking'];
  $b11=$_SESSION['infection'];
  
  $sql="INSERT INTO details2 VALUES ('$name1','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$b11')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	  // echo "<h2>Updated Successfully</h2>";
	header('location:/Diabetes/result2.php');
	   			}
else 
{
	// echo "Update Failed";
	header('location:/Diabetes/failed.php');
			
			
}
}
}
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
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">?</a>
  </li>
</ul>

<!--<div style="padding-left:16px">-->
  <!--<h2>Responsive Topnav Example</h2>-->
 <!-- <p>Resize the browser window to see how it works.</p>-->
<!--</div>-->
<center>
<fieldset class="set"><legend class="title"><h2>Preliminary Questions</h2></legend> 
<h3><span class="error"></span></h3> 
 <form method="post" action="">
<table border="0" align="center" >
<tr>
<td>1)Gender:   </td> 
<td><input type="radio" name="gender" value="male">Male</td>
  <td> <input type="radio" name="gender" value="fe">Female</td>
  <td> <span class="error"> <?php echo $gErr;?></span> </td>
   </tr>
   <tr>
<td>2)Feeling Thirsty:</td>   
<td> <input type="radio" name="thirsty" value="yes">Yes </td>
  <td> <input type="radio" name="thirsty" value="no">No</td>
  <td> <span class="error"> <?php echo $tErr;?></span> </td>
   </tr>
   <tr>
  <td> 3)Frequent Urination: </td>  
<td>  <input type="radio" name="urination" value="yes">Yes </td>
  <td> <input type="radio" name="urination" value="no">No</td>
  <td> <span class="error"> <?php echo $uErr;?></span> </td>
   </tr>
   <tr>
   <td> 4)Exces Hunger:</td>
<td>   <input type="radio" name="hunger" value="yes">Yes </td>
  <td> <input type="radio" name="hunger" value="no">No</td>
  <td> <span class="error"> <?php echo $hErr;?></span> </td>
   </tr>
   <tr>
    <td>5)Weight Loss:  </td> 
<td>	<input type="radio" name="loss" value="yes">Yes </td>
   <td><input type="radio" name="loss" value="no">No</td>
  <td> <span class="error"> <?php echo $lErr;?></span> </td>
   </tr>
   <tr>
    <td>6)Over Weight:</td>
<td>    <input type="radio" name="weight" value="yes">Yes </td>
  <td> <input type="radio" name="weight" value="no">No</td>
 <td>  <span class="error"> <?php echo $wErr;?></span></td> 
   </tr>
   <tr>
 <td>7)Weight Fluctuation:</td>
<td> <input type="radio" name="fluctuation" value="yes">Yes </td>
  <td> <input type="radio" name="fluctuation" value="no">No</td>
 <td>  <span class="error"> <?php echo $fErr;?></span> </td>
 </tr>
   <tr>
   <td>(The repeated loss and regain of body weight)</td>
   </tr>
<tr>   
   <td>8)Blurred Vision:</td>
<td>   <input type="radio" name="vision" value="yes">Yes </td>
   <td><input type="radio" name="vision" value="no">No</td>
 <td>  <span class="error"> <?php echo $vErr;?></span> </td>
   </tr>
   <tr>
   <td> 9)Increased Fatigue:</td>
<td>   <input type="radio" name="fatigue" value="yes">Yes </td>
  <td> <input type="radio" name="fatigue" value="no">No</td>
  <td> <span class="error"> <?php echo $faErr;?></span> </td>
    </tr>
	 <tr>
   <td>(physical and/or mental state of being tired and weak)</td>
   </tr>
   <tr>
   <td> 10)Smoking or Drinking:  </td>
<td>   <input type="radio" name="drinking" value="yes">Yes </td>
  <td> <input type="radio" name="drinking" value="no">No</td>
  <td> <span class="error"> <?php echo $dErr;?></span> </td>
   </tr>
   <tr>
    <td>11)Roll back frequent infection:  </td>
<td>	<input type="radio" name="infection" value="yes">Yes </td>
   <td><input type="radio" name="infection" value="no">No</td>
  <td> <span class="error"> <?php echo $iErr;?></span> </td>
   </tr>
<tr>    
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button button5" name="submit" value="Submit"></td>
	</tr>
   </table>
</form>
</fieldset>
</center>
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
