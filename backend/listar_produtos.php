<?php
   include 'conexao.php';

   try{

       
       $sql = "SELECT * FROM tb_produtos";

       
       $comando = $con->prepare($sql);

       // executa o comando
       $comando->execute();

       // variavel que irá guardar o resultado da execução do comando
       $retorno = $comando->fetchALL(PDO::FETCH_ASSOC);

       $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

       echo $json;

}catch(PDOException $erro){
   $retorno = array(
                   'retorno' => 'erro',
                   'mensagem' =>$erro->getMessage()
                   
   );

   $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
   
   echo $json;
  
}

$con = null;

?>

