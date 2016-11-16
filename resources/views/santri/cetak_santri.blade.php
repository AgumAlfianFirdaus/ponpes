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
    $fpdf::Cell(30,10,'Daftar Siswa - Siswi Pondok Pesantren Luhur Alkautsar Cirebon',0,0,'C');

        $fpdf::ln(10);
        $fpdf::Cell(3,5,'Laki-laki',0,0,'L');
        $fpdf::ln(10);
		$fpdf::SetFont('Arial','',10,'C');   
        $header = array('No','NIS','Nama Lengkap','Jenis Kelamin','Daerah Asal', 'Status','Keterangan');
        $w = array(10, 20, 55, 30, 30, 15, 30);
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
        foreach ($santri as $sa ) {
            $array_data[] = array($sa->nis,$sa->nama_lengkap,$sa->jenis_kelamin,$sa->daerah,$sa->status,$sa->keterangan);
        }
        
        foreach($array_data as $d){
            $det  =   array(
                            $ii_data++,
                            $d[0],
                            $d[1],
                            $d[2],
                            $d[3],
                            $d[4],
                            $d[5]
                        );

            $data[] = $det;

        }
         $fill = false;
        foreach($data as $row)
        {
        	// $fpdf::cell(3);

            $fpdf::Cell($w[0],12,$row[0],'LR',0,'C');
            $fpdf::Cell($w[1],12,$row[1],'LR',0,'L');
            $fpdf::Cell($w[2],12,$row[2],'LR',0,'L');
            $fpdf::Cell($w[3],12,$row[3],'LR',0,'L');
            $fpdf::Cell($w[4],12,$row[4],'LR',0,'L');
            $fpdf::Cell($w[5],12,$row[5],'LR',0,'L');
            $fpdf::Cell($w[6],12,$row[6],'LR',0,'L');

        	$fpdf::Ln(6);
            $fill = !$fill;
		}
        // Closing line
        $fpdf::Ln(6);
        $fpdf::Cell(array_sum($w),0,'','T');

        //perempuan

        $fpdf::AddPage();
        
    $ii_data=1;
    $fpdf::Ln(5);
    $fpdf::Cell(80);
    $fpdf::SetFont('Arial','',15);
    $fpdf::Cell(30,10,'Daftar Siswa - Siswi Pondok Pesantren Luhur Alkautsar Cirebon',0,0,'C');

        $fpdf::ln(15);
        // $fpdf::Cell(3,5,'Perempuan',0,0,'L');
        $fpdf::ln(10);
        $fpdf::SetFont('Arial','',10,'C');   
        $header = array('No','NIS','Nama Lengkap','Jenis Kelamin','Daerah Asal', 'Status','Keterangan');
        $w = array(10, 20, 55, 30, 30, 15, 30);
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
        foreach ($santri2 as $saa ) {
            $array_data[] = array($saa->nis,$saa->nama_lengkap,$saa->jenis_kelamin,$saa->daerah,$saa->status,$saa->keterangan);
        }
        
        foreach($array_data as $da){
            $det  =   array(
                            $ii_data++,
                            $da[0],
                            $da[1],
                            $da[2],
                            $da[3],
                            $da[4],
                            $da[5]
                        );

            $data[] = $det;

        }
         $fill = false;
        foreach($data as $row)
        {
            // $fpdf::cell(3);

            $fpdf::Cell($w[0],12,$row[0],'LR',0,'C');
            $fpdf::Cell($w[1],12,$row[1],'LR',0,'L');
            $fpdf::Cell($w[2],12,$row[2],'LR',0,'L');
            $fpdf::Cell($w[3],12,$row[3],'LR',0,'L');
            $fpdf::Cell($w[4],12,$row[4],'LR',0,'L');
            $fpdf::Cell($w[5],12,$row[5],'LR',0,'L');
            $fpdf::Cell($w[6],12,$row[6],'LR',0,'L');

            $fpdf::Ln(6);
            $fill = !$fill;
        }
        // Closing line
        $fpdf::Ln(6);
        $fpdf::Cell(array_sum($w),0,'','T');


		    $fpdf::Output();
		    exit;

?>

