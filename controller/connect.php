<?php
session_start();

//connect.php
require_once "../bootstrap.php";
require_once "../class/User.php";

if (isset($_POST['connect'])) {

  if (!empty($_POST['mail']) AND !empty($_POST['pwd'])) {

    $mail = htmlspecialchars($_POST['mail']);
    $pwd = htmlspecialchars($_POST['pwd']);

    $usersRepository = $entityManager->getRepository('User');
    $usersMail = $usersRepository->findOneBy(array('mail'=>$mail));

    if (!is_null($usersMail)) {
      $usersMail->getId();
    } else {
      //redirection vers index : compte n'existe pas
    }

  } else {
    //redirection vers index avec erreur : merci de remplir tout les champs
  }
} else {
  //redirection vers index
}
 ?>
