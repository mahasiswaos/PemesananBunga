@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<div class="col-sm-8">

    <br/>
    <br/>
    <div class="panel panel-warning">
        <div class="panel-heading"><h3><i class="glyphicon glyphicon-plus"></i> Edit data anggota</h3></div>
        <div class="panel-body">
            <form method="post" enctype="multipart/form-data"
                  class="form-horizontal" action="<?php echo URL::to('/anggota/edit/proses'); ?>">
                <input type="hidden" name="id" value="<?php echo $anggota->id; ?>" >
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $anggota->nama; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $anggota->alamat; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>No Hp</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="no_hp" value="<?php echo $anggota->no_hp; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" placeholder="gender" value="<?php echo $anggota->email; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label>Kode POS</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="kode_pos" value="<?php echo $anggota->kode_pos; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Simpan data </button>
                        <a href="<?php echo URL::to('/anggota/tampil'); ?>" class="btn btn-success" ><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>                    
                        <!--<button type="reset" name="reset" class="btn btn-primary" > <span class="glyphicon glyphicon-refresh"></span> Batal</button>-->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
