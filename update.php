<?php
include("bd.php");
$a1 = $_POST["a1"];
$sb1 = $_POST["sobrenome1"];
$a2 = $_POST["a2"];
$sb2 = $_POST["sobrenome2"];
$a3 = $_POST["a3"];
$sb3 = $_POST["sobrenome3"];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$edicao = $_POST["edicao"];
$ano = $_POST["ano"];
$editora = $_POST["editora"];
$vol = $_POST["volume"];
$isbn = $_POST["isbn"];
$preco = $_POST["preco"];
$cat = $_POST["categoria"];

if(isset($_POST["submit"])){
    $result = mysqli_query($con,"UPDATE livros SET titulo='$titulo', subtitulo='$subtitulo', ano='$ano', editora='$editora', volume='$vol', valor='$preco', NomeAutor1='$a1', SobreNomeAutor1='$sb1', NomeAutor2='$a2', SobreNomeAutor2='$sb2', NomeAutor3='$a3', SobreNomeAutor3='$sb3', categoria='$cat'
    where isbn = '$isbn'");
}
header("location: editar.php");
?>