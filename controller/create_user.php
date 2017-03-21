<?php
session_start();

//create_user.php
require_once "../bootstrap.php";
require_once "../class/User.php";


if (isset($_POST['add'])) {
  if (!empty($_POST['email']) AND !empty($_POST['username']) AND !empty($_POST['pwd']) AND !empty($_POST['pwd_confirm'])) {

    $mail = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $pwd_confirm = htmlspecialchars($_POST['pwd_confirm']);

    if($pwd == $pwd_confirm){

      $pwd = hash('sha512', $pwd);
      $user = new User();
      $user->setName($username);
      $user->setMail($mail);
      $user->setPassword($pwd);

      $usersRepository = $entityManager->getRepository('User');
      $usersName = $usersRepository->findOneBy(array('name'=>$username));

      if (is_null($usersName)) {

        $usersMail = $usersRepository->findOneBy(array('mail'=>$mail));

        if(is_null($usersMail)){

          $entityManager->persist($user);
          $entityManager->flush();

          $_SESSION['user_id'] = $user->getId();
          $_SESSION['user_login'] = $user->getName();

          header("Location: ../pages/home.php");

        }
          //Retour sur index avec msg d'erreur : mail deja utilisé
        }
      } else {
        //Retour sur index avec msg d'erreur : nom deja utilisé
      }
    } else {
      //Retour sur index avec msg d'erreur : les mdp doivent correspondre
    }
  } else {
    // Retour sur index avec msg d'erreur : remplir tout les champs
  }
} else {
  // Retour sur index
}
