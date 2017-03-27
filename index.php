<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>B&K - Index</title>
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg+xml" href="src/favico/favico.svg"/>
  </head>
  <body>
    <main class="homepage image1">
      <header>
        <h1>B&K</h1>
        <form class="" action="controller/connect.php" method="post">
          <?php
            if(isset($_GET['err']) && !empty($_GET['err']) ){


              $error = $_GET['err'];

              switch ($error) {
                case 'connect-password':
                  echo "<div class='error'>
                    <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Mot de passe erroné<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                  </div>";
                  break;
                case 'account':
                  echo "<div class='error'>
                    <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Compte introuvable<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                  </div>";
                  break;
                case 'connect-fields':
                  echo "<div class='error'>
                    <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Veuillez remplir tous les champs<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                  </div>";
                  break;

              }
            }
          ?>
          <label for="mail">Email</label>
          <input type="text" name="mail">

          <label for="pwd">Password</label>
          <input type="password" name="pwd">
          <input type="submit" value="Connect" class="btn connect" name="connect"/>
        </form>
      </header>

      <div class="container">
        <div class="content">
          <div class="title">
            <h2>Pas encore membre ?</h2>
            <h3>Inscrivez vous des maintenant !</h3>
          </div>
          <form class="" action="controller/create_user.php" method="post">

            <label for=""><p>Email</p></label>
            <input type="text" name="mail"><br>

            <label for="pwd"><p>Username</p></label>
            <input type="password" name="username"><br>

            <label for="pwd"><p>Password</p></label>
            <input type="password" name="pwd"><br>

            <label for="pwd"><p>Password confirm</p></label>
            <input type="password" name="pwd_confirm"><br>
            <br>
            <?php
              if(isset($_GET['err']) && !empty($_GET['err']) ){


                $error = $_GET['err'];

                switch ($error) {
                  case 'email':
                    echo "<div class='error'>
                      <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Adresse mail déjà utilisée<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                    </div>";
                    break;
                  case 'name':
                    echo "<div class='error'>
                      <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Nom d'utilisateur déjà utilisé<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                    </div>";
                    break;
                  case 'password':
                    echo "<div class='error'>
                      <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Les mots de passe doivent correspondre<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                    </div>";
                    break;
                  case 'fields':
                    echo "<div class='error'>
                      <p><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Veuillez remplir tous les champs<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></p>
                    </div>";
                    break;
                }
              }
            ?>


            <input type="submit" class="btn color-1 bg-grey" value="Go ! " name="add"/>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
