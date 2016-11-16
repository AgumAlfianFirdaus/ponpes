<?php
// // use Storage;
// // use DB;
// // use Config;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Anouar\Fpdf\Facades\Fpdf as Fpdf;


$fpdf = new Fpdf();
    $fpdf::AddPage();
        
    // $data = array();
    $ii_data=1;
    $fpdf::Ln(5);
    $fpdf::Cell(80);
    $fpdf::SetFont('Arial','',15);
    $fpdf::Cell(30,10,'Data Pembayaran Uang Makan Bulanan',0,0,'C');
    $fpdf::Ln(7);
    $fpdf::Cell(60);
    $fpdf::Cell(70,10,'Pondok Pesantren Luhur Al-Kautsar',0,0,'C');

        $fpdf::ln(10);
        $fpdf::Cell(15);
        $fpdf::SetFont('Arial','',10,'C');   
        $header = array('No','Nis santri','Penerima','Jumlah Bulan','Total','Keterangan');
        $w = array(10, 25, 20, 30, 35, 35);
        for($i=0;$i<count($header);$i++)
            $fpdf::Cell($w[$i],5,$header[$i],1,0,'C',false);
            $fpdf::Ln(2);
        
        // Color and font restoration
        $fpdf::SetFillColor(255,255,255);
        $fpdf::SetTextColor(0,0,0);

        
        // Data
        $fpdf::SetFont('Arial','',10);
        $data = array();
        $ii_data = 1;
        foreach ($bayar as $ba ) {
            $array_data[] = array($ba->nis,$ba->id_login,$ba->jumlah_bulan,$ba->total,'');
        }

        foreach($array_data as $d){
            $det  =   array(

                            $ii_data++,
                            $d[0],
                            $d[1],
                            $d[2],
                            $d[3],
                            $d[4]
                        );

            $data[] = $det;

        }
         $fill = false;
        foreach($data as $row)
        {
            // $fpdf::cell(3);
             $fpdf::Cell(15);
            $fpdf::Cell($w[0],12,$row[0],'LR',0,'C');
            $fpdf::Cell($w[1],12,$row[1],'LR',0,'L');
            $fpdf::Cell($w[2],12,$row[2],'LR',0,'L');
            $fpdf::Cell($w[3],12,$row[3],'LR',0,'L');
            $fpdf::Cell($w[4],12,$row[4],'LR',0,'L');
            $fpdf::Cell($w[5],12,$row[5],'LR',0,'L');


            $fpdf::Ln(6);
            $fill = !$fill;
        }
        // Closing line

        $fpdf::Ln(6);
         $fpdf::Cell(15);
        $fpdf::Cell(array_sum($w),0,'','T');


            $fpdf::Output();
            exit;

?>

