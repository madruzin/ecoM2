<?php
    $login = $_POST["email"];
    $senha = $_POST["senha"];
    $vinculo = $_POST["vinculo"];

    if(isset($_POST["email"])){
        //exibir as informações passadas pelo form
       //echo var_dump($_POST);
   
        //Salva o e-mail enviado
        $email =$_POST["email"];

        //Recebe as informações de conexão com  DB banco de dados
        include("../conexao/conexao.php");

        //Consultando ao banco de dados
        $sql ="SELECT * FROM clientes WHERE email= ?";
       
        //Preparar a conexão junto da consulta
        $stmt = $conn->prepare($sql);
   
        //Validando se a conexão foi feita com sucesso
        if($stmt){
            //Troca a informação de e-mail pela ? no $sql
            $stmt->bind_param("s",$email);
            //Executa o Comando
            $stmt->execute();
            //Salva o resultado da consulta
            $resultado = $stmt->get_result();
           
            if ($resultado->num_rows >0){

                $row = $resultado->fetch_assoc();
                if($row['senha'] == $senha && $row['vinculo'] == $vinculo){
                    if ($vinculo == "clientes") {
                        header("Location: index.php");
                    }else {
                        header("Location: adm_cadastrar.php");
                    }
                }

            }}}
?>