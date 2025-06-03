<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Eco Locadora</title>
   <link rel="stylesheet" href="../ecoM2/estilos/formulario.css" />
</head>
<body>

<header>
    <div class="container">
        <h1 class="logo">Eco Locadora</h1>
        <nav class="nav">
            <a href="index.php">Início</a>
            <a href="login.php">Login</a>
            <a href="contato.php">Contato</a>
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
</main>

<footer>
    <p>&copy; 2025 Eco Locadora. Todos os direitos reservados.</p>
</footer>

</body>
</html>
