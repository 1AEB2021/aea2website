<?php
$conn = mysqli_connect("localhost", "root", "", "webkelas");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $jabatan = $data["jabatan"];
    $name = $data["name"];
    $masajabatan = $data["masajabatan"];
    $nim = $data["nim"];

    $query = "INSERT INTO absensi VALUES ('$jabatan', '$name', '$masajabatan', '$nim')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $confirm_password = mysqli_real_escape_string($conn, $data["confirm_password"]);

    $result = mysqli_query($conn, "SELECT username FROM registrasi WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert ('Username Sudah Terdaftar!')
        </script>";
        return false;
    }

    
    //cek konfirmasi password
    if ($password1 != $confirm_password) {
        echo "<script> 
        alert('Password tidak sesuai!');
        </script>";
        return false;
    }


    mysqli_query($conn, "INSERT INTO registrasi VALUES('$username','$password1','$confirm_password')");

    return mysqli_affected_rows($conn);
}
