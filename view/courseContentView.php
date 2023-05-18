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
            <title>Curso de Libras</title>
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
            <main class="main_painel">
                <?php
                    require "../model/connectDB.php";
                    $sqlCode = "SELECT * FROM videos INNER JOIN informacoesModulos ON videos.id = informacoesModulos.moduloVideo ORDER BY identificadorModulo;";
                    $result = $connection->query($sqlCode);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $moduleAmount = sizeof(array_unique((array) $row['identificadorModulo']));
                        $counter = 1;
                        while ($counter <= $moduleAmount) {
                ?>
                            <div>
                                <h2 class="nomeVideo">Módulo <?php echo $row['identificadorModulo']; ?></h2>
                                <p class="nomeVideo"><?php echo $row['descricaoModulo']; ?></p>
                                <?php
                                    $querySqlCode = "SELECT * FROM videos INNER JOIN informacoesModulos ON videos.id = informacoesModulos.moduloVideo WHERE identificadorModulo = '$counter' ORDER BY identificadorModulo;";
                                    $otherResult = $connection->query($querySqlCode); 
                                    while ($rowResult = $otherResult->fetch_assoc()) {
                                        if ($rowResult['identificadorModulo'] == $counter) {
                                ?>
                                        <div class="videoDetails">
                                            <h2 class="nomeVideo"><?php echo $rowResult['nomeVideo']; ?></h2>
                                            <p class="p-descricao"><strong>Descrição:</strong><?php echo $rowResult['descricaoVideo'] ?></p>
                                            <video controls class="video">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="video/mp4">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="video/m4v">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="video/ogv">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="video/webm">
                                            </video>
                                        </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                <?php
                            $counter++;
                        }
                    } else {
                ?>
                    <p>Não há conteúdos de libras disponíveis no momento, torne-se um administrador ou contate-o para mais conteúdos!</p>
                <?php
                    }
                ?>

                
            </main>

        </body>
        </html>
<?php
    } else if (!empty($_SESSION['tokenCommonUser'])) {
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="shortcut icon" href="../assets/favicon_L.ico" type="image/x-icon">
            <title>Curso de Libras</title>
        </head>
        <body>
            <header class="header">

                <div class="logo">
                    <a href="courseContentView.php"><img src="../assets/logo_libra.png" alt=""></a>
                </div>

                <nav class="nav">
                    <ul class="navbar">
                        <li>
                            <h3>Status: Usuário Comum</h3>
                        </li>           
                        <li class="btnExit">
                            <a class="aExit"href="../controller/exit.php" hreflang="pt-br" target="_self" rel="next">Sair</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main class="main_painel">
                <?php
                    require "../model/connectDB.php";
                    $sqlCode = "SELECT * FROM videos INNER JOIN informacoesModulos ON videos.id = informacoesModulos.moduloVideo ORDER BY identificadorModulo;";
                    $result = $connection->query($sqlCode);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $moduleAmount = sizeof(array_unique((array) $row['identificadorModulo']));
                        $counter = 1;
                        while ($counter <= $moduleAmount) {
                ?>
                            <div>
                                <h2 class="nomeVideo">Módulo <?php echo $row['identificadorModulo']; ?></h1>
                                <p class="nomeVideo"><?php echo $row['descricaoModulo']; ?></p>
                                <?php
                                    $querySqlCode = "SELECT * FROM videos INNER JOIN informacoesModulos ON videos.id = informacoesModulos.moduloVideo WHERE identificadorModulo = '$counter' ORDER BY identificadorModulo;";
                                    $otherResult = $connection->query($querySqlCode); 
                                    while ($rowResult = $otherResult->fetch_assoc()) {
                                        if ($rowResult['identificadorModulo'] == $counter) {
                                ?>
                                        <div class="videoDetails">
                                            <h2 class="nomeVideo"><?php echo $rowResult['nomeVideo']; ?></h2>
                                            <p class="p-descricao"><strong>Descrição:</strong><?php echo $rowResult['descricaoVideo'] ?></p>
                                            <video controls class="video">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="/mp4">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="/m4v">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="/ogv">
                                                <source src="../assets/videos/<?php echo $rowResult['uploadVideo']; ?>" type="/webm">
                                            </video>
                                        </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                <?php
                            $counter++;
                        }
                    } else {
                ?>
                        <p>Não há conteúdos de libras disponíveis no momento, torne-se um administrador ou contate-o para mais conteúdos!</p>
                <?php
                    }
                ?>
            </main>


        </body>
        </html>
<?php
    } else {
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="shortcut icon" href="../assets/favicon_L.ico" type="image/x-icon">
            <title>Curso de Libras</title>
        </head>
        <body>
                <header class="header">

        <div class="logo">
            <a href="../index.php"><img src="../assets/logo_libra.png" alt=""></a>
        </div>

            <nav class="nav">
                <ul class="navbar">

                    <li>
                        <a href="view/loginForm.php" hreflang="pt-br" target="_self" rel="next">Login</a>
                    </li>
                </ul>
            </nav>
        </header>

            <main class="main_home">
                <div class="container-text">
                    <h1>Observações:</h1>
                    <p>Registre-se, faça um cadastro ou um login com a sua conta já cadastrada, seja ela uma conta administradora ou de usuário comum!</p>
                    <p>Para vizualizar conteúdos de libras em nosso site, você deve ter uma conta registrada em nosso sistema.</p>
                    <p>A conta de usuário(a) administrador(a) possuí prívilégios administrativos como a edição de conteúdos e/ou a vizualização do mesmo.</p>
                    <p>É dado a conta de usuário(a) comum a permissão para vizualizar nossos conteúdos!</p>
                </div>
            </main>
        </body>
        </html>
<?php
    }
?>