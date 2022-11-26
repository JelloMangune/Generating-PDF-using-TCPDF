<?php

require "../vendor/autoload.php";

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Jello Mangune');
$pdf->SetTitle('Display Information PDF');
$pdf->SetSubject('PDC10 TCPDF Activity');
$pdf->SetKeywords('TCPDF, PDF, activity');

$pdf->SetHeaderData("", "0", "For Academic Purposes Only", "by Jello Mangune", array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set margins
$pdf->SetMargins(20, 20, 20, true);

$pdf->setPrintFooter(true);
$pdf->setPrintHeader(true);

$pdf->AddPage();

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('courier','',20);
$pdf->Write(10,'"I find that the stranger life gets, the more it seems to make sense."','',false,'J');
$pdf->Ln(15);
$pdf->Write(10,'- Ivern','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('cid0jp','',20);
$pdf->Write(10,'"I have found my limit a thousand times, and still I press further."');
$pdf->Ln(15);
$pdf->Write(10,' - Pantheon','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('ZapfDingbats','',20);
$pdf->Write(10,'"Never become a monster to defeat one."');
$pdf->Ln(15);
$pdf->Write(10,' - Karma','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('cid0kr','',20);
$pdf->Write(10,'"A shepherd with no flock is just an idiot with a stick."');
$pdf->Ln(15);
$pdf->Write(10,' - Sylas','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('Times','',20);
$pdf->Write(10,'"A lion is made from the wolves he has eaten."');
$pdf->Ln(15);
$pdf->Write(10,' - Garen(God-King)','',false,'R');
$pdf->Ln(30);

$pdf->Output('display-info.pdf', 'I');
