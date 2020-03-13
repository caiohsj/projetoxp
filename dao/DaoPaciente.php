<?php

class DaoPaciente {

    private static $conexao;

    function __construct()
    {
        self::$conexao = Conexao::getConexao();
    }

    public function insere(Paciente $paciente)
    {
        $sql = "insert into pacientes(nome,cpf,telefone) values(:nome,:cpf,:telefone)";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->bindValue(":nome",$paciente->getNome());
        $sqlpreparado->bindValue(":cpf",$paciente->getCpf());
        $sqlpreparado->bindValue(":telefone",$paciente->getTelefone());
        $sqlpreparado->execute();
    }

    public function altera(Paciente $paciente)
    {
        $sql = "update pacientes set nome = :nome, cpf = :cpf, telefone = :telefone"
                ." where id = :id";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->bindValue(":id",$paciente->getId());
        $sqlpreparado->bindValue(":nome",$paciente->getNome());
        $sqlpreparado->bindValue(":cpf",$paciente->getCpf());
        
        $sqlpreparado->bindValue(":telefone",$paciente->getTelefone());
        $sqlpreparado->execute();
    }

    

    public function getPorId($id)
    {

        $sql = "select * from pacientes where id = :id";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->bindValue(":id",$id);
        $sqlpreparado->setFetchMode(PDO::FETCH_CLASS, "Paciente");
        $sqlpreparado->execute();
        $paciente = $sqlpreparado->fetch();//executa sql e salva resultado

        return $paciente;
    }

    public function delete($id)
    {

        $sql = "delete from pacientes where id = :id";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->bindValue(":id",$id);
        $sqlpreparado->execute();
    
    }

    public function getLista()
    {

        $sql = "select * from pacientes";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->setFetchMode(PDO::FETCH_CLASS, "Paciente");
        $sqlpreparado->execute();
        $paciente = $sqlpreparado->fetchAll();//executa sql e salva resultado

        return $paciente;
    }

    public function getListaPorCpf($cpf)
    {

        $sql = "select * from pacientes where cpf=:cpf";
        $sqlpreparado = self::$conexao->prepare($sql);
        $sqlpreparado->bindValue(":cpf",$cpf);
        $sqlpreparado->setFetchMode(PDO::FETCH_CLASS, "Paciente");
        
        $sqlpreparado->execute();
        $paciente = $sqlpreparado->fetchAll();//executa sql e salva resultado

        return $paciente;
    }

}    

