<?php

require_once "conn.php";

// Tampil Data Individu
// $sql = "SELECT * FROM mahasiswa WHERE `No`=7";

// Tampil Data Semua
$sql = "SELECT * FROM mahasiswa";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo $row['No']." | ".$row['NIM']." | ".$row['Nama']." | ".$row['Jenis Kelamin']." | ".$row['Tempat Lahir']." | ".$row['Tanggal Lahir']." | " .$row['Alamat'];
        echo "<br>";
    }
} else {
    echo "Result :0";
}