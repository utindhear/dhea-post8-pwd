<?php
    //include database connection file
    include_once("koneksi.php");

    //get id from url to delete that user
    $nim = $_GET['nim'];

    //delete user row from table based on given id
    $result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");

    //after delete redirected to home, so that latest user list will be displayed
    header("Location:index.php");

?>