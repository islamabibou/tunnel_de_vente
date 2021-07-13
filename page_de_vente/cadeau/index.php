<?php
session_start();
  if(!empty($_POST)){
      require_once '../bdd/db.php';
      if(empty($errors)){
        $req = $pdo->prepare("INSERT INTO capture SET email = ?");
        $req ->execute([$_POST['mail']]);
        $user_id = $pdo->LastInsertId();

        $_SESSION['flash']['success'] = "Félicitation<br>
        Message envoyé avec succès et nous promettons de revenir vers vous très prochainement";
    //     if(isset($_POST['comment'])){
    //       $entete  = 'MIME-Version: 1.0' . "\r\n";
    //       $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    //       $entete .= 'From: ' . $_POST['mail'] . "\r\n";
  
    //       $message = '<h1>Capture</h1>
    //       <b>E-mail : </b>' . $_POST['mail'] .'</p>';
  
    //       $retour = mail('direction@cmachanx.com', 'Pour contact', $message, $entete);
    //   }
        header('Location: ../index.php');
      exit();
      }
  }
  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formation en création de tunnel de vente">
    <title>Cadeau</title>
	<link rel="icon" type="image/png" href="../img/richard.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ico.css">
</head>
<body>
    <form method="post" action="" class="form">

        <div class="form-input">
            <label class="label" for="mail">Entrez votre adresse e-mail*</label>
            <input type="text" name="mail" id="mail" placeholder=" " required>
        </div>

        <button type="submit" class="submit">Recevoir mon cadeau</button>

    </form>
    
    <div class="social">
    <a href="https://wa.me/22991666126?texte=Salut" class="icon-facebook fab"></a>
        <a href="https://wa.me/22991666126?texte=Salut" class="icon-instagram fab"></a>
        <a href="https://wa.me/22991666126?texte=Salut" class="icon-whatsapp fab"></a>
        <a href="https://wa.me/22991666126?texte=Salut" class="icon-envelop fab"></a>
    </div>
</body>
</html>