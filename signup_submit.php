<?php 
require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1 ($password);
$college_name = $_POST['college_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];

$sql= "SELECT * from users where email = '$email' ";
$result= mysqli_query($conn, $sql);
if(!$result){
    echo "Something went wrong!";
    exit;
}
$row_count = mysqli_num_rows($result);
if($row_count != 0){
    echo "This email id is already registered!";
    exit;
}
$sql= "INSERT into users (full_name, phone, email, password, college, address, gender) values('$full_name', 
'$phone ', '$email', '$password', '$college_name', '$address', '$gender') ";

$result= mysqli_query($conn, $sql);
if(!$result){
    echo "Not feel Something went wrong!";
    exit;
}
echo "Your account has been created successfully!";
?>
click <a href = ".. / index.php">here </a> to continue
<?php
mysqli_close();
 
?>