<?php
#require '../model/Jogos.php';
#require '../../conexao.php';

$jogo = new Jogos($pdo);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $name = $_POST['nome'];
    $plataforma = $_POST['plataforma'];
    $genero = $_POST['genero'];

    $resultado = $jogo->atualizar($id, $name, $plataforma, $genero);
    if ($resultado == true) {
        echo 'Jogo atualizado com sucesso';
        header('Location: ?page=listar&sucess');
    }else{
        echo 'Erro ao atualizar.';
        return;
    }
}