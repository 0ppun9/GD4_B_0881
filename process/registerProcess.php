<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['register'])) {

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');

    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $membership = $_POST['membership'];

    $query1 = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $query2 = mysqli_query($con, "SELECT * FROM users WHERE email = '$phonenum'") or die(mysqli_error($con));
    if (mysqli_num_rows($query1) != 0) {
        echo
        '<script>
                alert("Email gak boleh sama Dek!"); window.location = "../page/registerPage.php"
                </script>';
    } else if (mysqli_num_rows($query2) != 0) {
        echo
        '<script>
                alert("Nomor HP gak boleh sama Dek!"); window.location = "../page/registerPage.php"
                </script>';
    } else {
        $query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership) VALUES('$email', '$password', '$name', '$phonenum', '$membership')") or die(mysqli_error($con));
        // perintah mysql yang gagal dijalankan  ditangani oleh perintah “or die”
        if ($query) {
            echo
            '<script>
                alert("Register Sukses Bos");
                window.location = "../index.php"
                </script>';
        } else {
            echo
            '<script>
                alert("Register Gagal Dek");
                </script>';
        }
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
