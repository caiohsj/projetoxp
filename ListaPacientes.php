<?php require_once("Cabecalho.php"); ?>

<div class="row">
    <div class="col-md-4">
        <a class="btn btn-default" href="ControllerPaciente.php?op=form">Novo Paciente</a>
    </div>
    <div class="col-md-8">
        <!-- form pesquisa -->
        <form action="ControllerPaciente.php?op=pesquisar"
              method="post"
              class="form-inline text-right">
            <div class="form-group">
                <label for="descricao">Pesquisa por Cpf</label>
                <input type="text" class="form-control"
                       id="pesquisa" name="pesquisa"
                       value="<?=$pesquisa; ?>">
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </div>
        </form>
        <!-- fim form pesquisa -->
    </div>
</div>


<div class="panel panel-default" >
    <div class="panel-heading" style="background:#ffeaa7;">
        <h4 >Listagem de Pacientes</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr >
                    <td><?=$paciente->getId();?></td>
                    <td><?=$paciente->getNome();?></td>
                    <td><?=$paciente->getCpf();?></td>
                    <td><?=$paciente->getTelefone();?></td>
                    <td><a href="ControllerPaciente.php?op=editar&id=<?=$paciente->getId();?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="ControllerPaciente.php?op=excluir&id=<?=$paciente->getId();?>" class="btn btn-danger">Excluir</a></td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
