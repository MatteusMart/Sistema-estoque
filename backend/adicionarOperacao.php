<?php
    include 'conexao.php';

    try {

        $id = $_POST['id-produto-acao'];
        $quantidade = $_POST['quantidade'];
        $acao = $_POST['acao'];


        
        $sql = "INSERT INTO tb_entrada_saida (id_produto,quantidade,id_operacao) VALUES ($id, '$quantidade', $acao)";
        
        $comando = $con->prepare($sql);
        
        $comando->execute();
        
        if($acao == 1){
            $sql = "UPDATE tb_produtos set estoque = estoque + $quantidade WHERE id = $id ";
        }else{
            $sql = "UPDATE tb_produtos set estoque = estoque - $quantidade  WHERE id = $id ";
        }

        $comando = $con->prepare($sql);
        
        $comando->execute();

        $retorno = array (
            'retorno'=>'ok',
            'mensagem' => 'Atualizado com sucesso'
        );

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        echo $json;



    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>