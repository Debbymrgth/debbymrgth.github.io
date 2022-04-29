<?php

require_once "conn.php";

$sql = "UPDATE mahasiswa SET `Alamat`='Jl Kembang No. 333' WHERE `No`=11";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully";
} else {
    echo "Error". $sql . "<br>" . $conn->error;
}