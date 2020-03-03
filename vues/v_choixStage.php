<div id="contenu">
<form  action= "index.php?uc=connexion&action=afficherMenu" method="post" >
    Stage :
    <select name="choixStage" >
     <?php foreach($lesStages as $ligne){ ?>
        <option><?= $ligne['id']?></option>
       
     <?php } ?>
    </select>

    Option :
    <select name="choixOption" >
        <option>Sisr</option>
        <option>Slam</option>
    </select><br>
    <input type="submit" name="valider" value="Valider">
</form>
</div>