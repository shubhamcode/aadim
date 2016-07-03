<html>
<title>aadim</title>

<head>
<form method="post">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>

<script type="text/javascript">
var myimage=document.getElementById("mypic");
var imgarr=["5.jpg","1.jpg","2.jpg","3.jpg","6.jpg"];
var imgind=0;
function changeimage(){
mypic.setAttribute("src",imgarr[imgind]);
imgind++;
if(imgind==5)
{
imgind=0;
}
}
var intervalhandle=setInterval(changeimage,2000);
mypic.onclick=function(){
clearInterval(intervalhandle);
}
$(function(){
	$('#res').click(function(){
		$('#tx').text("");
		});
	});
</script>
	

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
<ul><input type=submit value=HOME id="btd" name=home><input type=submit value="ABOUT US" id="btd" name=abtus><input type=submit value=ACCOUNT name=acc id="btd">


<input type=submit value=GALLARY id="btd" name ="glry"><input type=submit value="CONTACT US" id="btd" name="contactus"></div>
<div id="d4">
<div id="slideshow">
<img id="mypic" src="3.jpg" alt="FARMS">

</div>
<div id="login">
<h3 style="font-size:36px;
font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; margin:0px;">
LOG IN HERE:</h3>
<h3 style="font-size:16px;
font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Login Id <input type="text" name="lid" id="tx">
Password <input type="password" name="pas" id="tx">
<br><br>User Type <select name=user[]><option value=ad>Admin</option><option value=crp>CRP</option></select>
<a href="crphome.php"><h3 >Forgot Password</h3></a>
<input type=submit value="Submit" id="log" name=adminlog style="position:relative;left:20px;top:10px;">
<input type=submit value="Reset" id="res" name=rset style="position:relative;left:40px;top:10px;">

</div>
</div>
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
#lg
{
	display:none;}
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

#tx
{
	height:28px;
	margin-left:0px;
	margin-top:0px;
	width:150px;
	border-radius:20px;
	}
#log
{
	width:230px;
	height:65px;
	border-radius:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	color:#CC0;
	background:#C00;
	position:relative;
	left:20px;
	top:10px;
	
	
}
#log:hover
{
	width:230px;
	height:65px;
	border-radius:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	color:#000;
	background:#CCC;
    }
#res
{
	width:230px;
	height:65px;
	border-radius:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	color:#CC0;
	background:#C00;
	position:relative;
	left:20px;
	top:10px;
	
	
}#res:hover
{
	width:230px;
	height:65px;
	border-radius:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:36px;
	color:#CC0;
	background:#C00;
	position:relative;
	left:20px;
	top:10px;
	
	
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
#slideshow
{
	width:830px;
	height:260px;
	border-right:#CCC;
	border-right-style:ridge;
	border-bottom-width:thin;
	float:left;
	margin-left:1px;
	margin-right:1px;
	
}
a{
	text-decoration:none;}
#login
{
	width:521px;
	height:260px;
	border-style:hidden;
	float:right;
	background:#063;
}

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
else if(isset($_POST['glry']))
{
echo'<script type="text/javascript">window.location=\'gallery.php\';</script>';}
else if(isset($_POST['adminlog']))
{
    $u=$_POST['lid'];
$p=$_POST['pas'];
foreach($_POST['user'] as $c);
if($c==ad){
$con=mysql_connect("localhost","root","");
if(!$con)
{echo"db is not connected";}
else
{      
       mysql_select_db("dantewada");
       
       $a=mysql_query("Select * from alogin where mobile='$u' and pwd='$p'");
       $r=mysql_num_rows($a);
       $row=mysql_fetch_array($a);
       session_start();
       $_SESSION['id']=$row['mobile'];
       if($r==0)
      {echo'<script type="text/javascript">alert("Sorry! Mobile No. or Password does not match.Please enter correct enteries.");window.location=\'index.php\';</script>';}
     else
     {header('location:adminhome.php');} 
}
}
else{

$con=mysql_connect("localhost","root","");
if(!$con)
{echo"db is not connected";}
else
{      
       mysql_select_db("dantewada");
       
       $a=mysql_query("Select * from crp where mobile='$u' and pwd='$p'");
       $r=mysql_num_rows($a);
       $row=mysql_fetch_array($a);
       session_start();
       $_SESSION['id']=$row['mobile'];
       if($r==0)
      {echo'<script type="text/javascript">alert("Sorry! Mobile No. or Password does not match.Please enter correct enteries.");window.location=\'index.php\';</script>';}
     else
     {header('location:crphome.php');} 
}
	
	}
}
else if(isset($_POST['acc']))
{session_start();

	if((!$_SESSION['id'])||($_SESSION['id']==""))
{
  echo'<script type="text/javascript">alert("Not Logged In or Session Expired.Please Log In Again");window.location=\'index.php\';</script>';
  exit;

}
else
{echo'<script type="text/javascript">window.location=\'adminhome.php\';</script>';}
}


?>




