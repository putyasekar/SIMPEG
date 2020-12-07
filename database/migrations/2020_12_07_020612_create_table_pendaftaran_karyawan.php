<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablePendaftaranKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string("alamat", 200);
            $table->Integer('no_hp');
            $table->string('email')->unique();
            $table->string('ttl');
            $table->string('agama');
            $table->string('institusi');
            $table->string('pendidikan_terakhir');
            $table->string('nama_pelatihan');
            $table->string('penyelenggara');
            $table->string('tahun_pelatihan');
            $table->string('tempat_pelatihan');
            $table->string('nama_perusahaan');
            $table->string('alamat_kantor');
            $table->string('bidang_pekerjaan');
            $table->string('jabatan');
            $table->string('tahun_mulai_akhir');
            
            // $table->string('kursus_seminar_pelatihan');
            // $table->string('riwayat_pekerjaan');
            $table->string('image')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('daftar');
    }
}
