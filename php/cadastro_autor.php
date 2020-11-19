<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/estilo.css"  >
    <script src="../js/script.js"></script>
    <title>Blog-Jeff - Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto pt-4 container-login">
                <h3 class="mb-4">Cadastro de Autores</h3>
                <form action="./actions/cadastrar_autores.php" method="POST">
                    <div class="form-group">
                        <label class="label-form" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="senha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="senha" onkeyup="valida_campos()">
                    </div>
                    <button type="submit" name="cadastrar" class="btn btn-success mb-4" id="cadastrar-autores">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>