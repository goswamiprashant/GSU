 <?php
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	

	$con=mysqli_connect("sql205.epizy.com","epiz_24976417","CfyQEEeBFXy1XPQ","epiz_24976417_info");
	$q="insert into suggestions('$name','$email','$message')";
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
<body>
<div class="parallax">
<?php include("header.html");?>
<?php include ("nav.html");  ?>

<?php include("suggestion.html");?>



<?php include "footer.html"; 
?>
</div>
</body>
</html>