<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Pemesanan;
use App\Models\Bunga;
use App\Models\Member;
use Input;
use Redirect;

class PemesananControllers extends BaseController {

    public function lihat() {
        $t = Pemesanan::all();
        $data = array(
            'order' => $t
        );
        return View::make('order.lihat', $data);
    }

    public function pesan() {
        
        $b = Bunga::all();
        $m = \App\Models\Pelanggan::all();
        $data = array(
            'bunga' => $b,
            'pelanggan' => $m,
        );
        
        return View::make('order.pesan',$data);
    }
    
  

    public function pesanProses() {
        $in = Input::all();
        $t = new Pemesanan();
        $t->tbl_pelanggan_id = $in['pelanggan'];
        $t->tbl_bunga_id = $in['bunga'];
        $t->harga = $in['harga'];
        $t->jumlah = $in['jumlah']; 
        $t->save();
        
        return Redirect::to('/order');
    }
    public function edit($id) {
        $t = Pemesanan::find($id);
        $data = array ('order'=>$t,);
        return View::make('order.ubah',$data);
                  
    }
    public function editProses() {
        $in = Input::all();
        $t = Pemesanan::find($in['id']);
        $t->tbl_bunga_id = $in['tbl_bunga_id'];
        $t->harga = $in['harga'];
        $t->jumlah = $in['jumlah'];
        $t->update();
        return Redirect::to('/order');
        
        
    }
    public function delete($id) {
        $t = Pemesanan::find($id);
        $t->delete();
        return Redirect::to('/order');
    }
}

