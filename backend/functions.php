<?php

    include_once 'conexao.php';

    function insertUpdadeDelete ($sql) {

    $comando = $GLOBALS['con']->prepare($sql);

    $comando->execute();

    $return = array('retorno'=>'ok',
                    'message' => 'cadastrado com sucesso');

    // Cria um json com relação ao array acima
    $json = json_encode($return, JSON_UNESCAPED_UNICODE);

    echo $json;

    }

    function pdocatch($erro){
        // tratamento de erro ou exceção
        $retorno = array('retorno'=>'erro',
                         'message'=>$erro->getMessage());
    
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    
        echo $json;
    
    }
?>