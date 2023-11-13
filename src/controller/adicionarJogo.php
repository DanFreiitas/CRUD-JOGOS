<?php
#require "./../../conexao.php";
#require "./../model/Jogos.php";

$jogo = new Jogos($pdo);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $plataforma = $_POST['plataforma'];
    $genero = $_POST['genero'];

    if ($jogo->adicionar($nome, $plataforma, $genero)) {
        header('Location: ?page=novo&sucess');
    } else {
        echo '<p>Erro ao adicionar.</p>';
        echo '<a href="?page=novo">Voltar</a>';
    }
}
;