<?= $this->extend('layout/main')?>
<?= $this->extend('layout/menu')?>

<?= $this->section('isi') ?>

<link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">DATA PEGAWAI</h4>
    </div>
</div> 

<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body">
            <p class="card-text">
                <table class = "tabel tabel-sm tabel-striped" id= "datapegawai">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor=0; foreach($tampildata as $row):
                            $nomor++;?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $row['idpegawai'] ?></td>
                                <td><?= $row['nama_pegawai'] ?></td>
                                <td><?= $row['jenkel'] ?></td>
                                <td><?= $row['tanggal_lahir'] ?></td>
                                <td><?= $row['alamat_pegawai'] ?></td>
                                <td><?= $row['telepon'] ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection('')?>