<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pelanggan extends Eloquent {

    protected $table = 'pelanggan';
    //protected $primaryKey = 'id';

    public $timestamps = false; // ketentuan pada laravel agar di non aktifkan proses created at/update _at

    public function pemesanan() {
        return $this->hasMany('App\\Models\\Pemesanan');
    }

}
