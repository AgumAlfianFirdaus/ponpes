<?php
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Anouar\Fpdf\Facades\Fpdf as Fpdf;


    $fpdf = new Fpdf();
    Fpdf::AddPage();
    // Fpdf::Image('http://localhost/sidang/public/ponpes.png',10,9,40);
    //   Fpdf::Image('http://localhost/sidang/public/other/logo-kota-cirebon.png',160,9,40);

    Fpdf::Ln(5);
    Fpdf::Cell(80);
    Fpdf::SetFont('Arial','',15);
    Fpdf::Cell(30,10,'Surat Pernyataan Santri Baru',0,0,'C');
    
    Fpdf::Ln(7);
    Fpdf::Cell(80);
    Fpdf::SetFont('Arial','',14);
    Fpdf::Cell(30,10,'Pondok Pesantren Luhur Al-Kautsar Cirebon',0,0,'C');
    
    Fpdf::Ln(15);  
    Fpdf::SetFont('Arial','',12);
    Fpdf::Cell(5,10,'Yang bertanda tangan di bawah ini :',0,0,'L');
    
    Fpdf::SetFont('Times','',11);

    
    Fpdf::Ln(8);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'1.',0,0,'L');
    Fpdf::Cell(35,10,'NIS',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(40,10,$daftar[0]->nis,0,0,'L');
    
    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'2.',0,0,'L');
    Fpdf::Cell(35,10,'Nama Lengkap',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(40,10,$daftar[0]->nama_lengkap,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'3.',0,0,'L');
    Fpdf::Cell(35,10,'Nama panggiilan',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(40,10,$daftar[0]->nama_panggilan,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'4.',0,0,'L');
    Fpdf::Cell(35,10,'Tanggal Lahir',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->tanggal_lahir ,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'5.',0,0,'L');
    Fpdf::Cell(35,10,'Jenis Kelamin',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->jenis_kelamin,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'6.',0,0,'L');
    Fpdf::Cell(35,10,'Status',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->status,0,0,'L');
    
    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'7.',0,0,'L');
    Fpdf::Cell(35,10,'Daerah Asal',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->daerah,0,0,'L');


    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'8.',0,0,'L');
    Fpdf::Cell(35,10,'Nama Ayah',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->ayah,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'9.',0,0,'L');
    Fpdf::Cell(35,10,'Nama ibu',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->ibu,0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(5);
    Fpdf::Cell(5,10,'10.',0,0,'L');
    Fpdf::Cell(35,10,'No.Hp OrangTua',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,$daftar[0]->no_hp,0,0,'L');

    Fpdf::Ln(20);
    Fpdf::Cell(15);
    Fpdf::SetFont('Times','',12);
    Fpdf::Cell(30,10,'Menyatakan Bahwa saya siap untuk thoat dan mengikuti segala peraturan & ijitihad yang tertulis maupun ',0,0,'L');
    
    Fpdf::Ln(5);
    Fpdf::Cell(1);
    Fpdf::SetFont('Times','',12);
    Fpdf::Cell(30,10,'tidak tertulis yang ada didalam pondok ini,dan apabila di kemudian hari saya melanggar,maka saya siap menerima   ',0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(1);
    Fpdf::SetFont('Times','',12);
    Fpdf::Cell(30,10,'Sanksi yang berlaku,yaitu berupa :',0,0,'L');

    Fpdf::Ln(10);
    Fpdf::Cell(30);
    Fpdf::Cell(5,10,'-.',0,0,'L');
    Fpdf::Cell(37,10,'Pelanggaran Pertama',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,'Di Nasehati dan di Arahkan',0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(30);
    Fpdf::Cell(5,10,'-.',0,0,'L');
    Fpdf::Cell(37,10,'Pelanggaran Kedua',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,'Di Arahkan & Di Laporkan Kepada Orang tua',0,0,'L');

    Fpdf::Ln(5);
    Fpdf::Cell(30);
    Fpdf::Cell(5,10,'-.',0,0,'L');
    Fpdf::Cell(37,10,'Pelanggaran Ketiga',0,0,'L');
    Fpdf::Cell(10,10,':',0,0,'L');
    Fpdf::Cell(30,10,'Siap di kembalikan Kepada kedua Orang Tua',0,0,'L');

    Fpdf::Ln(20);
    Fpdf::Cell(5);
    Fpdf::SetFont('Times','',12);
    Fpdf::Cell(20,10,'Demikian Surat ini saya buat dengan sebenar-benarnya dan tanpa adanya paksaan dari pihak manapun. ',0,0,'L');

    $today = date("d-m-Y ");
    Fpdf::Ln(15);
    Fpdf::cell(85);
    Fpdf::Cell(55,10,'Cirebon,',0,0,'R');
    Fpdf::Cell(23,10,$today,0,0,'R');

    Fpdf::Ln(5);
    Fpdf::cell(100);
    Fpdf::Cell(49,10,'Hormat Saya,',0,0,'R');


    Fpdf::Ln(15);
    Fpdf::Cell(10);
    Fpdf::Cell(60,40,'',1,0,'C');
    Fpdf::Cell(40);
    Fpdf::Cell(65,40,'',1,0,'C');

    Fpdf::Ln(1);
    Fpdf::cell(37);
    Fpdf::Cell(5,10,'Orang Tua Santri',0,0,'C');
    Fpdf::Cell(95);
    Fpdf::Cell(10,10,'Calon Santri Baru',0,0,'C');
    
    Fpdf::Ln(30);
    Fpdf::cell(37);
    Fpdf::Cell(5,10,$daftar[0]->ayah,0,0,'C');
    Fpdf::cell(95);
    Fpdf::Cell(10,10,$daftar[0]->nama_lengkap,0,0,'C');

    Fpdf::Output();
    
        exit;
  
  

?>