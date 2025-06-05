<?php

    if(isset($_POST['id'])){
        include("../conexao/conexao.php");

        $id = $_POST['id'];

        //Prepara a Consulta SQL para excluir o cadastro
        $sql = "DELETE FROM clientes WHERE ID = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id);
            //Executa a query
            $stmt->execute();

            //Redirecionar o usuario
            header("Location: verificarCadastro.php");
            $stmt->close();
        } else {
            echo "<div class='mensagem erro'> Erro Consulta </div>";
        }
    
        $conn->close();
    }
?>
