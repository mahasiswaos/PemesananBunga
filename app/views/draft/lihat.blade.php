@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<a href="<?php echo URL::to('/draft');?>" class="btn btn-success" ><span class="glyphicon glyphicon-user"></span> as admin</a>
 <a href="<?php echo URL::to('/beranda');?>" class="btn btn-success" ><span class="glyphicon glyphicon-home"></span> beranda</a>
<h2>Daftar Data Bunga online</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="warning"> id</th>
            <th class="warning"> nama bunga</th>
            <th class="warning"> gambar</th>
            <th class="warning"> harga bunga/pcs</th>
            <th class="warning"> pilihan </th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($draft as $val){ ?>
        <tr>
            <td> <?php echo $val->id ?></td>
            <td class="col-lg-3"> <?php echo $val->nama ?></td>
            <td> 
                <img src="<?php echo URL::to($val->gambar); ?>" width="144px" height="120px">
            </td>
            
            <td> <?php echo 'Rp'.$val->harga ?></td>
            <td> <a href="<?php echo URL::to('/order/pesan'); ?>" class="btn btn-warning"/><span class="glyphicon  glyphicon-shopping-cart"></span> Pesan </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
@stop





