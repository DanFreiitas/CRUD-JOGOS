<div class="container-fluid mt-5 mb-5">
    <h1>Editar jogos</h1>
</div>

<div class="contaienr-fluid container-fluid bg-light pt-3 pb-3 pl-5">

    <?php
    #require "./../../conexao.php";
    #require "./../model/Jogos.php";
    
    $jogo = new Jogos($pdo);
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $jogoSelecionado = $jogo->selecionar($id);
        
        if ($jogoSelecionado) {
            $id = $jogoSelecionado['id'];
            $nome = $jogoSelecionado['nome'];
            $plataforma = $jogoSelecionado['plataforma'];
            $genero = $jogoSelecionado ['genero'];
            
            echo "<form action='?page=atualizar' method='post' class='mt-3'>";
            echo "<input type='hidden' name='id' value={$id}>";
            echo "<div class='col-md-3'>";
            echo "<label for='nome' class='form-label'>Nome do jogo:</label>";
            echo "<input type='text' name='nome' value={$nome} class='form-control' required><br>";
            echo "</div>";
            echo "<div class='col-md-3'>";
            echo "<label for='plataforma' class='form-label'>Plataforma:</label>";
            echo "<input type='text' name='plataforma' value={$plataforma} class='form-control' required><br>";
            echo "</div>";
            echo "<div class='col-md-3'>";
            echo "<label for='genero' class='form-label'>Genero:</label>";
            echo "<input type='text' name='genero' value={$genero} class='form-control' required><br>";
            echo "</div>";
            echo "<input type='submit' id='botao' value='Atualizar' class='btn btn-secondary'> ";
            echo "<a href='?page=listar' class='btn btn-light'>Cancelar</a>";
            echo "</form>";
        } else {
            echo '<p>Jogo não encontrado!</p>';
        };
        
        
        
    } ?>
</div>
