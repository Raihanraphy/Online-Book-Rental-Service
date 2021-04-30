<?php


$con = new PDO("mysql:host=localhost;dbname=470_project",'root','');

if (isset($_POST["submit"])) {
    $User1=$_POST["name1"];
   $User2=$_POST["name2"];
     $User3=$_POST["user"];
    $Email=$_POST["email"];
    $Pass1=$_POST["pass"];
    $Pass2=$_POST["repass"];
  $Eq= strcmp($Pass1, $Pass2);
        if ($Eq=='0'){
   ?>
               <html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style3.css">
</head><body>
             <center>
            <h1><center><?php echo "Thank You For Registering"; ?> </center></h1><br><br>
        <center><a href=login.html><?php echo "Click here to Log In" ;?></a></center>
        
           </center>
           </body>
</html>
              
    <?php
      $sql=$con->prepare("INSERT INTO `login_info`(`First_Name`, `Last_Name`, `User_Name`, `Email`, `Password`) VALUES ('$User1' ,'$User2','$User3','$Email','$Pass1')");
            $sql-> execute(); 

}
        else{
?>
       <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Queue</title>
    <link rel="stylesheet" href="style3.css">
</head><body>
             <center>
           <h1>
           <?php echo "PassWord Did not Matched"; ?>
           </h1>
           <br>
           <a href="signUp.html" >Try Again</a>
           </center>
           </body>
</html>
           <?php
         }
}

    
?>