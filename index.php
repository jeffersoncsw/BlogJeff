<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./css/estilo.css"  >
    <title>Blog-Jeff - Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto pt-4 container-login">
                <h3 class="mb-4">Login</h3>
                <form action="./php/actions/login.php" method="POST">
                    <div class="form-group">
                        <label class="label-form" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="senha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>
                    <button type="submit" name="logar" class="btn btn-primary mb-4">Entrar</button>
                    <a href="./php/cadastro_autor.php" name="cadastrar" class="btn btn-success mb-4">Cadastrar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>