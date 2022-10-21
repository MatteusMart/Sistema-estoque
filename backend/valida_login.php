<?php
    include 'conexao.php';

    try{
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT email,senha FROM tb_login WHERE email = '$email' and senha = '$senha'";

        $comando = $con->prepare($sql);

        $comando->execute();

        $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

        if($dados != null){
            $retorno = ['retorno'=>'ok'];
            $json = json_encode ($retorno , JSON_UNESCAPED_UNICODE);
            echo $json;
            exit();
        }else{
            $retorno = ['retorno'=>'error'];
            $json = json_encode ($retorno , JSON_UNESCAPED_UNICODE);
            echo $json;
            exit();
        }
    }catch(PDOException $erro){

    }
?>