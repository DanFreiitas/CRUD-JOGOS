<div class="container-fluid mt-5 mb-5">
    <h1>Cadastro de jogo</h1>
</div>
<div class="container-fluid bg-light pt-3 pb-3 pl-5">

    <form action="?page=adicionarJogo" method="post" class="mt-3">
        <div class="col-md-3">
            <label for="nome" class="form-label">Nome do jogo:</label>
            <input type="text" name="nome" class="form-control" required><br>
        </div>

        <div class="col-md-3">
            <label for="plataforma" class="form-label">Plataforma:</label>
            <input type="text" name="plataforma" class="form-control" required><br>
        </div>

        <div class="col-md-3">
            <label for="genero" class="form-label">Genero:</label>
            <input type="text" name="genero" class="form-control" required><br>
        </div>

        <input type="submit" id="botao" value="Salvar" class="btn btn-secondary">
        <a href="?page=listar" class="btn btn-light">Listar Jogos</a>
    </form>
    <?php
    if (isset($_GET['sucess'])) {
        date_default_timezone_set('America/Sao_Paulo');
        $horaAtual = date('H:i:s');

        echo "<div class='alert alert-success' role='alert'>";
        echo "<p>Adicionado com sucesso!</p> Hora: {$horaAtual}";
        echo "</div>";
    }
    ?>
</div>