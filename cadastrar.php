<h1>Novo Contato</h1>
<form action="?page=salvar" method="POST" id="formulario">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="fone" pattern="[0-9]{11}" id="telefone" name="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="number" name="idade" min="0" id="idade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="datanasc" id="datanasc" class="form-control" max="2022-10-20" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submmit" onclick="validar()" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-outline-secondary">Limpar</button>
    </div>
</form>
