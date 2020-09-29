<?php
require 'userinfo.php';
if (isset($_POST["submit"])) {
    $username = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$query = "INSERT INTO userinfodata(username, email, mobile, comment) VALUES ('$username','$email','$mobile','$comment')";
var_dumb($query);
$uery=mysqli_query($con,$query);
echo 'successfully data updated';
}
?>