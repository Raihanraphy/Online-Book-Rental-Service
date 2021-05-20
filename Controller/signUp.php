<?php


$con = mysqli_connect("localhost","root","","470_project");

if (isset($_POST["submit"])) {
    $User1=$_POST["name1"];
    $User2=$_POST["name2"];
    $User3=$_POST["user"];
    $Email=$_POST["email"];
    $Pass=$_POST["pass"];
    $Pass2=$_POST["repass"];
   
    $sql = $con->prepare(INSERT INTO login_info VALUES ('$User1','$User2','$User3','$Email','$Pass'));
        $sql-> execute();

}



?>