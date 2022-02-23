<?php
//data
 $Email = $_POST['Email']
 $Password = $_POST['Password']
 if ($Email = "gdariawhan@gmail.com" and $Password=="sayang") {
    echo '<script language="javascript">';
    echo 'alert(Login Berhasil)';
    echo '</script>';
    header("Location:index.php");
 }
?>