<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quelle est la capitale</title>
</head>
<body>
<h1>Quelle est la capitale :</h1>
<section>
    <h2>Devoir :</h2>
    <form action="" method="get">
        <label for="country-select">Choisir un pays pour obtenir sa capitale :</label>
        <select name="country" id="country-select">
            <option disabled selected value> -- selectionner un pays --</option>
            <?php foreach ($nameCountries as $country): ?>
                    <option value="<?= $country ?>"><?= ucfirst($country) ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Soumettre!">
    </form>
    <?php if ($countryChoose !== ""): ?>
        <img src="./images/<?= $countries[$countryChoose]['flag-file'] ?>"
             alt="Le drapeau de ce pays : <?= ucfirst($countryChoose) ?>">
        <p>Pays: <?= ucfirst($countryChoose) ?></p>
          <p>  Capitale: <?= ucfirst($countries[$countryChoose]['capital-name']) ?></p>
    <?php endif; ?>
</section>
</body>
</html>