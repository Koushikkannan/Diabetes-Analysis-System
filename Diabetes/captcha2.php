<?php
session_start();
?>
<html>
<body>
<?php
echo "text is:$_GET[t1]<br>";
echo "captcha:$_SESSION[my_captcha]<br>";
if($_GET['t1']==$_SESSION['my_captcha'])
{
	echo "validation pass";
	
}else{
	echo"failed";
}
?>
</html>
</body>