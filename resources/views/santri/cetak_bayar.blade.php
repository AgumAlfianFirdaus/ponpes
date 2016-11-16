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
    $today=date('d-m-Y');

    Fpdf::Ln(5);
    Fpdf::Cell(85);
    Fpdf::SetFont('Arial','',9);
    Fpdf::Cell(90,10,'Tanggal cetak :',0,0,'R');
    Fpdf::Cell(17,10,$today,0,0,'R');
    
    Fpdf::Ln(7);
    Fpdf::Cell(75);
    Fpdf::SetFont('Arial','',16);
    Fpdf::Cell(30,10,'Kwitansi Pembayaran',0,0,'C');
    
    Fpdf::Ln(8);  
    Fpdf::SetFont('Arial','',11);
    Fpdf::Cell(30,10,'Telah Di terima dari ',0,0,'L');
    Fpdf::Ln(10);

    Fpdf::Cell(15);
    Fpdf::Cell(40,10,'Nama',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(40,10,$data[0]->nama_lengkap,0,0,'L');
    
    Fpdf::Ln(5);
    Fpdf::Cell(15);
    Fpdf::Cell(40,10,'Uang Sejumlah',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(10,10,'Rp.',0,0,'L');
    Fpdf::Cell(35,10,$bayar[0]->total,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(15);
    Fpdf::Cell(40,10,'Untuk Pembayaran',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(52,10,'Uang Makan Pondok Selama',0,0,'L');
    Fpdf::Cell(3,10,$bayar[0]->jumlah_bulan,0,0,'L');
    Fpdf::Cell(4,10,'Bulan',0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(15);
    Fpdf::Cell(40,10,'Dimulai bulan',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::SetFont('Arial','B',11);
    Fpdf::Cell(18,10,$bayar[0]->awal,0,0,'L');
    Fpdf::SetFont('Arial','',11);
    Fpdf::Cell(27,10,'Sampai Bulan',0,0,'L');
    Fpdf::SetFont('Arial','B',11);
    Fpdf::Cell(4,10,$bayar[0]->akhir,0,0,'L');

    Fpdf::Ln(12);
    Fpdf::Cell(7);
    Fpdf::SetFont('Arial','',14);
    Fpdf::Cell(25,10,'Total : Rp.',0,0,'L');
    Fpdf::Cell(10,10,$bayar[0]->total,0,0,'L');

    Fpdf::Ln(10);
    Fpdf::SetFont('Arial','',11);
    Fpdf::cell(85);
    Fpdf::Cell(82,10,'Cirebon,',0,0,'R');
    Fpdf::Cell(20,10,$today,0,0,'R');

    Fpdf::Ln(8);
    Fpdf::cell(85);
    Fpdf::Cell(70,10,'Mengetahui,',0,0,'R');

    Fpdf::Ln(25);
    Fpdf::SetFont('Arial','I',8);
    Fpdf::Cell(5,10,'*Kwitansi ini dianggap sah bila telah dicap dan di Tanda tangani',0,0);
    Fpdf::SetFont('Arial','',10);
    Fpdf::Ln(5);
    Fpdf::Cell(0,10,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,0,'L');


    $fpdf::Output();
    exit;

?>

