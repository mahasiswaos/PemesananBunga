@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<a href="<?php echo URL::to('/beranda'); ?>"class="btn btn-success" ><span class="glyphicon glyphicon-home"></span> Beranda</a>
<a href="<?php echo URL::to('/order/pesan'); ?>"class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span> pesan lagi </a>
<br/>
<br/>
<h2> input data pesanan bunga</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="warning"> Id</th>
            <th class="warning">ID Pelanggan</th>
            <th class="warning">ID Bunga</th>
            <th class="warning">Harga</th>
            <th class="warning">Jml pesan</th>
            <th class="warning">Total Bayar</th>
            <th class="warning">pilihan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($order as $val){ ?>
        <tr>
            
            <td><?php echo $val->id ?></td>
            <td><?php echo $val->tbl_pelanggan_id ?></td>
            <td><?php echo $val->tbl_bunga_id ?></td>
            <td><?php echo $val->harga ?></td>
            <td><?php echo $val->jumlah ?></td>
            <td><?php echo $val->harga * $val->jumlah ?></td>
            <td>
               
                 <a class="btn btn-info"href="<?php echo URL::to('/order/edit/'.$val->id)?>"><span class="glyphicon glyphicon-edit"></span> edit</a>
                <a class="btn btn-warning " href="<?php echo URL::to('/order/delete/'.$val->id)?>"><span class="glyphicon glyphicon-remove-sign"></span> delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>