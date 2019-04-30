<?php
$name = $_POST['nama'];
$uname = $_POST['uname'];
$passwd = $_POST['pwd'];
$confirmPasswd = $_POST['confirmPwd'];

require('db.php');

// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

$sql = "INSERT INTO `dba_userTable` (`Username`, `Password`, `NamaLengkap`) VALUES ('".$uname."', '".$passwd."', '".$name."');";

if($passwd == $confirmPasswd){
    $result = $conn->query($sql);
    if($result){
        echo "1 Orang ditambahkan ke database";
    }else{
        echo "ERROR: ".$sql."<br>".$conn->error;
    }
    $conn->close();
}else{
    echo "Password dan Konfirmasi password tidak sama";
}

echo '<br><a href="register.html">&laquo;Kembali</a>';
?>