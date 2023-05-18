<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="shortcut icon" href="../assets/favicon_L.ico" type="image/x-icon">
    <title>Login | Libra.go</title>
</head>
<body>
    
        <main>
            <h1>Login</h1>

            <form action="../controller/loginUserAccount.php" method="POST" >
                <label for="userEmail"><input class="input" type="email" name="userEmail" id="userEmail" maxlength="120" placeholder="Email" required></label>
                <label for="userPassword"><input class="input" type="password" name="userPassword" id="userPassword" maxlength="80" placeholder="Senha" required></label>
                    <input type="submit" name="sendBtn" value="Enviar" class="sendBtn">
                    
            </form>
            <p>Não possui conta? <a href="registerForm.php" hreflang="pt-br" target="_self">Fazer cadastro</a></p>
        </main>
    <script>
        <?php
            if (isset($_SESSION['allowedFormatError'])) {
                echo file_get_contents("../assets/js/allowedFormatError.js");
            }
        ?>
    </script>
</body>
</html>