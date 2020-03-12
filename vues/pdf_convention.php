<?php 
$stagiaire = unserialize($_REQUEST['stagiaire']); // pour récupérer le tableau passé dans l'url
$entreprise = unserialize($_REQUEST['entreprise']);
require_once '../data/class.PDOpgsp.php';
$pdo = PdoPgsp::getPdoPgsp();
require_once '../vendor/autoload.php';
ob_start();
require_once '../vues/v_convention.php';
$content = ob_get_clean();
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output();
?>






