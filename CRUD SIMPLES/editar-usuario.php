<h1>Editar usuario</h1>
<?php 
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object(); 
?>
<form action="?page=salvar" method="post">
  <input type="hidden" name="action" value="editar">
  <input type="hidden" name="id" value="<?= $row->id?>">
  <div class="mb-3">
    <label for="name">nome</label>
    <input type="text" name="name" id="name" class="form-control" value="<?=$row->name?>">
  </div>
  <div class="mb-3">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" class="form-control" value="<?=$row->email?>">
  </div>
  <div class="mb-3">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control" required>
  </div>
  <div class="mb-5">
    <label for="date">Data de nascimento</label>
    <input type="date" name="birth" id="birth" class="form-control" value="<?=$row->birth?>">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary ">Editar</button>
  </div>

</form>