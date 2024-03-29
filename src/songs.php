<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/global.css">
</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <!-- PHP - INCLUDE SIDEBAR -->
            <?php include '../includes/iconHome.php'; ?>
            <main>
                <!--Destaques-->
                <section id="projetos">
                    <div class="container">
                        <h1>Show</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- Lana Del Rey -->
                                <article class="cards-interval">
                                    <h3>Show da Lana Del Rey</h3>
                                    <img src="../assets/images/lanadelrey.jpg" alt="Show da Lana Del Rey">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketshow.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Teatro House of Gucci -->
                                <article class="cards-interval">
                                    <h3>Show da Lady Gaga</h3>
                                    <img src="../assets/images/ladygaga.jpg" alt="Teatro da Casa dos Gucci">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketslady.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>
                                <article class="cards-interval">
                                    <h3>Show da Imagine Dragons</h3>
                                    <img src="../assets/images/imagedragons.jpg" alt="Teatro da Casa dos Gucci">
                                    <div>
                                        <button>
                                            <a href="home.php" target="_blank" class="button">
                                                Em breve
                                            </a>
                                        </button>
                                    </div>
                                </article>
                            </div>

                            <?php include '../includes/footer.php'; ?>
            </main>
        </div>
    </div>
</body>

</html>