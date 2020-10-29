<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script type="text/javascript" src="../js/script.js"></script>

    <title>Login</title>
</head>
<body>
    <div class="container-login">
        <form action="">
            <h2>Login</h2>
            <div class="grupo-form">
                <label for="email">E-mail:</label>
                <input class="input-texto" type="email" name="email" id="email">
            </div>
            <div class="grupo-form">
                <label for="senha">Senha:
                    <div id="vermelho"></div>
                    <div id="amarelo"></div>
                    <div id="verde"></div>
                </label>
            <input class="input-texto" type="password" name="senha" id="senha" onkeyup="teste_forca(this);">
            </div>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>