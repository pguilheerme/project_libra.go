<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="shortcut icon" href="../assets/favicon_L.ico" type="image/x-icon">
    <title>Cadastro | libra.go</title>
</head>
<body>
    <main>
        <h1>Cadastro</h1>

        <form action="../controller/insertUserRegister.php" method="POST">
            <label for="fullNameUser"></label><input class="input" type="text" name="fullName" id="fullNameUser" maxlength="70" placeholder="Nome completo" required></label>
            <label for="emailUser"><input class="input" type="email" name="emailUser" id="emailUser" maxlength="50" placeholder="Email" required></label>
            <label for="passwordUser"><input class="input" type="password" name="passwordUser" id="passwordUser" maxlength="20" placeholder="Senha" required></label>
            <select name="typeUser" id="typeUser">
                <option value="administrador">Administrador</option>
                <option value="usuario_comum">Usuário Comum</option>
            </select>
            <input type="submit" value="Enviar" name="sendBtn" id="sendBtn" class="sendBtn">
        </form>
        <p>Já possui uma conta? <a href="loginForm.php" hreflang="pt-br" target="_self">Fazer login</a></p>
    </main>
</body>
</html>