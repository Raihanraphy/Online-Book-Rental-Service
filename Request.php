<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Queue</title>
    <link rel="stylesheet" href="style5.css">
</head>
<center >
<body>
  <fieldset><legend><h2>Request Queue</h2></legend>
   <form method="post">
  <center>    <h2><div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Book's name" name="name">
  </div></h2></center>
   <center> 
    <h2><div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Email..." name="email">
  </div><br>
    </h2></center> 
      <input  type="submit" name="submit" value="Reuest">
       
   </form>
   
   </fieldset>
     <a type class="logoutLblPos" value="Log out" href="page.html">Home Page</a>
</body>
</center>
</html>
<?php

$con = new PDO("mysql:host=localhost;dbname=470_project",'root','');

if (isset($_POST["submit"])) {
    $Name= $_POST["name"];
    $text= $_POST["email"];
    $sql=$con->prepare("INSERT INTO Request_Queue_List (Name,Email) VALUES ('$Name','$text')");
    $sql-> execute();

?>
   <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Queue</title>
    <link rel="stylesheet" href="style3.css">
</head>
   <body>
    <center>
    <fieldset>
        <legend>
            ReCheck The Details
        </legend>
       <table class="blueTable" border="1">
      <tr><th>Name</th><th>Type</th></tr>
			<tr>
               <td><?php echo $Name; ?></td>
                <td><?php  echo $text; ?></td>
                
			</tr>
       </table>
    </fieldset>   
</center>
</body>
<?php
}

    
    ?>