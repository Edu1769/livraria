<?php
include "bd.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/cadastro.css">
    <link rel="shortcut icon" href="_img/favicon.png" type="image/x-icon">
    <title>Cadastro de livros | CPDB</title>
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

<main>
  <form action="referencia.php" method="post" enctype="multipart/form-data">
    <div class="campo-form" >
      <label>Capa</label>
      <input id="capa" type="file" name="capa" required>
    </div>

    <div class="campo-form" id="etal">
      <label>Usar "et al" -</label>
      <input name="etal" value="1" type="checkbox">
    </div>
    
    <fieldset class="grupo">
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <input name="a1" type="text" placeholder="1° Autor">  
        <span class="hifem">-</span>
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <input name="sobrenome1" type="text" placeholder="Sobrenome">  
      </div>
      
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <input name="a2" type="text" placeholder="2° Autor"> 
        <span class="hifem">-</span> 
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <input name="sobrenome2" type="text" placeholder="Sobrenome">  
      </div>
      
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <input name="a3" type="text" placeholder="3° Autor">
        <span class="hifem">-</span>  
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <input name="sobrenome3" type="text" placeholder="Sobrenome">  
      </div>
      <div class="campo-form">
        <label>Título:</label><br>
        <input name="titulo" type="text" placeholder="Título do livro" required>  
        <span class="ivi">-</span>
      </div>
      <script src="add.js"></script>
    
      <div class="campo-form">
        <label>Subtítulo:</label><br>
        <input name="subtitulo" type="text" placeholder="Subtítulo do livro" required>
      </div>

      <div class="campo-form">
        <label>Nº Edição:</label><br>
        <input name="edicao" type="text"  placeholder="Numero da edição" required>
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">  
        <label>Ano:</label><br>
        <input name="ano" type="number" placeholder="Ano de lançamento" required>
      </div>
      
      <div class="campo-form">
        <label>Editora:</label><br>
        <input name="editora" type="text" placeholder="Editora do livro" required>
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">
        <label>Volume:</label><br>
        <input name="volume" type="number" placeholder="Volume do livro" required>
      </div>
      
      <div class="campo-form">
        <label>ISBN:</label><br>
        <input name="isbn" type="number" placeholder="ISBN" required>
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">
        <label>Preço:</label><br>
        <input name="preco" type="number" placeholder="Preço do livro" required>
      </div>
 
      <div>
        <select id="categoria" name="categoria">
          <option name="categoria" value="" selected INVISIBLED>CATEGORIAS</option>
          <option name="categoria" value="Ação">Ação</option>
          <option name="categoria" value="Aventura">Aventura</option>
          <option name="categoria" value="Biografias">Biografias</option>
          <option name="categoria" value="Folclore">Folclore</option>
          <option name="categoria" value="Humor">Humor</option>
          <option name="categoria" value="Romance">Romance</option>
          <option name="categoria" value="Terror">Terror</option>
          <option name="categoria" value="Ficção">Ficção Científica</option>

        </select>

      </div>
      
      
    </fieldset>  
    <button type="submit" name="submit" class="button-82-pushable" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">
      Cadastrar
    </span>
  </button>
  </form>
</main>
</body>
</html>