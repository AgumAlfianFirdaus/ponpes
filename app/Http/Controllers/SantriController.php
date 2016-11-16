<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Hash;
use Redirect;
use View;
use Auth;
use Session;
use File;
use Fpdf;

use App\login;
use App\santri;
use App\pembayaran;

class SantriController extends Controller
{
    public function index()
    {
        return View::make ('login');
    }

     public function login()
   {
        
       if(Auth::attempt(['username' => Input::get('username'),'password' =>Input::get('password')]))
       {
         if (Auth::user()->hak_akses=="admin"){
            Session::put('login_status', 'loggedin');
            return  Redirect::to('/read');
            
        } else if (Auth::user()->hak_akses=="user"){
            Session::put('login_status', 'loggedin');
            return Redirect::to('user');
        }

       }
        else {
            return Redirect::to ('/')->with ('message','Username or Password is Wrong');
    }
        
        
   }

   public function readData()
   {
        $cekAkses = $this->checkAccesAccount();
        if($cekAkses!="") return $cekAkses;
        
        
        $login=DB::table('login') ->get();
        return View::make('admin/admin_read', compact('login'));
        
       
   }

   public function cekLogin()
   {
        $login_status = Session::get('login_status');
        if ($login_status=='loggedout'){
        return redirect('/')->with('message','Login Please.');
      }

   }

   public function checkAccesAccount(){

    $cekLogin = $this->cekLogin();
    if($cekLogin!="") return $cekLogin;

    if (Auth::user()->hak_akses!='admin'){
            return Redirect::to('/user')->with('message','You Cant Acces Thats Page.');
            die();
      }
   }

    public function readSantri()
   {
        $cekAkses = $this->checkAccesAccount();
        if($cekAkses!="") return $cekAkses;

        $santri=DB::table('santri') ->get();
        return View::make('santri/read_santri', compact('santri'));

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function dataSis()
   {

    return View::make('santri/add_sis');
   }

   public function dataGuru()
   {
      return View::make('santri/data_guru');
   }
   
   public function addData(){
        return View::make('santri/add_santri');
   }

   public function editUser($id)
    {
        $this->checkAccesAccount();
                
        $login = login::find($id);
        $hak_akses = login::select('hak_akses')->distinct()->get();
        $activation_status = login::select('activation_status')->distinct()->get();
        // return $activation;
        // return $hak_akses;
        return View::make('/admin/user_edit',compact('login','hak_akses','activation_status'));
    }
    
    public function userProcess()
    {
        $data = array(
                'username' => Input::get('username'),
                'email' => Input::get('email'),
                'hak_akses' => Input::get('hak_akses'),
                'activation_status' => Input::get('activation_status')
                );
           
            
            DB::table('login')->where('id','=',Input::get('id'))->update($data);
            
            return Redirect::to('/read')->with('message','User has been changed');
    }

    
    public function daftarSantri()
   {
       $today = date("Y-m-d H:i:s");

       $data3 = array(
        'nama_lengkap'      => Input::get('nama_lengkap'),
        'nama_panggilan'    => Input::get('nama_panggilan'),
        'tanggal_lahir'     => Input::get('tanggal_lahir'),
        'nama_lengkap'      => Input::get('nama_lengkap'),
        'jenis_kelamin'     => Input::get('jenis_kelamin'),
        'alamat'            => Input::get('alamat'),
        'daerah'            => Input::get('daerah'),
        'status'            => Input::get('status'),
        'ayah'              => Input::get('ayah'),
        'ibu'               => input::get('ibu'),
        'no_hp'             => input::get('no_hp'),
        'tanggal_masuk'     => $today,
        'id_kelas'          => Input::get('kelas_pondok'),
        'picture'           => Input::get('file')

       );

            // return $data3;
            DB::table('santri')->insert($data3);
            $nis = DB::table('santri')->get();
            foreach ($nis as $a) {
              $ambil = $a->nis;
            }
    
            $daftar = DB::table('santri')->where('nis','=',$ambil)->get();
            return View::Make('santri/cetak_daftar', compact('daftar'));

   }

 
    public function editdata($nis)
   {
        $this->checkAccesAccount();

        $santri = santri::find($nis);
        $status = santri::select('status')->distinct()->get();
        $jenis_kelamin = santri::select('jenis_kelamin')->distinct()->get();
        // return $data3;
        return View::make('/santri/edit_santri',compact('santri','nis','status','jenis_kelamin'));
   }


   public function proccesEdit()
    {
        $data3 = array(
                'nama_lengkap'      => Input::get('nama_lengkap'),
                'nama_panggilan'    => Input::get('nama_panggilan'),
                'tanggal_lahir'     => Input::get('tanggal_lahir'),
                'jenis_kelamin'     => Input::get('jenis_kelamin'),
                'alamat'            => Input::get('alamat'),
                'daerah'            => Input::get('daerah'),
                'status'            => Input::get('status'),
                'no_hp'             => Input::get('no_hp')
                );
           
            
            DB::table('santri')->where('nis','=',Input::get('nis'))->update($data3);
            
            return Redirect::to('/read_santri')->with('message','santri has been changed');
    }

     public function pembayaran()
   {

    $data=DB::table ('santri')->get();
    // $bayar=DB::table('pembayaran')
    // ->join('santri','nis','=','pembayaran.nis')
    // ->get();
    //  $aa=DB::select("select * from `pembayaran` join `santri` on `santri`.`nis` = `pembayaran`.`nis")->get();
    // return $aa;
    $bayar=pembayaran::with('santri')->get();
    // return $bayar;
    return view::make('santri/data_pembayaran', compact('data','bayar')) ;
   
   }

    public function bayarProses()
    {
      
        $today = date("Y-m-d");
        $harga=250000;
        $user=Auth::user()->id;
        $data4 = array(
        'nis'                 => Input::get('nis'),
        'id_login'            =>$user,
        'tanggal_pembayaran'  => $today,
        'jumlah_bulan'        => Input::get('jumlah_bulan'),
        'awal'                => Input::get('awal'),
        'akhir'               =>Input::get('akhir'),
        'total'               => $harga * Input::get('jumlah_bulan')
       
       );
            DB::table('pembayaran')->insert($data4);
            // $bayar=$data4;
             $no = DB::table('pembayaran')->get();
            foreach ($no as $nopem) {
              $ambil = $nopem->no_pembayaran;
            }
    
            $bayar = DB::table('pembayaran')->where('no_pembayaran','=',$ambil)->get();
            // return $bayar;
            $data =DB::table('santri')->where('nis','=',Input::get('nis'))->get();
            // return $data;
            return View::Make('santri/cetak_bayar', compact('data','bayar'));
            // return Redirect::to('/pembayaran')->with('message', 'success');

    }

    public function printsantri()
    {

        $santri=DB::table('santri')
        ->select('nis','nama_lengkap','jenis_kelamin','daerah','status','keterangan')
        ->where('jenis_kelamin','=','Laki-Laki')
        ->orderby('nama_lengkap')
        ->get();
        // return $santri;
         $santri2=DB::table('santri')
        ->select('nis','nama_lengkap','jenis_kelamin','daerah','status','keterangan')
        ->where('jenis_kelamin','=','Perempuan')
        ->orderby('jenis_kelamin')
        ->get();
        return View::make('santri/cetak_santri' ,compact('santri','santri2'));

    }

     public function printBayar()
    {
        $bayar=DB::table('pembayaran')->get();
        // return $bayar;
        $santri=DB::table('santri')->get();
        return View::make('santri/cetak_pembayaran' ,compact('bayar','santri'));

    }
    public function print_santri($nis)
    {

    }

    public function delete($nis)
   {
        $this->checkAccesAccount();

        DB::table('santri') ->where ('nis','=',$nis)->delete();
        return Redirect::to('/read_santri')->with('message','Data has been Deleted');

        DB::table('pembayaran')->where ('no_pembayaran','=',$no_pembayaran)->delete();
        return Redirect::to('/pembayaran')->with('message','Data has been Deleted');
   }

    public function delPembayaran($no_pembayaran)
   {
        $this->checkAccesAccount();

      
        DB::table('pembayaran')->where ('no_pembayaran','=',$no_pembayaran)->delete();
        return Redirect::to('/pembayaran')->with('message','Data has been Deleted');
 
  }

  public function logout()
       {

        Auth::logout();
        Session::put('login_status', 'loggedout');
        return Redirect::to('/')->with ('message','Logout Success');   
       }
}
