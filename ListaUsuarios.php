<?php require_once("Cabecalho.php"); ?>

<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary" href="">Novo Usuário</a>
    </div>
    <div class="col-md-8">
        <!-- form pesquisa -->
        <form action="ControllerUsuario.php?op=pesquisar"
              method="post"
              class="form-inline text-right">
            <div class="form-group">
                <label for="descricao">Pesquisa por nome</label>
                <input type="text" class="form-control"
                       id="pesquisa" name="pesquisa"
                       value="<?=$pesquisa; ?>">
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </div>
        </form>
        <!-- fim form pesquisa -->
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Listagem de Usuários</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Tipo</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?=$usuario->getId();?></td>
                    <td><?=$usuario->getNome();?></td>
                    <td><?=$usuario->getCpf();?></td>
                    <td><?=$usuario->getTipo();?></td>
                    <td><a href="ControllerUsuario.php?op=editar&id=<?=$usuario->getId();?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="ControllerUsuario.php?op=excluir&id=<?=$usuario->getId();?>" class="btn btn-danger">Excluir</a></td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
