<?php
session_start();
$server="localhost";
$username="root";
$password="";


$conn = mysqli_connect($server,$username,$password);
if(!$conn) {
    die ("connection failed :" .mysqli_connect_error());
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `pg`.`pg1` WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn,$sql);

if(!$result){
echo "Error :" .mysqli_error($conn);
exit;
}
$row = mysqli_fetch_assoc($result);
if($row){
    echo "Hello " .$row['username'] ."<br/>";
    
    //$_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    
   //setcookie("s_no.", $row['s_no.'], time()+3600);
   //setcookie("username",$row['username'],time()+3600);
    ?>
    <a href="dashbord.php">Click here</a>
    <?php
}else{
    echo "Login Failed<br/>";
}

mysqli_close($conn);
?>