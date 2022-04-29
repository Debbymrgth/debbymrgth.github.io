<?php

//require_once "conn.php";

/*
$sql = "INSERT INTO mahasiswa
        (`No`, `NIM`, `Nama`, `Jenis Kelamin`, `Tempat Lahir`, `Tanggal Lahir`, `Alamat`) VALUES
        ('11', '19280011','Lia','Perempuan','Lampung','2000-12-04','Jl Kembang No. 3')";

*/

if ($_POST['Input'] == "Input") {

    require_once "conn.php";

    $sql = "INSERT INTO mahasiswa
        (`No`, `NIM`, `Nama`, `Jenis Kelamin`, `Tempat Lahir`, `Tanggal Lahir`, `Alamat`) VALUES
        ('".$_POST['No']."','".$_POST['NIM']."','".$_POST['Nama']."','".$_POST['Jenis Kelamin']."','".$_POST['Tempat Lahir']."','".$_POST['Tanggal Lahir']."','".$_POST['Alamat']."')";

    if ($conn->query($sql) === TRUE) {
        echo "New Record Data Created Successfully";
    } else {
        echo "Error". $sql . "<br>" . $conn->error;
    }

} else {
    echo "Restricted Area";
}