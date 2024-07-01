<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"><link>
</head>
<body>

    <a href="home.php">Voltar</a>

    <div class="box">
        <form action="testLogin.php" method="post">
            <fieldset>
                <legend><b>Faça o login</b></legend>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>