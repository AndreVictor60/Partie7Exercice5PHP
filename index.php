<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 7 Exercice 5</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <select name="genre">
          <option value="Monsieur">Mr</option>
          <option value="Madame">Mme</option>
      </select>
      <label for="firstName">Nom :</label><input type="text" name="firstName">
      <label for="lastName">Prénom :</label><input type="text" name="lastName">
      <input type="submit" value="valider">
    </form>
    <?php
      if (isset($_POST['genre']) AND isset($_POST['firstName']) AND isset($_POST['lastName']))
      {
        echo $_POST['genre'] . ', ' . $_POST['firstName']. ' ' .$_POST['lastName'];
      }
     ?>
  </body>
</html>
