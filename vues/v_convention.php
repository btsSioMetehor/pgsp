<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Greta Météhor</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>
  <img src="http://localhost/pgspV2/images/logoGreta.jpg" alt="Logo" title="Logo"/>
 <h1>Convention de stage></h1><br>
Nom du stagiaire : <?= $stagiaire['nom'] ?> <br>
"Prénom du stagiaire : <?= $stagiaire['prenom'] ?><br><br>
<h2>Entreprise</h2>
Raison sociale : <?= $entreprise['raisonSociale'] ?><br>
Adresse : <?= $entreprise['adresse'] ?><br>
Nom du responsable : <?= $entreprise['nomPrenomResponsable'] ?><br>

</body>
</html>