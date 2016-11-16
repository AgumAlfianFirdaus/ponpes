<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->increments ('nis',10);
            $table->string  ('nama_lengkap',50);
            $table->string  ('nama_panggilan',20);
            $table->date    ('tangal_lahir');
            $table->string  ('jenis_kelamin',10);
            $table->longText('alamat');
            $table->string  ('daerah',20);
            $table->string  ('status',10);
            $table->string  ('ayah',30);
            $table->string  ('ibu',30);
            $table->string  ('no_hp',20);
            $table->dateTime('tanggal_masuk');
            $table->string  ('id_kelas',10);
            $table->string  ('picture',100);

        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
