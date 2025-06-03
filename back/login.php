<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Eco Locadora</title>
   <link rel="stylesheet" href="../estilos/formulario.css" />
</head>
<body>

<header>
    <div class="container">
        <h1 class="logo">Eco Locadora</h1>
        <nav class="nav">
            <a href="index.php">Início</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="contato.php">Contato</a>
        </nav>
    </div>
</header>

<main>
    <div class="form-container">
        <h2>Login</h2>
        <form action="processa_login.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <select name="vinculo" id="vinculo">
                <option value="funcionario">Funcionario</option>
                <option value="cliente">Cliente</option>
            </select>
            <button type="submit">Entrar</button>
        </form>
        <div class="link">
            Ainda não possui conta? <a href="cadastro.php">Cadastre-se</a>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2025 Eco Locadora. Todos os direitos reservados.</p>
</footer>

</body>
</html>
