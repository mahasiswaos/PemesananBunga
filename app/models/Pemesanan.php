<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Pemesanan
 *
 * @author Amier
 */
class Pemesanan extends Eloquent{
    protected $table ='tbl_pemesanan';
    
    
        
    public $timestamps = false;
    
    public function bunga() {
        return $this->belongsTo('App\\Models\\Bunga');
       
    }
    
    public function pelanggan() {
        return $this->belongsTo('App\\Models\\pelanggan');
       
    }
            
}


