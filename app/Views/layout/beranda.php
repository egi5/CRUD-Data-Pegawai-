<?= $this->extend('layout/main')?>
<?= $this->extend('layout/menu')?>

<?= $this->section('isi') ?>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">Selamat Datang</h4>
    </div>
</div> 

<div class="col-sm-12">
    <div class="card m-b-30 text-white" style="background-color: #333; border-color: #333;">
        <div class="card-body">
            <h3 class="card-title font-20 mt-0">PEGAWAI</h3>
            <p class="card-text">CRUD Tabel Pegawai</p>
            <a href="#" class="btn btn-primary">Tabel Pegawai</a>
        </div>
    </div>
</div>
<?= $this->endSection('')?>