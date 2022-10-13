<?php 
  include "bd.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/editar.css">
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
</header>

  <main class="conteudo">
    <table >
      <td>Del</td>
      <td>Editar</td>
      <td>isbn</td>
      <td>titulo</td>
      <td>subtitulo</td>
      <td>volume</td>
      <td>Valor</td>
      <td>Categoria</td>
      <?php
        $livro = mysqli_query($con,"SELECT isbn,titulo,capa,subtitulo,valor,volume, categoria FROM livros");
        while ($rows = mysqli_fetch_assoc($livro)) {
          echo "<tr>";
          echo "<td><a href='deletar.php?del=".$rows['isbn']."'><img src='https://img.icons8.com/stickers/35/000000/delete-trash.png'/></a></td>";
          echo "<td><a href='mudarReg.php?del=".$rows['isbn']."'><img src='https://img.icons8.com/fluency/30/000000/edit.png'/></a></td>";
          echo "<td>".$rows['isbn']."</td>";
          echo "<td>".$rows['titulo']."</td>";
          echo "<td>".$rows['subtitulo']."</td>";
          echo "<td>".$rows['volume']."</td>";
          echo "<td>".$rows['valor']."</td>";
          echo "<td>".$rows['categoria']."</td>";
          echo "<tr>";
        }
      ?>
    </table>
  </main>
  <footer>

  </footer>
</body>
</html>

