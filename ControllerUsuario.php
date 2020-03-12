<?php

ControllerUsuario::requisicoes();

class ControllerUsuario
{
    private static $arquivoForm;
    private static $arquivoLista;
    
    public static function requisicoes()
    {
        session_start();
        require_once 'autoload.php';
        self::$arquivoForm = "FormUsuario.php";
        self::$arquivoLista = "ListaUsuarios.php";
        if(isset($_GET["op"])) {
            switch ($_GET["op"]) {
                case "form": self::form(); break;
                case "editar": self::formEditar($_GET["id"]); break;
                case "excluir": self::excluir($_GET["id"]); break;
                case "pesquisar": self::buscarPorNome(); break;
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
        $usuario = Usuario::get($id);
        
        require_once("FormEditarUsuario.php");
    }

    public static function excluir($id)
    {

    $usuario = Usuario::get($id);

    $usuario->remove();

    header("location: ControllerUsuario.php?op=lista");

    }

    public static function salvar()
    {
        $usuario = new Usuario();
        $usuario->setNome($_POST["nome"]);
        $usuario->setCpf($_POST["cpf"]);
        $usuario->setTipo($_POST["tipo"]);
        $usuario->setSenha($_POST["senha"]);

        if(isset($_POST["id"])){
            $usuario->setId($_POST["id"]);
        }

        $usuario->salvar($usuario);

        header("location: ControllerUsuario.php?op=lista");
    }

    public static function lista()
    {
        $usuarios = (new Usuario())->getLista();

        require_once(self::$arquivoLista);
    }

    public static function buscarPorNome()
    {
        $usuarios = Usuario::getListaPorNome($_POST["pesquisa"]);

        require_once(self::$arquivoLista);
    }
    
}