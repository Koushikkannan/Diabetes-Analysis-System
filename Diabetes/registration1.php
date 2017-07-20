


<!DOCTYPE HTML> 
 <html>
 <head> 
 <style>
 .button5 {
    background-color: white;
    color: black;
    border: 2px solid #333;
}

.button5:hover {
    background-color: #555;
    color: white;
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
.set{
	width:30%;
	
}
 #set{
	  position: absolute;
    right: 600px;

 }
 .title{
	 color:#8E0A8E;
 }
 
 .fset{
	
	 width: 30%;
	 background-color: lightblue;
 }
 .error {color: #FF0000;}
 </style>
 </head> 
 <?php 
 session_start();
$nameErr = $phoneErr =$emailErr = $genderErr  =$unameErr=$passErr= "";
if(isset($_POST['submit']))
 {
 $name = $phone=$email = $gender = $comment =$ph=$contact=$uname=$pwd="";
 $fname=0;
 $fphone=0;
 $femail=0;
 $fgender=0;
 $funame=0;
 $fpwd=0;
 function test_input($data)
 {    
 $data = trim($data);  
 $data = stripslashes($data);   
 $data = htmlspecialchars($data);
 return $data;
 }
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  
if (empty($_POST["name"]))
 {  
$nameErr = "Name is required";   
 } else
 {      
$name = test_input($_POST["name"]);  
		  $fname=1;
 }   
 if (empty($_POST["uname"]))
 {  
$unameErr = "Username is required";   
 } else
 {      
$uname = test_input($_POST["uname"]);  
		  $funame=1;
	  
 }  
 if (empty($_POST["pwd"]))
 {  
$passErr = "password is required";   
 } else
 {      
$pwd = test_input($_POST["pwd"]);  
		  $fpwd=1;
	  
 }   
  
if (empty($_POST["contact"]))
 {  
$phoneErr = "phone number is required";   
 } 
  else
 {      
$phone = test_input($_POST["contact"]);  
		 $fphone=1; 
 } 
   
  
 if (empty($_POST["email"])) 
 {  
 $emailErr = "Email is required";  
 } 
 else
 {     
 $email = test_input($_POST["email"]);  
	  $femail=1;
  
 }         

   if (empty($_POST["comment"]))
   {   
   $comment = "";   
   } 
   else 
   {   
   $comment = test_input($_POST["comment"]); 
   }  
   if (empty($_POST["gender"]))
   {     
   $genderErr = "Gender is required"; 
   }
   else
   {   
   $gender = test_input($_POST["gender"]);  
   $fgender=1;
   }
   }    
$_SESSION['name']=$name;
$_SESSION['ph'] = $phone;
$_SESSION['email']=$email;
$_SESSION['gender'] = $gender;
$_SESSION['comment'] = $comment;
$_SESSION['uname'] = $uname;
$_SESSION['pwd'] = $pwd;

 if($fname==1&& $fphone==1&&$femail==1&&$fgender==1&&$funame==1&&$fpwd==1)
{
	//header('location:/Diabetes/form3.php');
	$con = mysqli_connect("localhost","root", "", "diabetes");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  
  $b1=$_SESSION['name'];
  $b2=$_SESSION['uname'];
  $b3=$_SESSION['pwd'];
  $b4=$_SESSION['ph'];
  $b5=$_SESSION['email'];
  $b6=$_SESSION['gender'];
  $b7=$_SESSION['comment'];
  $sql="INSERT INTO login VALUES ('$b1','$b2','$b3',$b4,'$b5','$b6','$b7')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	  // echo "<h2>Updated Successfully</h2>";
	header('location:/Diabetes/update1.php');
	   			}
else 
{
	// echo "Update Failed";
	header('location:/Diabetes/update2.php');
			
			
}
}
}
 ?>  
 <body>   
 <ul class="topnav" id="myTopnav">

<li><a>Diabetes Analysis system</a></li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="active" href="login_new.php">Home</a></li>
  <li><a href="user2.php">Login</a></li>
  <li><a href="instructions1.php">Instructions</a></li>
  <li><a href="about1.php">About us</a></li>
  
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
<center>


 <h2>Registration Form</h2>
 <fieldset class="set" ><legend ><h2>User Info</h2></legend>   
 <h3><span class="error"></span></h3> 
 <form method="post" action="">
<h3>
 Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text"   name="name" pattern="^[A-Za-z0-9]{1,50}$" size="21" maxlength="20">  
 <span class="error"><?php echo $nameErr;?></span> 
 <br><br> 
 Username:<input type="text" name="uname"  pattern="^[A-Za-z0-9]{1,50}$" size="21" maxlength="20">  
 <span class="error"><?php echo $nameErr;?></span> 
 <br><br>
 Password:<input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" size="21" maxlength="20">  
 <span class="error"><?php echo $passErr;?></span> 
 <br><br>
 phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="number_format" name="contact"  pattern="\(?\+[0-9]{1,3}\)? ?-?[0-9]{1,3} ?-?[0-9]{3,5} ?-?[0-9]{4}( ?-?[0-9]{3})? ?(\w{1,10}\s?\d{1,6})?" size="20" maxlength="20"> 
 <span class="error"><?php echo $phoneErr;?></span> 
 <br><br> 
 E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="email"  pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">   
   <span class="error"><?php echo $emailErr;?></span>  
   <br><br> 
 Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:    <input type="radio" name="gender" value="female">Female  
   <input type="radio" name="gender" value="male">Male   
   <span class="error"> <?php echo $genderErr;?></span> 
   <br><br>

 
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>  
   <br><br> 
      
   <input type="submit" class="button button5" name="submit" value="Submit"> </h3>
</fieldset>   
   </form> 
 
</center>


</body> 
</html>





