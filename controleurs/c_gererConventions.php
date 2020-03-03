<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            include("vues/v_sommaire.php");
            $lesStagiaires = $pdo->getLesStagiairesConvention( $_SESSION['option']);
            include("vues/v_gererConventions.php");
        break;
        
              
        case "ajouter" :
            include("vues/v_sommaire.php");
            $id = $_REQUEST['id'];
            $raisons = $pdo->getLesEntreprises();
            $formateurs = $pdo->getLesFormateurs();
            $stagiaire = $pdo->getLeStagiaire($id);
            include("vues/v_ajouterConvention.php");
        break;

        case "modifier" :
            include("vues/v_sommaire.php");
        //    include("vues/v_modifierEntreprise.php");
            break;
             
        case "enregistrerAjout" :
            include("vues/v_sommaire.php");
                $id=$_REQUEST['id'];
                $nomPrenomTuteur = $_REQUEST['nomPrenomTuteur'];
                $telTuteur = $_REQUEST['telTuteur'];
                $mailTuteur = $_REQUEST['mailTuteur'];
                $idStagiaire = $_REQUEST['id'];
                $idEntreprise = $_REQUEST['entreprise'];
                $idFormateur =$_REQUEST['formateur'];
               $idStage = $_SESSION['stage'];
                $res = $pdo->ajoutConvention($id, $nomPrenomTuteur, $telTuteur, $mailTuteur,  $idStagiaire, $idStage, $idEntreprise, $idFormateur);
            if($res != 0)
                $message = "Convention ajoutée";
            else
                $message = "Merci de recommencer ultérieurement";

            include("vues/v_message.php");
            break;

    
      /*  case "imprimer":
            $idStagiaire = $_REQUEST['idStagiaire'];
            $idStage = $_SESSION['stage'];
            $res = $pdo->demandeOk( $idStagiaire, $idStage);
            $idEntreprise = $_REQUEST['idEntreprise'];
            $stagiaire = $pdo->getLeStagiaire($idStagiaire);
            $entreprise = $pdo->getEntreprise($idEntreprise);
            $url = "location: vues/pdf_demande.php?";
            $url .= "stagiaire=" . serialize($stagiaire); // pour faire passer un tableau dans l'url
            $url .=  "&entreprise=" . serialize($entreprise);
            header($url);
         break;*/
    }
}
else
    include("vues/v_connexion.php");
?>