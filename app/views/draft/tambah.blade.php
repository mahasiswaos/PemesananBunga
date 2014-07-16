@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<div class="col-sm-8">
    <a href="<?php echo URL::to('/draft');?>" class="btn btn-success" ><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
<br/>
<br/>
    <div class="panel panel-warning">
    <div class="panel-heading"><h3><i class="glyphicon glyphicon-plus"></i> Tambah data bunga </h3></div>
<div class="panel-body">
         <form method="post" enctype="multipart/form-data"
               class="form-horizontal" action="<?php echo URL::to('/draft/tambah/proses');?>">
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Bunga</label>
        <div class="col-sm-6">
            <input type="text" name="nama" class="form-control" placeholder="NamaBunga" required="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Gambar</label>
        <div class="col-sm-6">
        <input type="file" name="gambar" /><i>/*  masukan file dengan ekstensi jpg,jpeg,png dan gif</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Harga Bunga</label>
        <div class="col-sm-6">
            <input type="text" name="harga" class="form-control" placeholder="HargaBunga" reqiured="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Latin</label>
         <div class="col-sm-6">
             <input type="text" name="nama_latin" class="form-control" placeholder="NamaLatin" required="">
    </div>
    </div>
    <div class="form-group">
         &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;          &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp; 
        <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Simpan data </button>
        <button type="reset" name="reset" class="btn btn-primary" > <span class="glyphicon glyphicon-refresh"></span> Batal</button>
    </div>
</form>
     </div>
</div>
</div>
@stop
