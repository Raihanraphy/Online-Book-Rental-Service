<?php


$con = mysqli_connect("localhost","root","","470_project");
if (isset($_POST["submit"])) {
    $User=$_POST["name"];
    $Pass=$_POST["pass"];
    
    
	$sql="SELECT * FROM login_info WHERE User_name='$User' and Password='$Pass'";
    $sth= $con-> query($sql);
    if($sth-> num_rows > 0){

              echo "<h1><center>Welcome</center></h1>";
        echo "<a href=page.html> ....Click to Contunue </a>" ;
    
   
}
    else {?>
       <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Queue</title>
    <link rel="stylesheet" href="style3.css">
</head><body>
             <center>
           <h1>
           <?php  echo "Not Authorized"; ?>
           </h1>
           <br>
           <a href="login.html" >Try Again</a>
           </center>
           </body>
</html>
   
    <?php
         }
}
?>
   