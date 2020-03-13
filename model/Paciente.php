<?php

class Paciente
{
    private $id;
    private $nome;
    private $cpf;
    private $telefone;
    

    

    static function salvar($paciente)
    {
        $dao = new DaoPaciente();
        
        if($paciente->getId() != null) {
            $paciente = $dao->altera($paciente);
        } else {
            $paciente = $dao->insere($paciente);
        }

        return $paciente;
    }


    public static function get($id)
    {
        $dao = new DaoPaciente();
        $paciente = $dao->getPorId($id);
        return $paciente;
    }

    public static function getLista()
    {
        $dao = new DaoPaciente();
        $pacientes = $dao->getLista();
        return $pacientes;
    }

    public static function getListaPorCpf($cpf)
    {
        $dao = new DaoPaciente();
        $pacientes = $dao->getListaPorCpf($cpf);
        return $pacientes;
    }

    public function remove()
    {
        $dao = new DaoPaciente();
        $dao->delete($this->getId());


    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    

}