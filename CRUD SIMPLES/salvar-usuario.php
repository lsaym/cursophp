<?php 
switch($_REQUEST["action"]){
  case 'cadastrar':
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $birth = $_POST["birth"]; 
    $sql = "INSERT INTO usuarios (name, email, password, birth) VALUES ('{$name}', '{$email}', '{$password}', '{$birth}')";
    $res = $conn->query($sql); 
    if($res){
      print "<script>alert('Usuario cadastrado com sucesso!');</script>";
      print "<script>location.href='?page=usuarios';</script>";}
    break;
     case 'editar':
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $birth = $_POST['birth']; 

      break;
      case 'excluir':  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $birth = $_POST['birth']; 

        break;
        default:
          echo 'acao nao encontrada ';
}
?>