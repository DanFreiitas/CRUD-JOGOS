<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Best Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novo">Adicionar novo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Jogos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">

    <?php
    require "conexao.php";
    require "./src/model/Jogos.php";
    switch (@$_REQUEST['page']) {
        case 'novo':
            include('./src/View/adicionarJogo.php');
            break;
            case 'listar':
                include('./src/View/listarJogo.php');
                break;
                case 'adicionarJogo':
                    include('./src/controller/adicionarJogo.php');
                    break;
                    case 'editar':
                        include('./src/View/editarJogo.php');
                        break;
                        case 'atualizar':
                            include('./src/controller/atualizar.php');
                            break;
                            case 'excluir':
                                include('./src/View/deletarJogo.php');
            break;

            
            default:
            include('./src/View/adicionarJogo.php');
            break;
        }
        ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
<footer class="bg-dark p-5"></footer>
</html>