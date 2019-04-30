<?php
$loginUname = $_POST['username'];
$loginPasswd = $_POST['passwd'];
require('db.php');
$sql = "SELECT * FROM dba_userTable WHERE Username ='".$uname."';";
$result = $conn->query($sql);

$userData = $result->fetch_assoc();

if($result->num_rows > 0){
    if($userData['Password'] == $loginPasswd){
        echo "Password untuk user ".$loginUname." benar";
    }else{
        echo "Password untuk user ".$loginUname." salah";
    }
}
$conn->close();
echo '<br><a href="index.html">&laquo; Kembali</a>';
?>