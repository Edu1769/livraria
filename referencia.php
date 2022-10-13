<?php
include_once("bd.php");
$error = "";
if(isset($_POST["submit"])){
    $a1 = $_POST["a1"];
    $sobrenome1 = $_POST["sobrenome1"];
    $a2 = $_POST["a2"];
    $sobrenome2 = $_POST["sobrenome2"];
    $a3 = $_POST["a3"];
    $sobrenome3 = $_POST["sobrenome3"];
    
    $capa =  $_FILES["capa"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $edicao = $_POST["edicao"];
    $ano = $_POST["ano"];
    $editora = $_POST["editora"];
    $volume = $_POST["volume"];
    $isbn = $_POST["isbn"];
    $preco = $_POST["preco"];
    $cat = $_POST["categoria"];
    $livro = mysqli_query($con,"SELECT isbn FROM livros where isbn ='$isbn'");
    $row = mysqli_num_rows($livro);
    
    if(isset($_POST['etal'])){ // verifica se o etal foi clickado
        $etal = $_POST['etal'];
    }else{
        $etal ="0";
    }

    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $capa["name"], $ext); 

    $nome_imagem = md5(uniqid(time())) . "." . $ext[1]; // Gera um nome único para a imagem

    $caminho_imagem = "capas/".$nome_imagem; // Caminho de onde ficará a imagem

    move_uploaded_file($capa["tmp_name"], $caminho_imagem);// Faz o upload da imagem para seu respectivo caminho

    if($row==0){
        $result = mysqli_query($con,"INSERT INTO livros(id,capa,titulo,subtitulo,ano,editora,volume,isbn,valor,etal,NomeAutor1,SobreNomeAutor1,NomeAutor2,SobreNomeAutor2,NomeAutor3,SobreNomeAutor3,categoria) 
        VALUES ('1','$nome_imagem','$titulo','$subtitulo','$ano','$editora','$volume','$isbn','$preco','$etal','$a1','$sobrenome1','$a2','$sobrenome2','$a3','$sobrenome3','$cat')");    
    }
    else{
    }
   
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/referencia.css">
    <link rel="shortcut icon" href="_img/favicon.png" type="image/x-icon">
    <title>Cadastro de livros | Referência</title>
</head>
<body>
    <main>
        <div id="result">
            <h1>Resultados</h1>
        </div>

        <div class='text'>
            <h1>Referência:</h1>
            <?php
                echo "<p>$sobrenome1, $a1. $titulo: $subtitulo. $edicao. $editora, $ano, ISBN $isbn</p>";  
            ?>
        </div>

        <div class='text'>
            <h1>Citação no texto:</h1>
            <?php
                echo "<p>ou: ... $sobrenome1 ($ano)</p>";  
                echo "<p>ou: ... ";
                echo strtoupper($sobrenome1);
                echo ", $ano</p>"; 
            
            ?>
        </div>
        
            <a href="index.php"><div id="voltar">Finalizar</div></a>
        
    </main>
</body>
</html>