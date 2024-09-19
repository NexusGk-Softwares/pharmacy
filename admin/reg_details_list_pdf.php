<?php
require_once('../functions/dbconfig.php');
	require_once('../functions/functions.php');
			
		$obj = new cls_func();
		require('../fpdf/fpdf.php');
		require('../fpdf/rotation.php');


class PDF extends PDF_Rotate
{
function Header()
{
	//Put the watermark
	//$this->SetFont('Arial','B',50);
	//$this->SetTextColor(255,192,203);
	//$this->RotatedText(65,190,'A p p r o v e d',45);
}
function RotatedText($x, $y, $txt, $angle)
{
	//Text rotated around its origin
	$this->Rotate($angle,$x,$y);
	$this->Text($x,$y,$txt);
	$this->Rotate(0);
}
}

//$pdf = new FPDF();
$pdf=new PDF();
$pdf->AddPage();



$mms='HMS-HOSPITAL MANAGEMENT SYSTEM' ;				

		
		
		$pdf->Image('../images/medical-logo.jpeg',10,9,17);
		$pdf->Ln();
		$pdf-> Cell(20);
		$pdf->SetFont('Times','',14);
		$pdf->Write(5, $mms);
		$pdf->Ln();
		$pdf-> Cell(55);
        $pdf->SetFont('Times','',10);
        $pdf->Write(5, '');
		$pdf->Ln();
		$pdf-> Cell(20);
		$pdf->SetFont('Times','',8);
		$pdf->Write(4, '                                    Sector 10, Uttara, Dhaka 1230, Bangladesh');
		$pdf->Ln();
		$pdf-> Cell(22);
		$pdf->SetFont('Times','',8);
		$pdf->Write(4,'Phone: 01751337061.,Email: minhazul234@gmail.com, Web:http://min.orgfree.com');
		$pdf-> Cell(20);
		$pdf->SetFont('Times','',8);
		$pdf->Write(5, '__________________________________________________________________________________________________________________________________');
		$pdf->Ln();
		$pdf->Ln();
		
		$pdf-> Cell(50);
		$pdf->SetFont('Times','U',18);
		$pdf->Write(5, 'All member information');
		$pdf->Ln();

		$pdf->Ln(2);			


		$pdf-> Cell(5);
		$pdf->SetFont('Times','B',8);
		$pdf->Cell(8,6,'SL',1);
		$pdf->Cell(20,6,'PATIENT ID',1);
		$pdf->Cell(40,6,'PATIENT Name',1);
		$pdf->Cell(40,6,'CETAGORY',1);
		$pdf->Cell(40,6,'EMAIL',1);
		//$pdf->Cell(22,6,'Picture',1);
		$pdf->Ln();

					$qry = $obj->view_st_info();
					
 
					$sl=1;
					while($rec = $qry->fetch_assoc())
                     {
						$pdf-> Cell(5);
						$pdf->SetFont('Times','',8);
						$pdf->Cell(8,6,$sl,1);
						$pdf->Cell(20,6,$rec['id'],1);
						$pdf->Cell(40,6,$rec['name'],1);

						$pdf->Cell(40,6,$rec['Cetagory'],1);
						$pdf->Cell(40,6,$rec['email'],1);
						//$image1='../images/'.$rec['pic'];
						//$pdf->Cell( 20, 20, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(),18, 22.78), 0, 0, 'L', false);

						$sl++;
						$pdf->Ln();
						}      
                

		
		$pdf->Ln();
		$pdf->Ln();	
		
		$pdf->Output();



?>

