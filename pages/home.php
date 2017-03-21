<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>B&K - Homepage</title>
  </head>
  <body>
      <header>
        <h1>B&K</h1>
        <p>Bienvenue <?php echo $_SESSION['user_login']; ?></p>
        <nav>
          <ul>
            <li><a href="../controller/disconnect.php">Se déconnecter</a></li>
            <li><a href="../controller/create_article.php">Ajouter un article</a></li>
          </ul>
        </nav>
      </header>
  </body>
</html>
