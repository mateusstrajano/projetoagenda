<h1>Editar Contato</h1>
<?php
$sql = "SELECT * FROM contato WHERE id=" . $_REQUEST["id"];
$res = $conexao->query($sql);
$row = $res->fetch_object();




?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" pattern="[0-9]{11}" value="<?php print $row->telefone; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="text" name="idade" value="<?php print $row->idade; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="datanasc" value="<?php print $row->datanasc; ?>" class="form-control" max="2022-10-20" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn">Limpar</button>
    </div>
</form>