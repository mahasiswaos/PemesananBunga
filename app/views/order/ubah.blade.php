@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>
<a href="<?php echo URL::to('/order/lihat');?>" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> kembali </a>
<br/>
<br/>
<div class="panel panel-warning">
    <div class="panel-heading"><h3><i class="glyphicon glyphicon-plus"></i> Edit pesanan </h3></div>
<div class="panel-body">
<form method="POST" class="form-horizontal" action="<?php echo URL::to('/order/edit/proses'); ?>">
    <input type="hidden" name="id" value="<?php echo $order->id; ?>"
    <input type="hidden" name="tbl_pelanggan_id" value="<?php echo $order->tbl_pelanggan_id; ?>">
    <div class="form-group">
                <div class="col-lg-6">
                    <label>ID Bunga</label>
                    <input type="text"  name="tbl_bunga_id" class="form-control" placeholder="" value="<?php echo $order->tbl_bunga_id ?>">
                </div>
    </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Harga</label>
                   <input type="text"  name="harga" class="form-control" placeholder="" value="<?php echo $order->harga ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Jumlah Pemesanan</label>
                    <input type="text" id="jml" name="jumlah" class="form-control" placeholder="" value="<?php echo $order->jumlah ?>">
                </div>
            </div>
           
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Simpan Pesanan </button>
                <button type="reset" name="reset" class="btn btn-primary" > <span class="glyphicon glyphicon-refresh"></span> Batal</button>
            </div>
        </form>
    </div>
</div>
        @stop
