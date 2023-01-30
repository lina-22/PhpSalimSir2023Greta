<?php
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf = new FPDF();

// ajoute une page
$pdf->AddPage();
// ajoute une image
//$pdf->Image();
$pdf->Image('../images/conservatoire.jpg', 10, 10, 64, 48);
// définit la police courante
$pdf->SetFont('Arial', 'B', 16);
// affiche du texte
$pdf->Cell(40, 10, 'Voici un Pdf avec images!');
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
