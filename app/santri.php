<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class santri extends Model {
	protected $table = 'santri';
	protected $primaryKey = 'nis';
	protected $fillable  = array('nis','nama_lengkap','nama_panggilan','tanggal_lahir','jenis_kelamin','alamat','daerah','status','ayah','ibu');

	public function pembayaran()
	{
		return $this->hasMany('App\pembayaran','nis');
	}
}
 ?>
