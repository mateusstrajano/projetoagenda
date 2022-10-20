<!-- Recebe as informações das variaveis via POST dos arquivos cadastrar.php, editar.php -->
<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $erro = false;
        //Valida se o email ja exite no banco de dados
        $mail = $_POST["email"];
        $res_usr = "select id from contato where email='" . $mail . "'";
        $result_usr = $conexao->query($res_usr);

        if (($res_usr) and ($result_usr->num_rows != 0)) {
            $erro = true;
            print "<script>alert('Este EMAIL ja está sendo utilizado! Digite um email válido.')</script>";
        }

        // Valida se o telefone ja existe no banco de dados
        $fone = $_POST["telefone"];
        $res_usr = "select id from contato where telefone='" . $fone . "'";
        $result_usr = $conexao->query($res_usr);
        if (($res_usr) and ($result_usr->num_rows != 0)) {
            $erro = true;
            print "<script>alert('Este TELEFONE ja está sendo utilizado! Digite um telefone válido.')</script>";
        }

        // Caso os dados inseridos forem validos, cria novo contato na tabela
        if (!$erro) {


            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $idade = $_POST["idade"];
            $datanasc = $_POST["datanasc"];
            $email = $_POST["email"];

            $sql = "INSERT INTO contato (nome, telefone, idade, datanasc, email) VALUES ('{$nome}', '{$telefone}', '{$idade}', '{$datanasc}', '{$email}')";

            $res = $conexao->query($sql);

            if ($res == true) {
                print "<script>alert('Contato cadastrado com sucesso');</script>";
                print "<script>location.href='?page=novo'</script>";
            } else {
                print "<script>alert('Erro ao cadastrar contato');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;
        } else {
            print "<script>location.href='?page=novo';</script>";
        }
    case 'editar':
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $idade = $_POST["idade"];
        $datanasc = $_POST["datanasc"];
        $email = $_POST["email"];

        $sql = "UPDATE contato SET
                        nome='{$nome}',
                        telefone='{$telefone}',
                        idade='{$idade}',
                        datanasc='{$datanasc}',
                        email='{$email}'
                    WHERE
                        id=" . $_REQUEST["id"];

        $res = $conexao->query($sql);

        if ($res == true) {
            print "<script>alert('Contato editado com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Erro ao editar contato');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

        // Exclui as informações do banco de dados usando como chave o ID
    case 'excluir':
        $sql = "DELETE FROM contato WHERE id=" . $_REQUEST["id"];
        $res = $conexao->query($sql);

        if ($res == true) {
            print "<script>alert('Contato excluido com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possivel exluir o contato');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}

?>