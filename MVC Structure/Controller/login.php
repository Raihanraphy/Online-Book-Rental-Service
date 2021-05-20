<?php


$con = mysqli_connect("localhost","root","","470_project");
if (isset($_POST["submit"])) {
    $User=$_POST["name"];
    $Pass=$_POST["pass"];
    
    
	$sql="SELECT * FROM login_info WHERE User_name='$User' and Password='$Pass'";
    $sth= $con-> query($sql);
    if($sth-> num_rows > 0){

              echo "it exist";
    
   
}
    else {
        echo "Not Authorized";
    }
}
?>