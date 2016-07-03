<html>
<title>aadim/contactus</title>

<head>
<form method="post">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
<body style="margin:0px">
<style>body{background-color:#063;}</style>
<div id="d1">
<div id="d2">
<a href=""><img src=.jpg style="cursor:pointer;text-decoration:none;"></a>
</div>

<center><h1></h3></sub></h1></center><style>h1{color:#C00;font-size:60px;font-family:Arial, Helvetica, sans-serif;
margin-top:-10; margin-left:100px;}</style>
</div>
<div id="d3">
<ul><input type=submit value=HOME id="btd" name=home><input type=submit value="ABOUT US" id="btd" name=abtus><input type=submit value=ACCOUNT id="btd" name="acc">
<input type=submit value=GALLARY id="btd" name ="glry"><input type=submit value="CONTACT US" id="btd" name="contactus"></div>
<div id="d4">
<h3 style="font-size:30px;"><center>Send Us A Message</h3></center>
<h3>Thank you for your interest in our website.Please enter your question or comments here. We look forward to get in touch with you.</h3>
<br>
<input type=textfield id="tx" name=fn placeholder=Full_Name style="">
<input type=textarea id="txa" name=mg placeholder=Message>
<br><input type=textfield id="tx" name=ph placeholder=Phone style="">
<br><br><br><input type=textfield id="tx" name=em placeholder=Email style="">

<input type=submit value=SEND id="btd" name=snd style="position:fixed; left:800px; top:400px;">
<input type=reset value=CANCEL id="btd" name=cl style="position:fixed; left:1080px; top:400px;">



</div>
<div id="d5"> 
<h3><b>ADDRESS:</b> Hitech City Rd, Megha Hills, Sri Sai Nagar, Madhapur, Hyderabad, Telangana 500081
<br>
<b>PHONE:</b>040 4003 3862<br>
<a href="https://www.google.co.in/maps/place/Nirmaan+Organization+,+Centrel+Office/@17.4423869,78.3928853,15z/data=!4m5!3m4!1s0x0:0x9ef3cbb8e8086565!8m2!3d17.4423869!4d78.3928853" style="text-decoration:none; color:#CC0;">Find Us On Google Maps  <img src=map.jpg style="height:17px;" id="im"></a>

<pre>FOLLOW US AT:     <a href=https://www.facebook.com/?_rdr><img src=fb.png id="im" onMouseOver="this.src='fb.jpg'" onMouseOut="this.src='fb.png'"/></a>     <a href=https://instagram.com/><img src=insta.png id="im" onMouseOver="this.src='index.jpg'" onMouseOut="this.src='insta.png'"/></a>     <a href=https://twitter.com/><img src=tweetbw.jpg id="im" onMouseOver="this.src='tweet.jpg'" onMouseOut="this.src='tweetbw.jpg'"/></a>
</pre></h3>
</div>
<style>
#d3 ul
{
	margin:00;
	margin-left:22;
	padding:0;

}
#d3 li
{
	float:left;
	position:relative;
}
#d3 ul ul
{    
	position:absolute;
	visibility:hidden;
}
#d3 ul ul li
{
	margin-left:-20;
}
#d3 ul li:hover ul
{
	visibility:visible;
}
	
#btd
{
	
	width:250;
	height:65;
		margin-right:15px;
		border-radius:20px;
    color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
}
#btd:hover
{
	
	width:250;
	height:65;
		margin-right:15px;
		border-radius:20px;
    color:#000;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	cursor:pointer;
	
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#CCC;
}

#im
{
	width:30px;
	height:30px;
	border-radius:5px;
opacity:.35;
}
#im:hover
{
	width:35px;

	height:30px;
	opacity:5;
	cursor:pointer;
}

h3
{
	color:#CC0;
	margin-left:5px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
}
#tx
{
	height:28px;
	margin-left:90px;
	margin-top:-45px;
	width:250px;
	border-radius:20px;
	}
#txa
{
	height:100px;
	margin-left:90px;
	margin-top:-45px;
	width:250px;
	position:relative;
	top:30px;
	border-radius:20px;
	
	}

#d4
{
	width:1356px;
	height:260px;
	border-bottom:#CCC;
	border-bottom-style:ridge;
	border-bottom-width:thick;
	float:left;
	margin-left:5px;
	margin-right:5px;
	}
a{
	text-decoration:none;}

#d1
{
	width:1356px;
	height:180px;
	border-bottom:#CCC;
	border-bottom-style:ridge;
	border-bottom-width:thick;
	border-top:#CCC;
	border-top-style:ridge;
	border-top-width:thin;
	float:left;
	background-image:url(aadim.jpg);

	margin-top:-13px;
	
	margin-left:5px;
	
	
}
#d2
{
	width:150px;
	height:180px;
	margin-right:42px;
	
	float:right;
	visibility:hidden;
	
	
	
}
#d3
{
	width:1357px;
	height:70px;
	border-bottom:#CCC;
	border-bottom-style:ridge;
	border-bottom-width:thick;
	margin-right:5px;
	margin-left:5px;
	float:left;
	
}




</style>

</body>
</head>
</form>
</html>
<?php
if(isset($_POST['abtus']))
{
echo'<script type="text/javascript">window.location=\'abt.php\';</script>';}
else if(isset($_POST['home']))
{
echo'<script type="text/javascript">window.location=\'index.php\';</script>';}
else if(isset($_POST['contactus']))
{
echo'<script type="text/javascript">window.location=\'contact.php\';</script>';}

else if(isset($_POST['acc']))
{session_start();

	if((!$_SESSION['id'])||($_SESSION['id']==""))
{
  echo'<script type="text/javascript">alert("Not Logged In or Session Expired.Please Log In Again");window.location=\'contact.php\';</script>';
  exit;

}
else
{echo'<script type="text/javascript">window.location=\'adminhome.php\';</script>';}
}else if(isset($_POST['glry']))
{
echo'<script type="text/javascript">window.location=\'gallery.php\';</script>';}
else if(isset($_POST['snd']))
{
$con=mysql_connect("localhost","root","");
if(!$con)
{echo"db is no connected";}
else
{      
       mysql_select_db("dantewada");
       $a=mysql_query("insert into usercontact values('$_POST[fn]','$_POST[ph]','$_POST[em]','$_POST[mg]')");
       if(!$a)
      {echo"value not inserted";}
     else
     {echo'<script type="text/javascript">alert("Our team will contact you soon.THANK YOU! for showing interest in us.");window.location=\'index.php\';</script>';} 
}



}

?>




