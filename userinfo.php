<?php 

$con = mysqli_connect("127.0.0.1:8889","Oscar1628");

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'userdata');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = " insert into userinfo (name, email, password) 
values ('$name', '$email', '$password')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>