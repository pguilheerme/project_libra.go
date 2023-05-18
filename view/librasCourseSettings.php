<?php
    session_start();
    if (!empty($_SESSION['tokenAdminUser'])) {
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="shortcut icon" href="../assets/favicon_L.ico" type="image/x-icon">
            <title>Configurações do Curso | Libra.go</title>
        </head>
        <body>
            
            <header class="header">

                <div class="logo">
                    <a href="courseContentView.php"><img src="../assets/logo_libra.png" alt=""></a>
                </div>

                <nav class="nav">
                    <ul class="navbar">
                        <li>
                            <h3>Status: Administrador</h3>
                        </li>           
                        <li>
                            <a href="librasCourseSettings.php" target="_self" hreflang="pt-br" rel="prev">Editar Curso</a>
                        </li>
                        <li class="btnExit">
                            <a class="aExit"href="../controller/exit.php" hreflang="pt-br" target="_self" rel="next">Sair</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main class="main-all">
                    <h2>Painel do Administrador</h2>
                    <form action="../controller/processingData.php" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Configurações de Vídeo</legend>
                            <label for="nameVideo"><input class="input" type="text" name="nameVideo" id="nameVideo" maxlength="60" placeholder="Digite o nome do vídeo" required></label>
                            <label for="descriptionVideo"><input class="input" type="text" name="descriptionVideo" id="descriptionVideo" maxlength="60" placeholder="Informe a descrição do vídeo" required></label>
                            <label for="uploadVideo"><input class="input" type="file" name="uploadVideo" id="uploadVideo" maxlength="80" placeholder="Faça o upload do vídeo" required></label>
                        </fieldset>
                        <fieldset>
                            <legend>Configurações de Módulo</legend>
                            <label for="moduleIdentifier">Número de Identificação do Módulo:</label>
                            <input class="input" type="number" name="moduleIdentifier" id="moduleIdentifier" min="1" max="100" placeholder="Digite o número do módulo" required>
                            <label for="moduleDescription">Descrição:</label>
                            <input class="input" type="text" name="moduleDescription" id="moduleDescription" maxlength="250" placeholder="Informe a descrição do módulo" required>
                        </fieldset>
                        <input type="submit" value="Enviar" name="sendBtn" id="sendBtn" class="sendBtn">
                    </form>
            </main>

        </body>
        </html>
<?php
    } else {
        header("location: loginForm.php");
    }
?>