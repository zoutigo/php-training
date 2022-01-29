<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="traitement-formulaire.php">
    <div>
        <input type="radio" id="Mr" name="civilite" value="Mr">
        <label for="Mr" class="inline-label">Monsieur</label>
    </div>
    <div>
        <input type="radio" id="Mme" name="civilite" value="Mme">
        <label for="Mme" class="inline-label">Madame</label>
    </div>

    <label for="name">Votre nom</label>
    <input type="text" name="name" id="name" placeholder="Saisissez votre nom">

    <label for="birthDate">Votre date de naissance</label>
    <input type="date" name="birthDate" id="birthDate" placeholder="Saisissez votre date de naissance">

    <label for="comment">Commentaire</label>
    <textarea rows="4" name="comment" id="comment" placeholder="Ajoutez un commentaire pertinent"></textarea>

    <label for="email">Votre adresse e-mail</label>
    <input type="email" name="email" id="email" placeholder="Saisissez votre e-mail">

    <label for="languages">Langages de programmation maîtrisés</label>
    <select name="languages[]" id="languages" multiple>
        <option value="HTML">HTML</option>
        <option value="JS">JS</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="SQL">SQL"</option>
    </select>

    <label for="tos" class="inline-label">J'accepte les conditions générales d'utilisation</label>
    <input type="checkbox" name="tos" id="tos">

    <button type="reset">Réinitialiser les valeurs du formulaire</button>
    <button type="submit">Soumettre le formulaire</button>
</form>
</body>

</html>