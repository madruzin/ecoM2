<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - Eco Locadora</title>
    <link rel="stylesheet" href="../estilos/cadastro.css">



</head>

<body>

    <header>
        <div class="container">
            <h1 class="logo">StartCar</h1>
            <nav class="nav">
                <a href="../index.php">Início</a>
                <a href="../back/login.php">Login</a>
                <a href="../back/contato.php">Contato</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="form-container">
            <h2>Cadastro</h2>
            <form action="processa_cadastro.php" method="POST">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                <input type="tel" name="telefone" placeholder="Telefone" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>

                <button type="submit">Cadastrar</button>

            </form>
            <div class="link">
                Já possui conta? <a href="login.php">Faça login</a>
            </div>
        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            try {
                //Capturar um arquivo externo
                include("../conexao/conexao.php");

                //Variáveis usuários
                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $email = $_POST["email"];
                $curso = $_POST["curso"];
                $prefixo = "1124";
                $id = $prefixo . rand(100, 999);

                //Consulta SQL 
                $sql = "INSERT INTO usuarios (id, nome, sobrenome, email, curso)  VALUES (?, ?, ?, ?, ?)";

                //Preparar a consulta
                $stmt = $conn->prepare($sql);

                //Vincular as variáveis do usuário com a consulta SQL
                $stmt->bind_param("sssss", $id, $nome, $sobrenome, $email, $curso);

                //Executar a consulta
                $stmt->execute();

                //Exibindo a mensagem de sucesso
                echo "<div class = 'mensagem sucesso'> Usuário cadastrado com sucesso </div>";

                //Encerrar a consulta SQL e Conexão com o banco de dados
                $stmt->close();
                $conn->close();
            } catch (mysqli_sql_exception $e) {
                echo "<div class = 'mensagem erro'> Erro ao cadastrar " . $e->getMessage() . "</div>";
            }
        }

        ?>

    </main>

    <footer>
        <p>&copy; 2025 Eco Locadora. Todos os direitos reservados.</p>
    </footer>

</body>

</html>