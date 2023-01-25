<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM user WHERE id=" . $_REQUEST["id"];

include_once('config.php');
$res = $conexao->query($sql);
$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="username" value="<?php print $row->username; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-Mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="birthday" value="<?php print $row->birthday; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit" >Enviar</button>
    </div>
</form>