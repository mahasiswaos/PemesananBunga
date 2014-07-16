@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
 
<div class="col-sm-8">
 <a href="<?php echo URL::to('/beranda');?>" class="btn btn-success" ><span class="glyphicon glyphicon-home"></span> Beranda </a>
 <a href="<?php echo URL::to('/draft/tampil');?>" class="btn btn-success" ><span class="glyphicon glyphicon-chevron-left"></span> kembali ke daftar </a>
 <a href="<?php echo URL::to('/draft/tambah');?>" class="btn btn-success" ><span class="glyphicon glyphicon-pencil"></span> input lagi </a>
<br/>
<br/>
 <div class="panel panel-warning">
<div class="panel-heading"><h2><i class="glyphicon glyphicon-edit"></i> Ubah data bunga </h2></div>
<div class="panel-body">
    <form method="post" enctype="multipart/form-data" 
          class="form-horizontal" action="<?php echo URL::to('/draft/ubah/proses');?>">
     <input type="hidden" name="id" value="<?php echo $draft->id; ?>" >
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Bunga</label>
        <div class="col-sm-6">
        <input type="text" name="nama" class="form-control" placeholder="NamaBunga" value="<?php echo $draft->nama; ?>"/>
        </div>
               
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Gambar</label>
        <div class="col-sm-6">
        <input type="file" name="gambar" value="<?php echo $draft->gambar; ?>"/> <br/> <img src="<?php echo URL::to($draft->gambar); ?>" width="144px" height="120px">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Harga Bunga</label>
        <div class="col-sm-6">
        <input type="text" name="harga" class="form-control" placeholder="HargaBunga" value="<?php echo $draft->harga; ?>"/>
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Latin</label>
        <div class="col-sm-6">
        <input type="text" name="nama_latin" class="form-control" placeholder="NamaLatin" value="<?php echo $draft->nama_latin; ?>">
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
