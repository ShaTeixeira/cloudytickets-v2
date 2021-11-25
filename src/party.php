<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> <?php echo $_SESSION['nome']; ?></title>

    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

    <?php include '../sidebar.php'; ?>

    <!-- Page Content -->
    <div style="margin-left:5%">
        <div class="w3-container">
            <main>
                <!--Destaques-->
                <section id="projetos">
                    <div class="container">
                        <h1>Festas</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- Festa do Povo Animado -->
                                <article class="cards-interval">
                                    <h3>Festa do Povo Animado</h3>
                                    <img src="../assets/images/povoanimado.jpg" alt="Foto de Festa de um Povo Animado">
                                    <div>
                                        <button>
                                            <a href="buyticketparty.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Lana Del Rey -->
                                <article class="cards-interval">
                                    <h3>Festa do TikTok</h3>
                                    <img src="../assets/images/titok.jpg" alt="Show da Lana Del Rey">
                                    <div>
                                        <button>
                                            <a href="home.php" target="_blank" class="button">
                                                Em breve
                                            </a>
                                        </button>
                                    </div>
                                </article>
                            </div>

                            <?php include '../footer.php'; ?>
            </main>
        </div>
    </div>
</body>
</div>

</div>
</body>

</html>