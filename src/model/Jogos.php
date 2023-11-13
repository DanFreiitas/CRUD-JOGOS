<?php

class Jogos
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function adicionar($nome, $plataforma, $genero)
    {
        $stmt = $this->pdo->prepare("INSERT INTO jogos( nome, plataforma, genero) VALUES (?,?,?)");
        return $stmt->execute([$nome, $plataforma, $genero]);
    }
    public function listar()
    {
        $stmt = $this->pdo->query("SELECT * FROM jogos");
        return $stmt->fetchAll();
    }
    public function selecionar($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM jogos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    public function atualizar($id, $nome, $plataforma, $genero)
    {
        $stmt = $this->pdo->prepare("UPDATE jogos SET nome = :nome, plataforma = :plataforma, genero = :genero WHERE id = :id");
        return $stmt->execute(['nome' => $nome, 'plataforma' => $plataforma, 'genero'=> $genero, 'id' => $id]);
    }
    public function excluir($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM jogos WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}