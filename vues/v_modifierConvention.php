<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererConventions&action=modifierConvention&id=<?= $id ?>">
    
    
        <input type = "hidden" name = "id" value = "<?= $id?>">

        
        <p>Nom du stagiaire : <?= $stagiaire['nom'] ?></p>
        
        <p>Prenom du stagiaire : <?= $stagiaire['prenom'] ?></p>
        
        <p>Nom de l'entreprise : <b><?= $raisonSociale?></b></p>
        
        <p id="modifEntreprise">Modifier l'entreprise :
            <select name="entreprise">
                <?php foreach($raisons as $ligne){ ?>
                    <option value = "<?= $ligne['raisonSociale']?>"><?= $ligne['raisonSociale']?></option>'>
                <?php } ?>
            </select>
        
        <p>Formateur:<b> <?= $nomPrenomFormateur?></b></p>
        
        <p id="modifFormateur">Modifier formateur :
            <select name="formateur">
                <?php foreach($formateurs as $ligne){ ?>
                    <option value = "<?= $ligne['id']?>"><?= $ligne['nomPrenomFormateur']?></option>'>
                <?php } ?>
            </select>
        
        <div class="corpsForm">
            <fieldset><legend>Creation de Convention</legend>
                <p><label>Nom et Prénom du tuteur: </label><input type = "text" name = "nomPrenomTuteur" size = 25 value="<?= $nomPrenomTuteur?>"></p>
                <p><label>Numéro tel Tuteur: </label><input type = "number" name = "telTuteur" size = "25" value="<?= $telTuteur?>"></p>
                <p><label>Adresse mail tuteur: </label><input type = "text" name = "mailTuteur" size = 15 value="<?= $mailTuteur?>"></p>
            </fieldset>
        </div>
            <br>
        <input type ="submit" value = "Modifier la convention">
        <input type = "reset" value = "Annuler" >
    </form>
    <form method = "post" action = "index.php?uc=gererConventions&action=imprimer">
        <input type ="submit" value = "Imprimer">      
    </form>
</div>