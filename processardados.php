<?php

    print"<h3><div align='center'><h3>Processando dados do formulário</h3></div>";
    
    $cpf_cliente=$_POST['cpf_cliente'];
    $nome_cliente=$_POST['Nome_Cliente'];
    $placa=$_POST['placa'];
    $modelo=$_POST['Modelo'];
    $categoria=$_POST['Categoria'];
    $date=$_POST['data_agendamento'];
    
    echo"$cpf_cliente<br>";
    echo"$nome_cliente<br>";
    echo"$placa<br>";
    echo"$modelo<br>";
    echo"$categoria<br>";
    echo"$date<br>";
?>