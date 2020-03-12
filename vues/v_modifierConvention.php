<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererConventions&action=enregistrerModifications">
    
        <p>Nom du stagiaire : <?= $stagiaire['nom'] ?></p>
        
        <p>Prenom du stagiaire : <?= $stagiaire['prenom'] ?></p>
        
        <p>Nom de l'entreprise : <b><?= $raisonSociale?></b></p>
        
        <p id="modifEntreprise">Modifier l'entreprise :
            <select name="entreprise">
                <?php foreach($raisons as $ligne){ ?>
                    <option value = "<?= $ligne['id']?>"><?= $ligne['raisonSociale']?></option>'>
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
            <fieldset><legend>Tuteur en entreprise</legend>
                <p><label>Nom et Prénom: </label><input type = "text" name = "nomPrenomTuteur" size = 25 value="<?= $nomPrenomTuteur?>"></p>
                <p><label>Téléphone: </label><input type = "number" name = "telTuteur" size = "25" value="<?= $telTuteur?>"></p>
                <p><label>mail: </label><input type = "text" name = "mailTuteur" size = 15 value="<?= $mailTuteur?>"></p>
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
