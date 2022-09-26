<?php

if (isset($_POST['add'])) {

    include('../db.php');

    $nama = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $season = $_POST['season'];
    $sinopsis = $_POST['synopsis'];

    $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis) VALUES('$nama', '$genre', '$realese', '$season', '$sinopsis')") or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
                alert("Add Movies Sukses Bos");
                window.location = "../page/listMoviesPage.php"
                </script>';
    } else {
        echo
        '<script>
                alert("Add Movies Gagal Dek");
                 window.location = "../page/listMoviesPage.php"
                </script>';
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
