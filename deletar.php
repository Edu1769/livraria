<?php
    include("bd.php");
    $id = $_GET['del'];
    $del = mysqli_query($con,"DELETE FROM livros where isbn = '$id'");
    header('location: editar.php');
?>