<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 7 Exercice 5</title>
    </head>

    <body>
        <p>Créer un formulaire sur la page index.php avec :
        <ol>
            <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom</li>
        </ol>
        Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.</p>
    <hr>
    <!-- Création du formulaire
 Action = L'attribut sert à définir la page appelée par le formulaire
 Method(variable globale) = Méthode d'envoie du formulaire GET ou POST(99%)
    -->
    <form action="index.php" method="post">
        <!-- Créer une liste HTML avec les valeurs suivantes -->
        <select name="genre">
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
        </select>
        <!-- Ajout des inputs avec leurs labels -->
        <label for="firstName">Nom :</label><input type="text" name="firstName">
        <label for="lastName">Prénom :</label><input type="text" name="lastName">
        <!-- Submit : le bouton de validation du formulaire qui commande l'envoi des donnée-->
        <input type="submit" value="Valider">
        <a href="../index.php"><button type="button">Retour</button></a>
    </form>

    <?php
    // Vérification des POST s'ils existent
    if (isset($_POST['genre']) && isset($_POST['firstName']) && isset($_POST['lastName'])) {
        // htmlspecialchars qui sert à échapper le code HTML ( Éviter les failles XSS )
        echo htmlspecialchars($_POST['genre']) . ', ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']);
    }
    ?>

</body>
</html>
