
<?php
include_once_DIR_.'./Conexao.php';
include_once_DIR_.'./Usuario.php';

class UsuarioDAO {
    private $pdo;
    public function _construct(){
        $this ->pdo= Conexao::getConexao();
    }

    public function insere(Usuario $usuario){
        $sql= "INSERT INTO usuario(nome, email, senha) VALUES(?,?,?)";
        $stmt= $this->pdo->prepare($sql);
       // $stmt->bindParamns(1,$usuario->nome);


        $stmt-> execute([$usuario->nome,$usuario->email,$usuario->senha]);
    }


    public function busca_usr_email($email){
        $sql="SELECT * FROM usuarios Where email=?";
        $stmt = $this->pdo->prapare($sql);
        $stmt->execute([$email]);
        $registro =$stmt->fetch();
        $usr= new Usuario($registro["nome"], $registro["email"],$registro["senha"]);
        $usr->id=$registro["id"];
        return $usr;
    }
    public function Lista_todos(){

        $sql="SELECT * FROM usuarios";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
        $registros=$stmt->fetchAll();
        $usuario=[];
        foreach($registros as $registro){
            $usr= new Usuario($registro["nome"], $registro["email"],$registro["senha"]);
            $usr->id+$registro["id"];
            array_push($usuarios,$usr);
        }
        return $usuario


    }



        public function autenticar($email, $senha){
            $usr=$this->busca_usr_email($email)
            if(isset($usr) && $usr =>senha ==$senha){
                return $usr;
            }
            return null;
            
        }
}



?>