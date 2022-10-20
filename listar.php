<?php
// recebe a informação do campo de pesquisa, caso não tenha sido digitado nenhum valor o valor será = NULL
$busca = isset($_POST['busca']) ? $_POST['busca'] : null;

// recebe a informação da caixa de seleção, caso não tenha sido digitado nenhum valor o valor será = NULL
$ft = isset($_POST['ft']) ? $_POST['ft'] : null;

//Condição para exibir o filtro de busca
if ($ft == 'nome') {
    $sql = "select * from contato where nome like '%$busca%' order by nome ASC ";
} elseif ($ft == 'telefone') {
    $sql = "select * from contato where telefone like '%$busca%' order by telefone ASC";
} elseif ($ft == 'email') {
    $sql = "select * from contato where email like '%$busca%' order by email ASC";
} else {
    $sql = "select * from contato order by nome ASC";
}
$res = $conexao->query($sql);
$qtd = $res->num_rows;

// Verifica se a conexão retornou valor de linhas modificadas > 0
if ($qtd > 0) { ?>

    <section>

        <form method='POST' action="">

            <div class="row my-4">
                <label>Buscar contato</label>
                <div class="col">

                    <select name='ft' class="form-control">
                        <option value="nome" selected>Nome</option>
                        <option value="telefone">Telefone</option>
                        <option value="email">Email</option>
                    </select>

                    <br>
                </div>
                <div class="col">
                    <input type='text' name='busca' class='form-control' value="<?= $busca ?>" autofocus><br>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>

        </form>
    </section>





<?php
    print "</form>";
    print "$qtd contato(s) encontrado(s).";
    print "<br><br>";
    print "<table class='table table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Telefone</th>";
    print "<th>Idade</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>E-mail</th>";
    print "<th>Ações</th>";
    print "</tr>";

    // Traz os dados do banco e joga para array de dados, atrubui as informações para variáveis por meio de fateamento e imprime na tabela
    while ($exibirRegistro = mysqli_fetch_array($res)) {
        $id = $exibirRegistro[0];
        $nome = $exibirRegistro[1];
        $telefone = $exibirRegistro[2];
        $idade = $exibirRegistro[3];
        $datanasc = $exibirRegistro[4];
        $email = $exibirRegistro[5];
        print "<tr>";
        print "<td>" . $id . "</td>";
        print "<td>" . $nome . "</td>";
        print "<td>" . $telefone . "</td>";
        print "<td>" . $idade . "</td>";
        print "<td>" . $datanasc . "</td>";
        print "<td>" . $email . "</td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $id . "';\"   class='btn btn-info'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                                        location.href='?page=salvar&acao=excluir&id=" . $id . "';
                                    }else{
                                        false;
                                    }                                   
                                    \"   class='btn btn-outline-danger'>Excluir</button>
            
                    </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não foi encontrado resultados!</p>";
}


?>