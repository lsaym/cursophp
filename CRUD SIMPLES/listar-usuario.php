<h1>Listar usuario</h1>
<?php 
$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
  print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
  print "<table class='table table-striped table-hover'>";
  print "<tr>";
  print "<th>#</th>";
  print "<th>Nome</th>";
  print "<th>E-mail</th>";
  print "<th>Data de nascimento</th>";
  print "<th>Ações</th>";
  print "</tr>";
  while($row = $res->fetch_object()){
    print "<tr>";
    print "<td>".$row->id."</td>";
    print "<td>".$row->name."</td>";
    print "<td>".$row->email."</td>";
    print "<td>".$row->birth."</td>";
    print "<td>
    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
    <button class='btn btn-danger'>Excluir</button>
    </td>";
    print "</tr>";
  }}else{
    print "<p>Não encontrou resultados</p>";
  }
  print "</table>";
?>