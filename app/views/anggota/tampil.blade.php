@extends('layout.bootstrap3.index')
@section('content')
<br>
<br>
<!--untuk menampilkan tombol kembali(mengarah ke beranda)-->
<a type="button" class="btn btn-success " href="<?php echo URL::to('/beranda') ?>"><span class="glyphicon glyphicon-home"></span> Beranda</a>

<h2>Info Daftar Anggota</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="warning">id</th>
            <th class="warning">nama</th>
            <th class="warning">alamat</th>
            <th class="warning">no_hp</th>
            <th class="warning">email</th>
            <th class="warning">kode_pos</th>          
            <th class="warning"> pilihan </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anggota as $val) { ?>
            <tr>
                <td> <?php echo $val->id ?></td>
                <td> <?php echo $val->nama ?></td>
                <td> <?php echo $val->alamat ?></td>
                <td> <?php echo $val->no_hp ?></td>
                <td> <?php echo $val->email ?></td>
                <td> <?php echo $val->kode_pos ?></td>      
                <td>
                    <a class="btn btn-primary " href="<?php echo URL::to('anggota/hapus/'.$val->id) ?> ">Delete</a>
                    <a class="btn btn-warning " href="<?php echo URL::to('anggota/Edit/'.$val->id) ?> ">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
@stop