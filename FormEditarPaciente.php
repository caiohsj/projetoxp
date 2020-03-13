<html>
    <head>
        <title>XP</title>
        <!-- usar bootstrap online -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>

    <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: #ffeaa7;
  background-repeat: no-repeat;
  overflow-y: scroll;
}

.signupForm h2 {
    color: black;
}

.signupSection {
  margin-top: 260px;
  margin-left: 200px;
  background-repeat: no-repeat;
  position: left;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  height: 480px;
  text-align: center;
  display: flex;
  color: white;
}

.info {
  width: 45%;
  background: rgba(20, 20, 20, .8);
  padding: 0px 0;
  border-right: 5px solid rgba(30, 30, 30, .8);
  
}

.signupForm {
  width: 100%;
  padding: 30px 0;
  background: #ffeaa7;
  transition: .2s;
  h2 {
    font-weight: 300;
  }
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: black;
  outline: none;
}

.inputFields::placeholder {
    color: black;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid rgba(10, 180, 180, 1);
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  &:hover {
    background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
}


    
    
    </style>
    <body>
    <?php require_once("Cabecalho.php"); ?>

<div class="signupSection">
 
<form action="ControllerPaciente.php?op=salvar" class="signupForm" method="post">
    <h2>Cadastro de Pacientes</h2>

    <input type="hidden" id="id" name="id" value="<?= $paciente->getId(); ?>">
    <ul class="noBullet">
      <li>
        <input type="text" class="inputFields" id="nome" name="nome" placeholder="Nome" value="<?= $paciente->getNome(); ?>" />
      </li>
      <li>
        <input type="text" class="inputFields" id="cpf" name="cpf" placeholder="CPF" value="<?= $paciente->getCpf(); ?>">
      </li>
      <li>
        <label for="telefone"></label>
        <input type="text" class="inputFields" id="telefone" name="telefone" placeholder="telefone" value="<?= $paciente->getTelefone(); ?>">
      </li>
      <li>
      </li>
      <li id="center-btn">
        <button type="submit" id="join-btn" name="join" alt="Join" value="Join">Salvar</button>
      </li>
    </ul>
  </form>
</div>

</body>
</html>



<?php
require_once("Rodape.php");
?>