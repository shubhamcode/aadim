<html>
<title>admin/galleryupdate</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>

<form method="post" enctype = "multipart/form-data">
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
<ul><input type=submit value=HOME id="btd" name=home><input type=submit value="ABOUT US" id="btd" name=abtus><input type=submit value=ACCOUNT  name="acc" id="btd">


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
?></h3>
<input type=submit value=Logout name=logout id='btdlg'>
<br>
<hr>
<h3>Upload the new pictures here:</h3>

<input type="file" name = "image" id="idupload" />
<input type=submit name=upld value=Upload id="btdfn2">

</div>
<style>
#tx
{
	height:28px;
	
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
	
	width:300;
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
	
	width:300;
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
#btdfn2
{
	
	width:150;
	height:35;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	left:20;
	top:450;
	position:fixed;
	
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
</form>
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
echo'<script type="text/javascript">window.location=\'gal.php\';</script>';}
else if(isset($_POST['crp']))
{
echo'<script type="text/javascript">window.location=\'crp.php\';</script>';}
else if(isset($_POST['farmer']))
{
echo'<script type="text/javascript">window.location=\'farmerphp\';</script>';}
else if(isset($_POST['crpregis']))
{
echo'<script type="text/javascript">window.location=\'crpregistration.php\';</script>';}
else if(isset($_POST['acc']))
{echo'<script type="text/javascript">window.location=\'adminhome.php\';</script>';}

else if(isset($_POST['si']))
{
echo'<script type="text/javascript">window.location=\'log.php\';</script>';}

else if(isset($_POST['upld'])){
 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo'<script type="text/javascript">alert("Uploaded Successfully!");window.location=\'updategal.php\';</script>';
      }else{
         print_r($errors);
      }

				 }
				 else if(isset($_POST['logout']))
{
unset($_SESSION['id']);
session_destroy();
echo'<script type="text/javascript">alert("SUCCESSFULLY LOGGED OUT. Thank You.");window.location=\'index.php\';</script>';


}


?>


