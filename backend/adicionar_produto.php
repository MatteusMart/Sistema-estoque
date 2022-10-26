<?php
    include_once 'conexao.php';
    include 'functions.php';

    try{
        
        $produto = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $fornecedor = $_POST['fornecedor'];
        $estoque = $_POST['estoque'];

        $sql = "INSERT INTO tb_produtos (`produto`,`categoria`,`fornecedor`,`estoque`) VALUES ('$produto','$categoria','$fornecedor','$estoque')";

        $msg = 'Produto adicionado com sucesso';

        insertUpdadeDelete($sql,$msg);

        header('location: ../paginaInicial.php');

    }catch(PDOException $erro){
        pdocatch($erro);
    }

    $con = null;
?>