<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="../Content/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
        <script src="../Content/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>

        <!-- JQuery -->
        <script src="../Content/libs/jquery/jquery-3.7.1.min.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Content/css/main.css">
        <script src="../Content/js/login.js"></script>

        <title>Área Administrativa - Login</title>
    </head>

    <body class="bg-login">
        <div class="loading" id="loading">Loading</div>

        <div class="container centralize">
            <div id="divLogin" class="card">
                <div class="card-body mx-5 my-5">
                    <h1 class="text-center mb-5 h2">Área Restrita</h1>

                    <form id="formLogin" action="../Service/loginService.php" method="POST">
                        <div class="form-group row mb-3">
                            <label for="username" class="mb-1">Usuário</label>
                            <input type="text" class="form-control col-12" id="username" name="username" required>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="mb-1">Senha</label>
                            <input type="password" class="form-control col-12" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary col-12 mt-4" id="btnLogin">Entrar</button>
                        <button type="button" class="btn btn-secondary col-12 mt-4" id="btnRegister" onclick="showRegister()">Cadastre-se</button>
                    </form>
                    
                    <form id="formRegister" action="../Service/userService.php" method="POST">
                        <div class="form-group row mb-3">
                            <label for="username" class="mb-1">Nome</label>
                            <input type="text" class="form-control col-12" id="registerName" name="registerName" required>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="username" class="mb-1">Usuário</label>
                            <input type="text" class="form-control col-12" id="registerUser" name="registerUser" required>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="mb-1">Senha</label>
                            <input type="password" class="form-control col-12" id="registerPassword" name="registerPassword" required>
                        </div>

                        <button type="submit" class="btn btn-primary col-12 mt-4" id="btnSave">Cadastrar</button>
                        <button type="button" class="btn btn-danger col-12 mt-4" id="btnCancel" onclick="hideRegister()">Voltar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>