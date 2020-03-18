<?php
if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voirEtatStage" :
         //   $idStage = $_SESSION['stage'];
         //   $conventions = $pdo->getLesConventions($idStage);

            $url = "location: vues/pdf_etatStage.php";
            header($url);
         //   $url .= "&conventions=" . serialize($conventions);
        break;
    }
}
else
    include("vues/v_connexion.php");

?>