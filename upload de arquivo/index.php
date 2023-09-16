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
      $extension = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);


      
      if(in_array($extension, $formatPermit)): // verifica se o formato e permitido
            $storage = "storage/";
            $temp = $_FILES['arquivo']['tmp_name'];
            $newName = uniqid().".$extension";
            
            if(move_uploaded_file($temp,$storage.$newName)):
             $msg = "upload feito com sucesso";
            else:
             $msg = "nao foi possivel fazer o upload do  arquivo";
            endif;
      else:
         $msg = "Formato de arquivo invalido";
      endif;
      echo $msg;
    endif;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
      <label for="file">Envie o arquivo:</label>
      <input type="file" name="arquivo">
      <br>
      <button name="enviar" id="enviar">enviar</button>
    </form>
  </main>

</body>

</html>