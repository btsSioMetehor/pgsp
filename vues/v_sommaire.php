    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
            <li id="pres" >
               Bonjour 
               <?php echo $_SESSION['login']. " vous gerer le stage " .$_SESSION['stage'] . " pour les " . $_SESSION['option'];?>
            </li>
            <br>
            <li class="smenu">
              <a href="index.php?uc=connexion&action=changerStageOuOption" title="voir les stagiaires ">Changer de stage ou d'option</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererStagiaires&action=voir" title="voir les stagiaires ">Gérer les stagiaires</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererStages&action=voir" title="Voir les stages">Gérer les stages</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererEntreprises&action=voir" title="voir les entreprises">Gérer les entreprises</a>
           </li>
           <!-- <li class="smenu">
              <a href="index.php?uc=gererDemandes&action=voir" title="voir les stagiaires">Gérer les demandes de convention</a>
           </li> -->
           <li class="smenu">
              <a href="index.php?uc=gererConventions&action=voir" title="voir les stagiaires">Gérer les Conventions</a>
           </li>
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    