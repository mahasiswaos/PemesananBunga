<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View; // untuk menggunakan file view di dalam class
use App\Models\Pelanggan;
use Input;

use Redirect;

class PelangganController extends BaseController {

    public function tampil() {
        $b = pelanggan::all();
        $data = array(
            'anggota' => $b,
        );
        return View::make('anggota.tampil', $data);
    }

    public function pendaftaran() {
        return View::make('anggota.pendaftaran');
    }

    public function pendaftaranProses() {
$tam=input::all();
$b= new Pelanggan();
$b-> nama = $tam['nama'];
$b-> alamat = $tam['nama'];
$b-> no_hp = $tam['no_hp'];
$b-> email = $tam['email'];
$b-> kode_pos = $tam['kode_pos'];
$b->save();
return redirect::to('beranda.tampil',$data);
    }
    public function Edit($id) {
        $b = Pelanggan::find($id);
        $data = array('anggota' => $b,);
        return View::make('anggota.ubah',$data);

    }
    
    public function editProses() {
        
        $tam = Input::all();
        $b = Pelanggan::find($tam['id']);
        $b->nama = $tam['nama'];
        $b->alamat = $tam['alamat'];
        $b->no_hp = $tam['no_hp'];
        $b->email = $tam['email'];
        $b->kode_pos = $tam['kode_pos'];
        $b->save();
        return Redirect::to('/anggota');
    }

    public function hapus($id) {
        $b = Pelanggan::find($id);
        $b->delete();
        return Redirect::to('/anggota/tampil');
        
    }

}
