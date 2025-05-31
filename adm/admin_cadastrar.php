<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Veículo</title>
    <link rel="stylesheet" href="estilos/formulario.css">
</head>
<body>

<header>
    <div class="container">
        <h1 class="logo">Eco Locadora - Admin</h1>
        <nav class="nav">
            <a href="admin_veiculos.php">Gerenciar Veículos</a>
            <a href="index.php">Início</a>
        </nav>
    </div>
</header>

<main>
    <div class="form-container">
        <h2>Cadastrar Novo Veículo</h2>
        <form action="processa_veiculo.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="modelo" placeholder="Modelo (Hatch, Sedan, SUV)" required>
            <input type="text" name="marca" placeholder="Marca" required>
            <input type="number" name="ano" placeholder="Ano" required>
            <input type="number" name="valor" placeholder="Valor (R$)" step="0.01" required>
            <input type="file" name="imagem" required>
            <button type="submit" name="acao" value="cadastrar">Cadastrar</button>
        </form>
    </div>
</main>

<footer>
    <p>&copy; 2025 Eco Locadora. Todos os direitos reservados.</p>
</footer>

</body>
</html>
