<?php
class autentificacao{
    private $conexao;
    public function__construct($conexao){
        $this->conexao= $conexao;
    }
    public function verificarUsuario($email,$senha){
        $query="SELECT *FROM usuario WHERE email =?";
        $stmt=$this->conexao->preprare($query);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1){
            $usuario =$result->fetch_assoc();
            if(password_verify($senha, $usuario['senha'])){
                return $usuario;
            }
        }
        return false;
    }  
}
?>