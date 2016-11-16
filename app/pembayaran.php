<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
	protected $primaryKey = 'no_pembayaran';
	protected $fillable = array('no_pembayaran','id_login','nis','tanggal_pembayaran');

	public function santri()
	{
		return $this->belongsTo('App\santri','nis');
	}
}
