<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$f_name=$_POST["f_name"];
	$addr=$_POST["addr"];
	$clg=$_POST["clg"];
	$email=$_POST["email"];
	$mob=$_POST["mob"];
	

	$con=mysqli_connect("localhost","root","","info");
	$q="insert into student values('$name','$f_name','$addr','$clg','$email','$mob')";
	mysqli_query($con,$q);
	mysqli_close($con);


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>GSU</title>
<meta name="description" content="A student union of Gonds in Madhaya Pradesh in Chhindwara District
renowned as Gondwana State Union"/>
<meta name="keywords" content="GSU ,GSU Chhindwara,GSU Union"/>
<meta  name="author" content="Prashant Goswami"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
	
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script src="./javascript/main.js" type="text/javascript"></script>
</head>
<style>
.t1{
	font-size:25px;
	font-family:calibri;
	font-weight:bold;
	text-shadow:3px 3px 4px ywllow;
	
}
</style>
<body>

<div class="parallax">
<?php   
include "header.html";
?>
<br/><br/><center>
<section style="height:200px;"class="sec2">
<div class="t1">
Your form is submitted Successfully.<br/>
Thankyou for joining,GSU........!!!

</div>
</section>
<center>
<br/><br/>

<hr/>

<center>
<?php
include "footer.html";
?></div>
</center>
</body>
</html>

<?php
}

?>