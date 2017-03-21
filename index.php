<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>B&K - Index</title>
  </head>
  <body>
    <header>
      <h1>B&K</h1>
      <form class="" action="" method="post">
        <label for="mail">Email</label>
        <input type="text" name="mail">

        <label for="pwd">Password</label>
        <input type="password" name="pwd">
        <input type="submit" value="Connect" name="connect"/>
      </form>
    </header>

    <div class="main">
      <div class="">
        <img src="" alt="">
      </div>

      <div class="">
        <h2>Pas encore membre ?</h2>
        <h3>Inscrivez vous des maintenant !</h3>
        <form class="" action="controller/create_user.php" method="post">
          <label for="">Email</label>
          <input type="text" name="email"><br>

          <label for="username">Username</label>
          <input type="text" name="username"><br>

          <label for="pwd">Password</label>
          <input type="password" name="pwd"><br>

          <label for="pwd">Password confirm</label>
          <input type="password" name="pwd_confirm"><br>
          <br>
          <input type="submit" value="Submit" name="add"/>
        </form>
      </div>
    </div>

  </body>
</html>
