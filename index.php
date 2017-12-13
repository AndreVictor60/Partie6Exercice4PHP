<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 4</title>
  </head>
  <body>
    <a href='index.php?langage=PHP&serveur=LAMP'>Info</a>
    <?php
      if (isset($_GET['langage']) AND isset($_GET['serveur']))
      {
        echo $_GET['langage'].' '. $_GET['serveur'];
      }
     ?>
  </body>
</html>
