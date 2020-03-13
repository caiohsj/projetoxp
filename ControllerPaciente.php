<?php

ControllerPaciente::requisicoes();

class ControllerPaciente
{
    private static $arquivoForm;
    private static $arquivoLista;
    
    public static function requisicoes()
    {
        session_start();
        require_once 'autoload.php';
        self::$arquivoForm = "FormPaciente.php";
        self::$arquivoLista = "ListaPacientes.php";
        if(isset($_GET["op"])) {
            switch ($_GET["op"]) {
                case "form": self::form(); break;
                case "editar": self::formEditar($_GET["id"]); break;
                case "excluir": self::excluir($_GET["id"]); break;
                case "pesquisar": self::buscarPorCpf(); break;
                case "salvar": self::salvar(); break;
                case "lista": self::lista(); break;
                default: self::form(); break;
            }
        }
        else {
            self::form();
        }
    }

    public static function form()
    {
        require_once(self::$arquivoForm);
    }

    public static function formEditar($id)
    {
        $paciente = Paciente::get($id);
        
        require_once("FormEditarPaciente.php");
    }

    public static function excluir($id)
    {

    $paciente = Paciente::get($id);

    $paciente->remove();

    header("location: ControllerPaciente.php?op=lista");

    }

    public static function salvar()
    {
        $paciente = new Paciente();
        $paciente->setNome($_POST["nome"]);
        $paciente->setCpf($_POST["cpf"]);
        $paciente->setTelefone($_POST["telefone"]);

        if(isset($_POST["id"])){
            $paciente->setId($_POST["id"]);
        }

        $paciente->salvar($paciente);

        header("location: ControllerPaciente.php?op=lista");
    }

    public static function lista()
    {
        $pacientes = (new Paciente())->getLista();

        require_once(self::$arquivoLista);
    }

    public static function buscarPorCpf()
    {
        $pacientes = Paciente::getListaPorCpf($_POST["pesquisa"]);

        require_once(self::$arquivoLista);
    }
    
}