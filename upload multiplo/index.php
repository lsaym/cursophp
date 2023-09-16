<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Upload de arquivos</title>
</head>

<body>
  <main>
    <?php   
    if(isset($_POST['enviar'])): // clicando no botao
      $formatPermit = ['JPG','JPEG','png','gif'];
      $n=0;
      $narq = count($_FILES['arquivo']['name']);

      
      while($n < $narq):
      $extension = pathinfo($_FILES['arquivo']['name'][$n], PATHINFO_EXTENSION);

      if(in_array($extension, $formatPermit)): // verifica se o formato e permitido
            $storage = "storage/";
            $temp = $_FILES['arquivo']['tmp_name'][$n];
            $newName = uniqid().".$extension";
            
            if(move_uploaded_file($temp,$storage.$newName)):
            echo $msg = "upload feito com sucesso";
            else:
             echo "upload feito com sucesso <br>";
            endif;
      else:
             echo "Formato de arquivo invalido";
      endif;
      $n++;
    endwhile;
    endif;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
      <label for="file">Envie o arquivo:</label>
      <input type="file" name="arquivo[]" multiple>
      <br>
      <button name="enviar" id="enviar">enviar</button>
    </form>
  </main>

</body>

</html>