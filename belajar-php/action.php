<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
</head>
<body>
<?php

/*

$size = getimagesize($_FILES['file'] ['tmp_name']);

$image = "data:" . $size["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['file'] ['tmp_name']));

echo '<img src="'.$image.'" widht=720px />';
*/

//simpan nilai

$username = $_POST['username'];
$password = $_POST['password'];

//tampilkan nilai

if ($_POST['submit'] == 'kirim') {

    if (empty($username)) {
        echo "Username tidak diisi.";
        return;
    }

    if (empty($password)) {
        echo "Password tidak diisi.";
        return;
    }

    if ($username == 'bangtan' && $password == '7777777') {
        echo "Selamat datang di halaman utama <br> Berikut adalah data anda : <br>";
        echo "username : ".$username;
        echo "<br>";
        echo "password : ".$password;
    } else {
        echo "Anda tidak bisa mengakses halaman utama";
    }


} else {
    echo "halaman tidak dapat diakses";
}


?>
</body>
</html>

