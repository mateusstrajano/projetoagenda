<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-tabs">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Cadastrar Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Contatos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                // Inicia a coneção com o banco de dados, verifica os casos a serem executados. Recebe as requisições e direciona para os arquivos execurarem as ações
                include("conexao.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("cadastrar.php");
                        break;
                    case "listar":
                        include("listar.php");
                        break;
                    case "salvar":
                        include("salvar.php");
                        break;
                    case "editar":
                        include("editar.php");
                        break;
                    case "buscar":
                        include("listar.php");
                        break;
                    default:
                        print "<img class='mx-auto d-block' src='contato.png' width='600'>";
                }
                ?>

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>