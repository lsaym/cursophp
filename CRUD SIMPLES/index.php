<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>cadastro</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        Cadastro
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="?page" href="index.php">Pagina principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">listar usuarios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col mt -5">
        <?php 
          include 'config.php';
          switch(@$_REQUEST['page']){
            case 'novo':
              include 'novo-usuario.php'; 
              break;
            case 'listar':
              include 'listar-usuario.php';
              break;
            case 'salvar':
              include 'salvar-usuario.php';
              break;
            case 'editar':
              include 'editar-usuario.php';
              break;
            default:
              echo "<h1>Bem vindos!</h1>";
              break;
  }
  ?>

      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>