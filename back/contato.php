<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Eco Locadora</title>
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
        <h2>Fale Conosco</h2>
        <form action="processa_contato.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <input type="text" name="assunto" placeholder="Assunto" required>
            <textarea name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</main>

<footer>
    <p>&copy; 2025 Eco Locadora. Todos os direitos reservados.</p>
</footer>

</body>
</html>
