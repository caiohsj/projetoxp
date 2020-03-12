<?php require_once("Cabecalho.php"); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Editar Usuário</h3>
    </div>
    <div class="panel-body">
        <form action="ControllerUsuario.php?op=salvar" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id" placeholder="Id" value="<?= $usuario->getId(); ?>">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?= $usuario->getNome(); ?>">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="<?= $usuario->getCpf(); ?>">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="senha" value="<?= $usuario->getSenha(); ?>">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" class="form-control">
                    <option value="medico" <?php if($usuario->getTipo() === "medico") echo"selected";  ?>>Medico</option>
                    <option value="proprietario" <?php if($usuario->getTipo() === "proprietario") echo"selected";  ?>>Proprietario</option>
                    <option value="secretario" <?php if($usuario->getTipo() === "secretario") echo"selected";  ?>>Secretario</option>
                    <option value="paciente" <?php if($usuario->getTipo() === "paciente") echo"selected";  ?>>Paciente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>
</div>



<?php
require_once("Rodape.php");
?>