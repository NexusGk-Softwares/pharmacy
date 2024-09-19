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
		$pdf->Write(5, 'priscription For Patient');
		$pdf->Ln();

		$pdf->Ln(2);			


		$pdf-> Cell(5);
		$pdf->SetFont('Times','B',8);
		$pdf->Cell(5,6,'SL',1);
		$pdf->Cell(18,6,'PATIENT ID',1);
		$pdf->Cell(24,6,'PATIENT NAME',1);
		$pdf->Cell(15,6,'DATE',1);
		$pdf->Cell(15,6,'GENDER',1);
		$pdf->Cell(7,6,'Age',1);
		$pdf->Cell(15,6,'Address',1);
		$pdf->Cell(15,6,'Medicine',1);
		$pdf->Cell(15,6,'ANY TEST',1);
		$pdf->Cell(20,6,' DOCTOR ID',1);
		$pdf->Cell(20,6,' NAME',1);
		

		//$pdf->Cell(22,6,'Picture',1);
		$pdf->Ln();

					$qry = $obj->view_priscription();
					
 
					$sl=1;
					while($rec = $qry->fetch_assoc())
                     {
						$pdf-> Cell(5);
						$pdf->SetFont('Times','',8);
						$pdf->Cell(5,6,$sl,1);
						$pdf->Cell(18,6,$rec['patient_id'],1);
						$pdf->Cell(24,6,$rec['patient_name'],1);
						$pdf->Cell(15,6,$rec['r_bday'],1);
						$pdf->Cell(15,6,$rec['Gender'],1);
						$pdf->Cell(7,6,$rec['Age'],1);
						$pdf->Cell(15,6,$rec['address'],1);
						$pdf->Cell(15,6,$rec['medicine'],1);
						$pdf->Cell(15,6,$rec['test'],1);
						$pdf->Cell(20,6,$rec['doctor_id'],1);
						$pdf->Cell(20,6,$rec['doctor_name'],1);
						
						//$image1='../images/'.$rec['pic'];
						//$pdf->Cell( 20, 20, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(),18, 22.78), 0, 0, 'L', false);

						$sl++;
						$pdf->Ln();
						}      
                

		
		$pdf->Ln();
		$pdf->Ln();	
		
		$pdf->Output();



?>

