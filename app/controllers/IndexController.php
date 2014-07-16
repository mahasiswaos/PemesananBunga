<?php
 namespace App\Controllers;
 use App\Controllers\BaseController;
 use View;
 

class IndexController extends BaseController {
    
    public function tampil() 
    {
        return View::make('beranda.index');
    }    
        
    
}