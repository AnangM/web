<?php

require("./db.php");

// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);
$sql = "INSERT INTO mahasiswa(NIM,Nama,Alamat) values(".$_POST['nim'].", '".$_POST['nama']."','".$_POST['alamat']."');";

if($conn->query($sql) === TRUE){
    header("Location:input.php");
}else{
    echo "ERROR: ".$sql."<br>".$conn->error;
}
$conn->close();
?>