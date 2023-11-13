<div class="container-fluid mt-5 mb-5">
    <h1>Deletar jogo</h1>
</div>
<div class="container-fluid bg-light pt-3 pb-3 pl-5">
    <?php

    #require '../model/Jogos.php';
#require '../../conexao.php';
    
    $jogo = new Jogos($pdo);

    if (
        $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) &&
        isset($_GET['confirm']) && $_GET['confirm'] === 'true'
    ) {
        $id = $_GET['id'];
        $jogoSelecionado = $jogo->excluir($id);

        date_default_timezone_set('America/Sao_Paulo');
        $horaAtual = date('H:i:s');

        echo "<div class='alert alert-success' role='alert'>";
        echo "<p>Jogo excluído com sucesso!</p> Hora: $horaAtual <br>";
        echo "</div>";

        echo "<a href='?page=listar' class='btn btn-secondary'>Retornar para lista</a>";
        echo "<a href='?page=novo' class='btn btn-outline-secondary'>Adicionar novo</a>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $jogoSelecionado = $jogo->selecionar($id);

        if ($jogoSelecionado) {
            echo "<p>Tem certeza que deseja excluir o jogo {$jogoSelecionado['nome']}</p>";
            echo "<a href='?page=excluir&id={$jogoSelecionado['id']}&confirm=true' class='btn btn-secondary'>Sim</a> ";
            echo "<a href='?page=listar' class='btn btn-outline-danger'>Cancelar</a>";
        } else {
            echo "Jogo não encontrado.";
        }
    } else {
        echo "Parâmetro não encontrado.";
    }

    ?>
</div>