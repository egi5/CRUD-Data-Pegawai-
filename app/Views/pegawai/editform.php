<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
        <div class="container">
            <h4>Edit Data</h4>
            <?= form_open('pegawai/updatedata',['class' => 'formpegawai']) ?>
                <div class="mb-3">
                    <label for="" class="form-label">ID Pegawai</label>
                    <input type="text" class="form-control" id="idpegawai" name="idpegawai" value="<?= $data['idpegawai']?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control" id="namapegawai" name="namapegawai" value="<?= $data['nama_pegawai']?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="form-control">
                        <option value="">--pilih--</option>
                        <option value="L" <?php if($data['jenkel'] == 'L') echo 'selected'?>>Laki-laki</option>
                        <option value="P" <?php if($data['jenkel'] == 'P') echo 'selected'?>>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?= $data['tanggal_lahir']?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text area" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat_pegawai']?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">No Handphone</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $data['telepon']?>">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnsimpan">Update</button>
                </div>
            <?= form_close() ?>
        </div>
</body>
</html>

<script>

    $(document).ready(function(){
        $('.formpegawai').submit(function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: $(this).attr('action'),
                data:$(this).serialize(),
                dataType:"Json",  
                success: function(response){
                    alert("Data berhasil diupdate");

                    datapegawai();
                },
                error:function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.reponseText + "\n" + thrownError);
                }

            });
            return false;
        });
    });
</script>

