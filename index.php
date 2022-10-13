<?php 
  include "bd.php";
  $msg="";
  if(isset($_POST['procura'])){
    $titu = $_POST['procura'];
    if($titu!=''){
      $livro = mysqli_query($con,"SELECT titulo,capa,subtitulo,valor,volume FROM livros where titulo='$titu'");
      $linha = mysqli_num_rows($livro);
      if($linha==0){
        $msg = "livro não encontrado";
        $livro = mysqli_query($con,"SELECT titulo,capa,subtitulo,valor,volume FROM livros");
      }
    }    
    else{
      $livro = mysqli_query($con,"SELECT titulo,capa,subtitulo,valor,volume FROM livros");
    }
  }
  else if(isset($_POST['cancel'])){
    $livro = mysqli_query($con,"SELECT titulo,capa,subtitulo,valor,volume FROM livros");
  }
  else{
    $livro = mysqli_query($con,"SELECT titulo,capa,subtitulo,valor,volume FROM livros");
  }
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos/style.css">
  <link rel="shortcut icon" href="_img/favicon.png" type="image/x-icon">
  <title>Cadastro de livros CPDB</title>
</head>
<body>
<header id="cabecalho">
  <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
    <li><a class="menu__item" href="index.php">Home</a></li>
      <li><a class="menu__item" href="cadastro.php">Cadastrar livro</a></li>
      <li><a class="menu__item" href="sobre.php">Sobre</a></li>
      <li><a class="menu__item" href="editar.php">Editar</a></li>
    </ul>
    
  </div>
  <form action="index.php" method="post">
    <div id='encontro'>
      <div>
        <input type="text" name="procura" id="procura" placeholder='Pesquisar'>
        <button id='cancel' name = "cancel">X</button>
      </div>
      
      <?php echo "<p >$msg</p>"?>
    </div>
  </form>
</header>
  
  <main class="conteudo">
    <?php
      

      while ($rows = mysqli_fetch_assoc($livro)) {
        echo "<div class='box-livro'>";
          echo "<img class='img' src='capas/".$rows['capa']."' alt='foto de exibição'/> <br> <br>";
          echo "<div id='info'>";
            echo $rows['titulo'].': ';
            echo $rows['subtitulo'];
            echo ' (Vol. '.$rows['volume'].') <br>';
          echo "</div>";
          echo '<p id="valor">R$: '.$rows['valor'].'</p>';
          echo "<button id='compra'href='sobre.php'> Comprar </button>";
        echo "</div>";  
      }
    ?>
  </main>
  <footer>

  </footer>
</body>
</html>