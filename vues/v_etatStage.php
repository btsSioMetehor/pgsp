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
  <h4> Récapitulatif conçernant les stagiaires en <?= $option ?></h4>
  <table border="1">
  <tr>
        <th> Nom </th><th> Prénom </th> <th> téléphone </th><th> Raison sociale </th>
        <th> Adresse </th><th> Nom tuteur </th><th> tel tuteur </th>
    </tr>
  <?php
  
    foreach($conventions as $uneConvention){
        $nomStagiaire = $uneConvention['nom'];
        $prenomStagiaire = $uneConvention['prenom'];
        $telStagiaire = $uneConvention['telephone'];
        $raisonSociale = $uneConvention['raisonSociale'];
        $adresseEntreprise = $uneConvention['adresse'];
        $nomTuteur = $uneConvention['nomPrenomTuteur'];
        $telTuteur = $uneConvention['telTuteur'];

?>
    
    <tr >
        <td ><?=  $nomStagiaire ?>  </td>
        <td ><?=  $prenomStagiaire ?>  </td>
        <td ><?=  $telStagiaire ?>  </td>
        <td ><?=  $raisonSociale ?>  </td>
        <td ><?=  $adresseEntreprise ?>  </td>
        <td ><?=  $nomTuteur ?>  </td>
        <td ><?=  $telTuteur ?>  </td>

    </tr>

<?php }
 ?>
</table>

</body>
</html>