@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<a href="<?php echo URL::to('/draft/tambah');?>" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span>Tambah Data Baru</a>
 <a href="<?php echo URL::to('/draft/lihat');?>" class="btn btn-success" ><span class="glyphicon glyphicon-arrow-left"></span> kembali </a>
<h2>Daftar Data Bunga online</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="warning"> id</th>
            <th class="warning"> nama_bunga</th>
            <th class="warning"> gambar</th>
            <th class="warning"> harga_bunga/pcs</th>
            <th class="warning"> nama_latin</th>
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
            <td> <?php echo $val->nama_latin ?></td>
            
            <td>
                <a class="btn btn-info"href="<?php echo URL::to('/draft/ubah/'.$val->id)?>"><span class="glyphicon glyphicon-edit"></span> edit</a>
                <a class="btn btn-warning " href="<?php echo URL::to('/draft/hapus/'.$val->id)?>"><span class="glyphicon glyphicon-remove-sign"></span> delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
@stop



