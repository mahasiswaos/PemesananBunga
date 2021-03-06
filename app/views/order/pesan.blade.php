@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<div class="col-sm-8">
    <a href="<?php echo URL::to('/beranda');?>" class="btn btn-success" ><span class="glyphicon glyphicon-home"></span> Beranda </a>
    <br/>
    <br/>
<div class="panel panel-warning">
    <div class="panel-heading"><h3><i class="glyphicon glyphicon-plus"></i> Tambah pesanan </h3></div>
<div class="panel-body">
        <form method="post" class="form-horizontal" action="<?php echo URL::to('/order/pesan/proses'); ?>">

            <div class="form-group">
                <div class="col-lg-6">
                    <label>ID Pelanggan</label>
                    <select name="pelanggan" class="form-control">
                        <?php foreach ($pelanggan as $m) { ?>
                            <option value="<?php echo $m->id ?>"><?php echo $m->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <label>ID Bunga</label>
                    <select name="bunga"  class="form-control">
                        <?php foreach ($bunga as $b) { ?>
                            <option value="<?php echo $b->id ?>"><?php echo $b->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Harga</label>
                    <select name="harga" id="harga" class="form-control">
                        <?php foreach ($bunga as $b) { ?>
                            <option value="<?php echo $b->harga ?>"><?php echo $b->harga ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Jumlah Pemesanan</label>
                    <input type="text" id="jml" name="jumlah" class="form-control" placeholder="">
                </div>
            </div>
           
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Simpan Pesanan </button>
                <button type="reset" name="reset" class="btn btn-primary" > <span class="glyphicon glyphicon-refresh"></span> Batal</button>
            </div>
</div>
</div>
        </form>
        @stop
