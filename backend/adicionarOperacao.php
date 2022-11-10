<?php
    include 'conexao.php';

    try {

        $id = $_POST['id-produto-acao'];
        $quantidade = $_POST['quantidade'];
        $acao = $_POST['acao'];

        
        $sql = "INSERT INTO tb_entrada_saida (id_produto,quantidade,id_operacao) VALUES ($id, '$quantidade', $acao)";
        
        $comando = $con->prepare($sql);
        
        echo $comando->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>