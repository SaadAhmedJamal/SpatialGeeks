# SpatialGeeks
NASA SpaceApp Challenge 17 



/*photos.php*/

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Spatial Record Web Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css" media="all">
@import "images/style.css";
</style>
</head>


<body>
<param value="False" name="autoStart" />
<div class="content">
  <div id="header">
    <div class="title">
      <h1>Spatial Record <br> Web Application</h1>
      <h2> Nasa Space App Challenge Islamabad 17 </h2>
    </div>
  </div>
  <div id="main">
    <div class="leftmenu">
      <div class="nav">
        <ul>
         
          
           <li><a href="homepage.php">home</a></li>
            <li><a href="upload.php">upload image</a></li>
          
        </ul>
      </div>
    </div>
    
   
     <param value="True" name="Showcontrols" />
   <div>
   <div id="main" style="width: 500px;
margin-left: 250px;" >
     <?php
	$con = mysql_connect('localhost','root',"");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("abc", $con);

$result = mysql_query("SELECT * FROM photos ");
	
while($row = mysql_fetch_array($result))
  {
	echo '<img width="100" height="100" src="'.$row['location'].'">';  


           

  }


	?>
    </div>
    </div>
    
  </div>
  
  
  
  <div id="prefooter">
    
  </div>
  
  <div id="footer">
    <div class="padding">  </div>
  </div>
</div>

</body>
</html>





/*uploadimages.php*/


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">


body{
	font-family:arial;
	
	background-color:#cbd4e4;

}

table{font-size:80%; background:url(img/bg.jpg) repeat-x #cbd4e4;}

a{color:black;text-decoration:none;font:bold}

a:hover{background-color:#606060}

td.menu{background-color:lightblue}

table.menu

{

font-size:100%;

position:absolute;

visibility:hidden;

}

</style>
</head>

<body>
<table width="286" height="163" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="282" height="161" valign="top"><p>
	
	</p>
    <form action="saveupload.php" method="post" enctype="multipart/form-data">
  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file:
    <input type="file" name="image"> 
  </p>
  <p>&nbsp;
    Term
    <select name="term" id="term">
      <option>Select Term</option>
      <option>Private</option>
      <option>Public</option>
    </select>
   
    &nbsp;</p>
  <p>name:
    <label>
	<input name="uploadedby" type="text" />
    <input name="caption" type="text" id="caption" />
    </label>
  </p>
  <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Upload">
  </p>
    </form>sa
	
	<label><a href="photos.php">back to Photos </a></label></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>


