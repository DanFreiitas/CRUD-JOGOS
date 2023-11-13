<div class="container-fluid mt-5 mb-5">
    <h1>Lista de jogos</h1>
</div>

<div class="container-fluid bg-light pt-3 pb-3 pl-5">
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Jogo</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Gênero</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <ul>
                <?php
                $jogo = new Jogos($pdo);
                $jogos = $jogo->listar();
                $cont = 0;
                foreach ($jogos as $jogo) {
                    $cont++;
                    echo "<tr>";
                    echo "<th scope='row'>{$cont}</th>";
                    echo "<td>{$jogo['nome']}</td>";
                    echo "<td>{$jogo['plataforma']}</td>";
                    echo "<td>{$jogo['genero']}</td>";
                    echo "<td><a href='?page=editar&id={$jogo['id']}' class='btn btn-secondary btn-sm'>Editar</a> 
                    <a href='?page=excluir&id={$jogo['id']}' class='btn btn-danger btn-sm'>Excluir</a></td>";
                    echo "</tr>";
                }

                ?>
            </ul>
        </tbody>
    </table>
    <?php
    if (isset($_GET['sucess'])) {
        date_default_timezone_set('America/Sao_Paulo');
        $horaAtual = date('H:i:s');

        echo "<div class='alert alert-success' role='alert'>";
        echo "<p>Atualizado com sucesso!</p> Hora: {$horaAtual} <br>";
        echo "</div>";
    } ?>
    <a href="?page=novo" class="btn btn-secondary">Adicionar novo</a>
</div>