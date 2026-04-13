<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Een projectenpagina, waar je mijn projecten kunt bekijken.">
    <meta name="keywords" content="Rianne's portfolio, projecten, , portfolio">
    <meta name="author" content="Rianne Bulsing">
    <title>Projecten | Rianne's portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../media/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">
    <script defer src="../js/portfolio.js"></script>
</head>
<body>
<!-- navbar -->
<nav class="navbar">
    <div class="logo">Rianne's portfolio</div>

    <!-- Hamburger los -->
    <a href="javascript:void(0)" class="icon" onclick="toggleMenu()">
        <i class="fa-solid fa-bars" id="openIcon"></i>
        <i class="fa-solid fa-xmark" id="closeIcon"></i>
    </a>

    <ul class="nav-links" id="navLinks">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../over.html">Over mij</a></li>
        <li><a href="projecten.php" class="active">Projecten</a></li>
        <li><a href="../contact.html">Contact</a></li>
    </ul>
</nav>

    <!-- header -->
     <div class="header">
        <div class="header-titel">
            <h1>Projecten</h1>
        </div>
     </div>

        <!-- Showcase -->
        <div class="projecten-container">

            <?php if ($aantalRijen > 0) { ?>
                <div class="project-grid">
                    <?php foreach ($resultaten as $rij) { ?>
                        <div class="project-card">
                            <div class="project-image" style="background-image: url('../media/images/<?= $rij["Afbeelding"] ?>');"></div>

                            <div class="project-info">
                                <h3><?= $rij["Projectnaam"] ?></h3>
                                <p><?= $rij["Beschrijving"] ?></p>

                                <h4>Technieken</h4>
                                <p><?= $rij["Technieken"] ?></p>

                                <h4>Reflectie</h4>
                                <p><?= $rij["Reflectie"] ?></p>

                                <!-- Normale buttons -->
                                <div class="buttons">
                                    <button class="btn" onclick="window.open('../projecten/<?= $rij['Project'] ?>', '_blank')">
                                        Project bekijken
                                    </button>
                                    <button class="btn" onclick="window.open('<?= $rij['GitHub'] ?>', '_blank')">
                                        <i class="fa-brands fa-github"></i> GitHub
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <p>Geen resultaten gevonden</p>
            <?php } ?>

        </div>

      <!-- footer -->
      <div class="footer">
            <div class="footer-nav">
                <h3>Quick links</h3>
                <ul class="footer-links">
                    <li><a href="../index.html" class="active">Home</a></li>
                    <li><a href="../over.html">Over mij</a></li>
                    <li><a href="projecten.php">Projecten</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                    <li><a href="../media/files/cv_RianneBulsing.pdf" download>Download mijn cv</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact</h3>
                <ul class="contact-info">
                    <li><a href="mailto:101934@glr.nl">E-mail: 101934@glr.nl</a></li>
                    <li>Woonplaats: Nesselande, Rotterdam</li>
                </ul>
                <h3>Social media</h3>
                <div class="socials">
                    <ul>
                        <li><a href="https://www.linkedin.com/in/rianne-bulsing-071a0338a"><i class="linkedin fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://github.com/R-Bulsing" target="_blank"><i class="github fa-brands fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
       </div>
<div class="copy">
    <p>&#169; 2025 Rianne's portfolio. Alle rechten voorbehouden.</p>
</div>
</body>
</html>