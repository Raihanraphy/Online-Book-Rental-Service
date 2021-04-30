<?php
$con = mysqli_connect("localhost","root","","470_project");
if (isset($_POST["submit"])) {
    $str1 = $_POST["val"];
 
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    

$sql = "SELECT Name,Type FROM books Where Name='$str1'";
    $sth= $con-> query($sql);
    if($sth-> num_rows > 0){

 
if ($result = mysqli_query($con, $sql)) {
   
  while ($row = mysqli_fetch_row($result)) {
      
    
  ?>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List  </title>
    <link rel="stylesheet" href="style3.css">
</head>
  <body background="#FFFF33">
 <center>
     <h1>Avaliable </h1>
  <table class="blueTable" border="1">
      <tr><th>Name</th><th>Type</th></tr>
			<tr>
               <td><?php printf ("%s ", $row[0]); ?></td>
                <td><?php  printf ("%s ", $row[1]); ?></td>
                
			</tr>
  </table>
</center>
  <a type class="logoutLblPos2" value="Log out" href="page.html">Home Page</a>
   </body></html>
    <?php
  }
  mysqli_free_result($result);
}
     
}
    else 
    {
         ?>
         <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List  </title>
    <link rel="stylesheet" href="style3.css">
</head>
  <body background="#FFFF33">
       <center><h1> <?php echo "Not Avaliable" ;?></h1></center>
             <a type class="logoutLblPos2" value="Log out" href="page.html">Home Page</a>
             </body></html>
        
        <?php

    }
      
  
}
mysqli_close($con);
?>
