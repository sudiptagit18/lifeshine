<?php  
include_once"connection.php";
?>


<?php 

$q1 =mysqli_query($con , "SELECT `id` FROM `details` WHERE `email`='".$_REQUEST['email']."'");
$num = mysqli_num_rows($q1);
//print_r($row);
if($num === 0){
   $qry = "INSERT INTO `details` VALUES('','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['password']."')";
   $exe = mysqli_query($con,$qry);
   if($exe){
      header('location:sign.php');
    // echo"success";
   }else{
       echo "unsucc";
   }
}else{
    header('location:sign.php?mess=Email already exist');
 }
?>