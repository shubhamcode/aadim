<html>
<title>admin/change-password</title>
<form method=post>
<head>
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
<h3>WELCOME:<?php
session_start();
if((!$_SESSION['id'])||($_SESSION['id']==""))
{
  echo'<script type="text/javascript">alert("Session Expired.Please Log In Again");window.location=\'index.php\';</script>';
  exit;

}
else
     {
        $con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         { 
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from alogin where mobile='$_SESSION[id]'",$con);
            $row=mysql_fetch_array($a);
               echo $row['name'];
         }
	 }
?>
</h3>
<input type=submit value=Logout name=logout id='btdlg'>
<br>
<hr>
<h3>Change Password Here:</h3>
<table>
<tr><td><h3 style="">Login Id </h3></td><td><input type="text" name="lid" id="tx" style="margin-bottom:15px;"></h3></td></tr>
<tr><td><h3>Old Password </h3></td><td><input type="password" name="opas" id="tx" style="margin-bottom:15px;"></h3></td></tr>
<tr><td><h3>New Password </h3></td><td><input type="password" name="npas" id="tx" style="margin-bottom:15px;"></h3></td></tr>

<tr><td><input type=submit value="Change Password" name=cpas id='btdfn'></td>
<td><input type=submit value="Cancel" name=can id='btdfn' ></td></tr>
</table>
</div>
<style>
#tx
{
	height:28px;
	margin-left:90px;
	margin-top:-45px;
	width:250px;
	border-radius:20px;
	}
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
#btdlg
{
	
	width:120;
	height:35;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
	position:fixed;
	top:280;
	left:1215;
}
#btdlg:hover
{
	
	width:120;
	height:35;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
	position:fixed;
	top:280;
	left:1215;
}
#btdfn
{
	
	width:200;
	height:55;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
	}
#btdfn:hover
{
	
	width:200;
	height:55;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
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
	height:385px;
	border-bottom:#CCC;
	border-bottom-style:ridge;
	border-bottom-width:thick;
	float:left;
	margin-left:5px;
	margin-right:5px;
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
else if(isset($_POST['acc']))
{
echo'<script type="text/javascript">window.location=\'adminhome.php\';</script>';}
else if(isset($_POST['logout']))
{
unset($_SESSION['id']);
session_destroy();
echo'<script type="text/javascript">alert("SUCCESSFULLY LOGGED OUT. Thank You.");window.location=\'index.php\';</script>';


}

else if(isset($_POST['cpas']))
{
$con=mysql_connect("localhost","root","");
if(!$con)
{echo"db is no connected";}
else
{      
       mysql_select_db("dantewada");
                
                 $g=mysql_query("update alogin set pwd='$_POST[npas]' where mobile='$_POST[lid]' and pwd='$_POST[opas]'");
                if(!$g)
                 {echo'<script type="text/javascript">alert("Sorry! PASSWORD COULD NOT BE CHANGED.");window.location=\'changeadminpas.php\';</script>';}
                else
                 {echo'<script type="text/javascript">alert("Password Changed Successfully.Please LOGIN Again With New Password.");window.location=\'index.php\';</script>';}
	   }}



?>

