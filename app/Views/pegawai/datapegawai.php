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
            <td>
                <button type = "button" class="btn btn-info btn-sm" onclick="edit<?= $row['idpegawai']?>">Update</button>
                <button type = "button" class="btn btn-danger btn-sm" onclick="edit<?= $row['idpegawai']?>">Delete</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#datapegawai').DataTable();
});

function edit(idpegawai) {
    $.ajax({
        type:"POST",
        url: <?= site_url('pegawai/formedit')?>,
        data:{
            idpegawai: idpegawai
        },
        dataType:"json",  
        success: function(response){
            if(response.sukses){
                $('.viewmodal').html(response.sukses).show();
                $('#modaledit').modal('show');
            }
        },
        error:function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + xhr.reponseText + "\n" + thrownError);
        }
    })
    
}
</script>