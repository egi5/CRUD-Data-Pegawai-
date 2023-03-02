<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <?= form_open('pegawai/simpandata',['class' => 'formpegawai']) ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">ID Pegawai</label>
                    <input type="text" class="form-control" id="idpegawai" name="idpegawai">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control" id="namapegawai" name="namapegawai">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="form-control">
                        <option value="">--pilih--</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgllahir" name="tgllahir">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text area" class="form-control" id="alamat" name="alamat">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">No Handphone</label>
                    <input type="text" class="form-control" id="telepon" name="telepon">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnsimpan">Save</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
     $(document).ready(function(){
        $('.formpegawai').submit(function(e){
            e.preventDefault();
            
            $.ajax({
                type:"post",
                url:$(this).attr('action'),
                data:$(this).serialize(),
                dataType:"json",
                beforeSend: function () {
                    $('#btnsimpan').attr('disable','disabled');
                    $('#btnsimpan').html('<i class="fa fa-spin faspinner"></i>');
                },
                complete: function(){
                    $('#btnsimpan').removeAttr('disable');
                    $('#btnsimpan').html('Simpan');
                },  
                success: function(response){
                    alert(response.sukses);
                },
                error:function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.reponseText + "\n" + thrownError);
                }

            });
            return false;
        });
     });
</script>