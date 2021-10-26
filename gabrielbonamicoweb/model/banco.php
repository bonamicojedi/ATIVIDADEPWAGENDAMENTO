<?php
//timezone
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','agendamentoweb');
    
class Banco{

    protected $mysqli;
    private $cadastro;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setAgendamentos($nome,$telefone,$idade,$data_contato,$motivo){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos (`nome`, `telefone`, `idade`, `data_contato`, `motivo`) VALUES (?,?,?,?,?);");
        $stmt->bind_param("sssss",$nome,$telefone,$idade,$data_contato,$motivo);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getAgendamentos($id) {
        try {
            if(isset($id) && $id > 0){
                $stmt = $this->mysqli->query("SELECT * FROM agendamentos WHERE id = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM agendamentos;");
            }
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['nome'] = $l['nome'];
                $f_lista[$i]['telefone'] = $l['telefone'];
                $f_lista[$i]['idade'] = $l['idade'];
                $f_lista[$i]['data_contato'] = $l['data_contato'];
                $f_lista[$i]['motivo'] = $l['motivo'];
                $i++;
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function updateAgendamentos($id,$nome,$telefone,$idade,$data_contato,$motivo){
       $stmt = $this->mysqli->query("UPDATE agendamentos SET `nome` = '" . $nome . "', `telefone` =  '" . $telefone . "', `idade` =  '" . $idade . "', `data_contato` =  '" . $data_contato . "', `motivo` =   '" . $motivo . "' WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }
	public function deleteAgendamentos($id){
        $stmt = $this->mysqli->query("DELETE FROM agendamentos WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }
}    
?>