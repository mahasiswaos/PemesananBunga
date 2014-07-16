<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;//fungsi eloquent adalah untuk model


/**
 * Description of bunga
 *
 * @author NittaOID
 */
class Bunga extends Eloquent {
    protected  $table = 'tbl_bunga';
    
    /**
     * ID tidak menggunakan yang standar yaitu 'id'
     * sehingga perlu di definisikan atau 
     * ditulis id tabel nya (primary key)
     * @var string
     */
    protected $primaryKey = 'id';

    public $timestamps = false;// ketentuan pada laravel agar di non aktifkan proses created at/update _at
    
    
    public function pemesanan() {
        return $this->hasMany('App\\Models\\Pemesanan');
    }
}
