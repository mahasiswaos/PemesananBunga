<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View; // untuk menggunakan file view di dalam class
use App\Models\Bunga;
use Input;
use Redirect;
//use Session;

/**
 * Description of BungaController
 *
 * @author NittaOID
 */
class BungaController extends BaseController {

    public function tampil() {
        $b = Bunga::all(); //data bunga di bungkus dalam variabel dan kemudian vaiabel b di bungkus dalam variabel data dan akan ditampilkan dalam bentuk array
       $data = array(
            'draft' => $b,
        );
        return View::make('draft.tampil', $data);
    }

    public function lihat() {
        $b = Bunga::all();
        $data = array(
            'draft' => $b,
        );
        return View::make('draft.lihat', $data);
    }
    
    public function tambah() {
        return View::make('draft.tambah');
    }

    public function tambahProses() {

       /* jika valid simpan ke database
         */
        $b=Input::all();
        $data= new Bunga ;
        $b->nama=$data['nama'];
        $b->gambar=$pathDb;
        $b->harga=$data['harga'];
        $b->nama_latin=$data['nama_latin'];
        $b-> save ();
              
    }
    public function ubah($id) {
        $b = Bunga::find($id);
        $data = array('draft' => $b,);
        return View::make('draft.ubah',$data);

    }

    public function ubahProses() {
        
        $file = Input::file('gambar');
        $prefixDest = 'public/';
        $destinationPath = 'images';
        $filename = $file->getClientOriginalName();
        $pathFile = $prefixDest . $destinationPath; //public/images
        $pathDb = $destinationPath . '/' . $filename; //images/Tulips.jpg
        //eksekusi penyimpanan file yang di upload
        //menuju folder public
        Input::file('gambar')->move($pathFile, $filename);
        
        $tam = Input::all();
        $b = Bunga::find($tam['id']);
        $b->nama = $tam['nama'];
        $b->gambar =$pathDb;
        $b->harga = $tam['harga'];
        $b->nama_latin =$tam['nama_latin'];
        $b->save();
        return Redirect::to('/draft');
    }

    public function hapus($id) {
        
        $b = Bunga::find($id);
        $b->delete();
        //Session::flash('message', 'Successfully deleted the activity!');
        return Redirect::to('/draft');
    }

}
