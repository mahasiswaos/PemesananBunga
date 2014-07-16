@extends('layout.bootstrap3.index')
@section('content')
<br/>
<br/>

<!--untuk menampilkan tombol kembali(mengarah ke beranda)-->
<a type="button" class="btn btn-success " href="<?php echo URL::to('/beranda') ?>"><span class="glyphicon glyphicon-home"></span> Beranda</a>

<!--untuk menampilkan tombol lihat daftar yang aka menampilkan daftar 
anggota yang telah melakukan pendaftaran -->
<a type="button" class="btn btn-success " href="<?php echo URL::to('/anggota/tampil') ?>"><span class="glyphicon glyphicon-list"></span> Lihat Daftar</a>
<br/>
<br/>
<div class="panel panel-warning">
<div class="panel-heading"><h3><i class="glyphicon glyphicon-plus"></i> pendaftaran Pelanggan </h3></div>
<div class="panel-body">
        <form method="post" enctype="multipart/form-data"
              class="form-horizontal" action="<?php echo URL::to('/anggota/pendaftaran/proses'); ?>">
            <!--untuk mengisi kolom nama-->
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="type your name">
                </div>
            </div>
            <!--untuk mengisi kolom alamat-->
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="type your address">
                </div>
            </div>
            <!--untukmengisi kolom no_hp-->
            <div class="form-group">
                <div class="col-lg-6">
                    <label>no_hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="type your phone number">
                </div>
            </div>
            <!--    untuk mengisi kolom email. type='email' mengharuskan inputan berupa alamat email'
                contoh juichan703@gmail.com-->
            <div class="form-group">
                <div class="col-lg-6">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" placeholder="test@ymail.com">
                </div>
            </div>
            <!--untuk mengisi kolom kode pos-->
            <div class="form-group">
                <div class="col-lg-6">
                    <label>Kode POS</label>
                    <input type="text" name="kode_pos" class="form-control" placeholder="type your post code">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-6">
                    <!--ketika menekan tombol mendaftar maka data yang telah di ketikkan akan tersimpan
                        ke database dan form akan di reset.-->
                    <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Mendaftar </button>
                    <!--tombol batal bertipe reset, yang akan mengosongkan semua kolom yang telah diisi-->           
                    <button type="reset" name="reset" class="btn btn-primary" > <span class="glyphicon glyphicon-refresh"></span> Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
