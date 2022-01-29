<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
</head>
<body>
<form method="post" action="script.php" enctype="multipart/form-data">
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

    <label for="tos" class="inline-label">J'accepte les conditions générales d'utilisation</label>
    <input type="checkbox" name="tos" id="tos">

    <div>
        <input type="file" id="cni" name="cni" >
        <label for="cni" class="inline-label">Carte d'identité</label>
    </div>

    <div>
        <input type="file" id="photo" name="photo" >
        <label for="photo" class="inline-label">Photo</label>
    </div>

    <button type="reset">Réinitialiser les valeurs du formulaire</button>
    <button type="submit">Soumettre le formulaire</button>
</form>
</body>
<style>
/**
    Attention, ce CSS est là uniquement pour rendre le formulaire "agréable" à la lecture sans que vous n'ayez
    à récupérer deux fichiers distincts.
    Dans un cas d'usage "réel", ces éléments doivent être externalisés
     */
    body {
        font-family: Calibri, serif;
    }

    form {
        max-width: 50%;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    label.inline-label {
        display: inline-block;
    }

    fieldset {
        border: 1px solid lightgray;
        background-color: rgba(225, 233, 255, 0.25);
    }

    legend {
        font-style: italic;
        font-size: 1.1em;
        padding: 5px;
    }

    form input, form select, form textarea {
        display: inline-block;
        margin-bottom: 10px;
        padding: 10px;
        width: 80%;
    }

    form input[type="radio"],
    form input[type="checkbox"],
    form input[type="submit"] {
        width: auto;
    }

    button[type=submit], button[type=reset] {
        padding: 10px;
        margin-top: 15px;
    }
</style>
</html>