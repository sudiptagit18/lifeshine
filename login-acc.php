<?php 
 include_once"connection.php";
?>

<?php 
$q1=mysqli_query($con,"SELECT `id` FROM `details` WHERE email='".$_REQUEST['email']."' AND password = '".$_REQUEST['password']."'");
$num = mysqli_num_rows($q1);
//print_r($exe);
if($num === 1){
    session_start();
    $row=mysqli_fetch_array($q1);
    $_SESSION['id'] = $row['id'];
    print_r($_SESSION['id']);
    header('location:first.php');

}else{
    // header('location:login.php?mess=email and password invalid');
    echo"email password invalid";
}


?>