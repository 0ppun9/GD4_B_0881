<?php
session_start();
if (isset($_POST['edit'])) {

    include('../db.php');
    $id = $_SESSION['user']['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $job = $_POST['job'];
    $query = mysqli_query($con, "UPDATE users SET name = '$name', email = '$email', phonenum = '$phonenum', job = '$job' WHERE id = '$id'") or die(mysqli_error($con));

    if ($query) {
        $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = '$id'"));
        $_SESSION['user'] = $user;
        echo
        '<script>
             alert("Edit Profile Sukses");
             window.location = "../page/detaiProfilePage.php"
             </script>';
    }
} else {
    echo
    '<script>
         window.location = "../page/detaiProfilePage.php"
        </script>';
}
