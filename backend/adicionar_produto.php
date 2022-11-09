<?php
    include_once 'conexao.php';
    include 'functions.php';

    try{
        
        $produto = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $fornecedor = $_POST['fornecedor'];
        $estoque = $_POST['estoque'];
        $codigo = $_POST['codigo'];

        $sql = "INSERT INTO tb_produtos (`produto`,`categoria`,`fornecedor`,`estoque`,`codigo`) VALUES ('$produto','$categoria','$fornecedor','$estoque','$codigo')";

        $msg = 'Produto adicionado com sucesso';

        insertUpdadeDelete($sql,$msg);

        header('location: ../paginaInicial.php');

    }catch(PDOException $erro){
        pdocatch($erro);
    }

    $con = null;
?>