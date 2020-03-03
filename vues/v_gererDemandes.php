<div id="contenu">
<h1 >Les stagiaires</h1>
<table class =  "listeLegere">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
<?php 
foreach ($lesStagiaires as $ligne)
{
    $id = $ligne['id'];
    $nom = $ligne['nom'];
    $prenom = $ligne['prenom'];
    ?>
    <tr>
        <td><?= $nom ?></td>
        <td><?= $prenom ?></td>
        <td><a href="index.php?uc=gererDemandes&action=creerDemande&id=<?= $id ?>" style="color:blue">Création d'une demande</td>
  </tr>
<?php 
}
?>
</table>
</div>