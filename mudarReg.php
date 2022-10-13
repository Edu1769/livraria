<?php 
  include("bd.php");
  $isbn = $_GET['del'];
  $livro = mysqli_query($con,"SELECT * FROM livros where isbn ='$isbn'");
  while ($rows = mysqli_fetch_assoc($livro)) {
    $capa = $rows['capa'];
    $a1 = $rows['NomeAutor1'];
    $sb1 = $rows['SobreNomeAutor1'];
    $a2 = $rows['NomeAutor2'];
    $sb2 = $rows['SobreNomeAutor2'];
    $a3 = $rows['NomeAutor3'];
    $sb3 = $rows['SobreNomeAutor3'];

    $titulo = $rows['titulo'];
    $subtitulo = $rows['subtitulo'];
    $ano = $rows['ano'];
    $editora = $rows['editora'];
    $vol = $rows['volume'];
    $preco = $rows['valor'];
    $cat = $rows['categoria'];
  }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/mudar.css">
  <link rel="shortcut icon" href="_img/favicon.png" type="image/x-icon">
  <title>Document</title>
</head>
<body>
<main>
  <form action="update.php" method="post" enctype="multipart/form-data">
    <fieldset class="grupo">
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <input name='a1' type='text' placeholder='1° Autor' value='<?php echo $a1;?>'>
        <span class="hifem">-</span>
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <?php 
            echo "<input name='sobrenome1' type='text' placeholder='Sobrenome' value='$sb1'>";
        ?>
      </div>
      
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <?php 
            echo "<input name='a2' type='text' placeholder='2° Autor' value='$a2'>";
        ?>
        <span class="hifem">-</span> 
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <?php 
            echo "<input name='sobrenome2' type='text' placeholder='Sobrenome' value='$sb2'>";
        ?>
      </div>
      
      <div class="campo-form">
        <label>Nome Autor:</label><br>
        <?php 
            echo "<input name='a3' type='text' placeholder='3° Autor' value='$a3'>";
        ?>
        <span class="hifem">-</span>  
      </div>
      
      <div class="campo-form">
        <label>Sobrenome:</label><br>
        <?php 
            echo "<input name='sobrenome3' type='text' placeholder='Sobrenome' value='$sb3'>";
        ?>
      </div>

      <div class="campo-form">
        <label>Título:</label><br>
        <?php 
            echo "<input name='titulo' type='text' placeholder='Título do livro' value ='$titulo' required> ";
        ?>
        
        <span class="ivi">-</span>
      </div>
    
      <div class="campo-form">
        <label>Subtítulo:</label><br>
        <?php 
            echo "<input name='subtitulo' type='text' placeholder='Subtítulo do livro' value='$subtitulo' required>";
        ?>
        
      </div>

      <div class="campo-form">
        <label>Nº Edição:</label><br>
        <input name="edicao" type="text"  placeholder="Numero da edição" value='1' required>
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">  
        <label>Ano:</label><br>
        <?php 
            echo "<input name='ano' type='number' placeholder='Ano de lançamento' value='$ano' required>";
        ?>
      </div>
      
      <div class="campo-form">
        <label>Editora:</label><br>
        <?php 
            echo "<input name='editora' type='text' placeholder='Editora do livro' value='$editora' required>";
        ?>
        
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">
        <label>Volume:</label><br>
        <?php 
            echo "<input name='volume' type='number' placeholder='Volume do livro' value='$vol' required>";
        ?>
      </div>
      
      <div class="campo-form">
        <label>ISBN:</label><br>
        <?php 
            echo "<input name='isbn' type='number' placeholder='ISBN' value='$isbn'>";
        ?>
        <span class="ivi">-</span>
      </div>

      <div class="campo-form">
        <label>Preço:</label><br>
        <?php 
            echo "<input name='preco' type='number' placeholder='Preço do livro' value='$preco' required>";
        ?>
      </div>
 
      <div>
        <select id="categoria" name="categoria">
          <option name="categoria" value="" INVISIBLED>CATEGORIAS</option>
          <option name="categoria" value="Ação">Ação</option>
          <option name="categoria" value="Aventura">Aventura</option>
          <option name="categoria" value="Biografias">Biografias</option>
          <option name="categoria" value="Folclore">Folclore</option>
          <option name="categoria" value="Humor">Humor</option>
          <option name="categoria" value="Romance">Romance</option>
          <option name="categoria" value="Terror">Terror</option>
          <option name="categoria" value="Ficção">Ficção Científica</option>
        </select>

        <script>
        var text = '<?php echo $cat; ?>';
        var select = document.querySelector('#categoria');
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].text === text) {
                select.selectedIndex = i;
                break;
            }
        }
        </script>

      </div>
      
      
    </fieldset>  
    <button type="submit" name="submit" class="button-82-pushable" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">
      Atualizar
    </span>
  </button>
  </form>
</main>
</body>
</html>