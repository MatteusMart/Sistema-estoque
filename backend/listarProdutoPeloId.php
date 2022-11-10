<?php

require_once('conexao.php');

try {

    $id = $_POST['id'];

    $sql = "SELECT * FROM tb_produtos WHERE id = {$id}";

    $comando = $con->prepare($sql);

    $comando->execute();

    if ($comando->rowCount()) {
    
        $produto = $comando->fetch(PDO::FETCH_ASSOC);

        $retorno = [
            'dados' => $produto,
            'retorno' => true
        ];

    } else {

        $retorno = [
            'retorno' => false,
            'mensagem' => 'Produto não encontrado!'
        ];
    }

} catch (PDOException $e) {
    $retorno = [
        'mensagem' => $e->getMessage(),
        'retorno' => false
    ];
}

$json = json_encode($retorno);

echo $json;