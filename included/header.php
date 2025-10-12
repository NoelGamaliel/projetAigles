<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header of the Page</title>

    <!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main>
        <header>
            <nav>
                <a href="http://">
                    <img src="./_img/logo.png" alt="Logo" class="logo">
                </a>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Le Club</button>
                        <div class="dropdown-content">
                            <a href="#">Mission</a>
                            <a href="#">Vision</a>
                            <a href="#">Staff</a>
                        </div>
                    </div>
                    <li><a href="contact.php">L'equipe</a></li>
                    <li><a href="actu.php">Actualite</a></li>
                    <li><a href="media.php">Media</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
                <div class="btn-academy">
                    <a href="http://academy.php" target="_blank" rel="noopener noreferrer">academy</a>
                </div>
            </nav>
        </header>
    </main>
</body>
</html>