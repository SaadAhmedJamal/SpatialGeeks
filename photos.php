


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