<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            include("vues/v_sommaire.php");
            $lesStagiaires = $pdo->getLesStagiaires( $_SESSION['option']);
            include("vues/v_gererDemandes.php");
        break;
        case "creerDemande" :
            include("vues/v_sommaire.php");
            $idStagiaire = $_REQUEST['id'];
            $ligne = $pdo->getLeStagiaire($idStagiaire);
            $nom = $ligne['nom'];
            $prenom = $ligne['prenom'];
            $lesEntreprises = $pdo->getLesEntreprises();
            include("vues/v_creerDemande.php");

        break;
        case "imprimer":
            $idStagiaire = $_REQUEST['idStagiaire'];
            $idStage = $_SESSION['stage'];
           // $res = $pdo->demandeOk( $idStagiaire, $idStage);
            $idEntreprise = $_REQUEST['idEntreprise'];
            $stagiaire = $pdo->getLeStagiaire($idStagiaire);
            $entreprise = $pdo->getEntreprise($idEntreprise);
            $res = $pdo->ajouterDemande($idStagiaire, $idEntreprise, $idStage);
            $url = "location: vues/pdf_demande.php?";
            $url .= "stagiaire=" . serialize($stagiaire); // pour faire passer un tableau dans l'url
            $url .=  "&entreprise=" . serialize($entreprise);
            header($url);
         break;
    }
}
else
    include("vues/v_connexion.php");
?>
    