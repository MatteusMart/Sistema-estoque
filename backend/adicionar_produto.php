<?php
    include_once 'conexao.php';
    include 'functions.php';

    try{
        
        $produto = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        $sql = "INSERT INTO tb_produtos (`produto`,`categoria`,`preco`,`estoque`) VALUES ('$produto','$categoria','$preco','$estoque')";

        $msg = 'Produto adicionado com sucesso';

        insertUpdadeDelete($sql,$msg);

    }catch(PDOException $erro){
        pdocatch($erro);
    }

    $con = null;
?>