<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use Illuminate\Support\Facades\Session;

class DaftarController extends Controller
{
    public function index()
    {
        $Daftar = Daftar::all();

        return view('daftar.index', compact('Daftar'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'nama_lengkap'=> 'required',
            'alamat'=> 'required',
            'alamat'=> 'required',
            'no_hp'=> 'required',
            'email'=> 'required',
            'ttl'=> 'required',
            'agama'=> 'required',
            'institusi'=> 'required',
            'nama_pelatihan'=> 'required',
            'penyelenggara'=> 'required',
            'tahun_pelatihan'=> 'required',
            'tempat_pelatihan'=> 'required',
            'nama_perusahaan'=> 'required',
            'alamat_kantor'=> 'required',
            'bidang_pekerjaan'=> 'required',
            'jabatan'=> 'required',
            'tahun_mulai_akhir'=> 'required',
            'pendidikan_terakhir'=> 'required',
            // 'kursus_seminar_pelatihan'=> 'required',
            // 'riwayat_pekerjaan'=> 'required',
            'image'=>'required'

        ]);
        try{

         $imageName = time().'.'.request()->image->getClientOriginalExtension();

         request()->image->move(public_path('images'), $imageName);
 
            $Daftar = new Daftar();

            $Daftar->nama_lengkap = $request->nama_lengkap;
            $Daftar->alamat = $request->alamat;
            $Daftar->no_hp = $request->no_hp;
            $Daftar->email = $request->email;
            $Daftar->ttl = $request->ttl;
            $Daftar->agama = $request->agama;
            $Daftar->institusi = $request->institusi;
            $Daftar->nama_pelatihan = $request->nama_pelatihan;
            $Daftar->penyelenggara = $request->penyelenggara;
            $Daftar->tahun_pelatihan = $request->tahun_pelatihan;
            $Daftar->tempat_pelatihan = $request->tempat_pelatihan;
            $Daftar->nama_perusahaan = $request->nama_perusahaan;
            $Daftar->alamat_kantor = $request->alamat_kantor;
            $Daftar->bidang_pekerjaan = $request->bidang_pekerjaan;
            $Daftar->jabatan = $request->jabatan;
            $Daftar->tahun_mulai_akhir = $request->tahun_mulai_akhir;
            $Daftar->pendidikan_terakhir = $request->pendidikan_terakhir;
     
            // $Daftar->kursus_seminar_pelatihan = $request->kursus_seminar_pelatihan;
            // $Daftar->riwayat_pekerjaan = $request->riwayat_pekerjaan;
            $Daftar->image = $imageName;

            $Daftar->save();

            Session::flash('message','Data Berhasil Disimpan');
            return redirect()->back();

        } catch (Exception $e){
            Session::flash('message', 'Data Gagal Disimpan');
            return redirect()->back();
      }
    }

    public function detail($id)
    {
        $Daftar = Daftar::find($id);

        return view('daftar.detail', compact('Daftar'));
    }

    public function delete($id)
    {
        $Daftar = Daftar::find($id);

        $Daftar->delete();

        Session::flash('message', 'Berhasil Menghapus');

        return redirect()->back();
    }

    public function edit($id)
    {
        $Daftar = Daftar::find($id);
        return view('daftar.edit', compact('Daftar'));
    }

    public function update(Request $request, $id)
    {
        $Daftar = Daftar::find($id);
        
        $Daftar->nama_lengkap = $request->nama_lengkap;
        $Daftar->alamat = $request->alamat;
        $Daftar->no_hp = $request->no_hp;
        $Daftar->email = $request->email;
        $Daftar->ttl = $request->ttl;
        $Daftar->agama = $request->agama;
        $Daftar->institusi = $request->institusi;
        $Daftar->nama_pelatihan = $request->nama_pelatihan;
        $Daftar->penyelenggara = $request->penyelenggara;
        $Daftar->tahun_pelatihan = $request->tahun_pelatihan;
        $Daftar->tempat_pelatihan = $request->tempat_pelatihan;
        $Daftar->nama_perusahaan = $request->nama_perusahaan;
        $Daftar->alamat_kantor = $request->alamat_kantor;
        $Daftar->bidang_pekerjaan = $request->bidang_pekerjaan;
        $Daftar->jabatan = $request->jabatan;
        $Daftar->tahun_mulai_akhir = $request->tahun_mulai_akhir;
        $Daftar->pendidikan_terakhir = $request->pendidikan_terakhir;
 
        // $Daftar->kursus_seminar_pelatihan = $request->kursus_seminar_pelatihan;
        // $Daftar->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $Daftar->image = $imageName;

        $Daftar->save();

        Session::flash('message', 'Berhasil Memperbarui');

        return redirect()->back();
    }
}
