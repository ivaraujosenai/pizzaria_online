<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Online</title>
    <link rel="stylesheet" href="./css/geral.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <main>
        <img src="./img/logo_pizzaria.png" alt="logo" class="logo_login">
        <form action="./src/dashboard.php" method="post">
            <label for="login" class="texto_branco">Login</label>
            <input type="text" name="login" id="login">
            <label for="senha" class="texto_branco">Senha</label>
            <input type="password" name="senha" id="senha">
            <div class="btn_container">
                <a href="./src/cadastro.php" class="btn btn_cadastro" id="">Cadastrar</a>
                <button type="submit" class="btn">Logar</button>
            </div>
        </form>
    </main>
</body>
</html>