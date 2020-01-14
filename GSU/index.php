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
<?php   
include "header.html";
?>
<?php include "nav.html";  ?>
<br/><br/>
<section class="sec1" >
<center>
<div onmouseover="change1()" onmouseleave="change2()" class="ef" style="float:left;margin-left:20px;padding-right:10px;font-size:20px;background-color:rgba(0,0,0,.5);width:20%;padding:20px;">
<h2>State President</h2>
<h3 >Pratap Shauklal Kulshte</h3>
</div>
</center>

<center>
<div onmouseover="change1()" onmouseleave="change2()" class="ef" style="float:right;margin-right:20px;padding-right:10px;font-size:20px;background-color:rgba(0,0,0,.5);width:20%;padding:20px;">
<h2>District President</h2>
<h3>Deviram Bhalavi</h3>
</div>
</center>
<center>
<div onmouseover="change1()" onmouseleave="change2()" class="ef" style="margin-left:20px;padding-right:10px;padding:left:10px;font-size:20px;background-color:rgba(0,0,0,.5);width:20%;padding:20px;">
<h2> President</h2>
<h3>Not Known now</h3>
</div>
</center>
</section>
<center>
<div  class="text" style="word-spacing:15px;color:black;padding:30px;text-indent:35px;font-size:30px;margin:50px;padding-bottom:20px;height:200px;width:80%;background-color:rgba(128,128,128,0.4);border:5px gray outset; ">
      Gondwana Student Union is established for upliftment  of the education level in our society to eridicate
	  the hurldes in the path of education ,the aim of our union is to make avail education to every student
	  it is our effort that education should reach to every house to enlight our society .After all
	  we all know that better education leads to better world and better life.	  

</div>

<div class="mid" style="height:80px;width:100%;
 background-color:gray;padding-top:20px;font-size:40px;">
 Lets Join GSU.....
 
<div>
</center>
<div>

</div>


</div>
<div class="parallax1">
<br/><br/>

<center>

<section class="sec2">

<div style="text-decoration:underline;font-size:40px;text-shadow:4px 4px 6px black;" class="ef2">GSU PRIMARY JOINING FORM</div>
<form method="post" action="thank.php" onsubmit="return validation()">

<table class="f1">
<tr>
<th>Name:</th>
<td ><input onkeyup="return validation()" id="name"  name="name" style="height:30px;"type="text" placeholder="Enter your name" /><br/><span id="err1"></span></td>
</tr>
<tr><th>
Father's Name:</th><td><input onkeyup="return validation()" id="f_name" name="f_name"style="height:30px;"type="text" placeholder="Enter your father's name" /><br/><span id="err2"></span>
</td>
</tr>
<tr>
<th>Permanent Address:</th><td><input onkeyup="return validation()" id="addr" name="addr" style="height:30px;"type="text" placeholder="Enter your address" /><br/><span id="err3"></span>
</td>
</tr>
<tr>
<th>
College or School:</th><td><input onkeyup="return validation()" id="clg" name="clg" style="height:30px;" type="text" placeholder="Collge or School Name" /><br/><span id="err4"></span>
</td></tr>
<tr><th>
Email:</th><td><input onkeyup="return validation()" name="email" id="email"  style="height:30px;" type="email" placeholder="Enter your email" /><br/><span id="err5"></span>
</td></tr>
<tr><th>
Mobile No:</th><td><input onkeyup="return validation()" name="mob" id="mob" style="height:30px;"type="text" placeholder="Mobile Number" /><br/><span id="err6"></span>
</td></tr>
<tr><td><input name="submit" style="float:right;height:30px"value ="Submit" type="submit"/></td></tr>
</table>

</form>
</section>

</center>


<center>
<?php
include "footer.html";
?>
</center>
</div>
</body>
</html>