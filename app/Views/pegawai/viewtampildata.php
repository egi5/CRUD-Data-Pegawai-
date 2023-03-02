<?= $this->extend('layout/main')?>
<?= $this->extend('layout/menu')?>

<?= $this->section('isi') ?>

<link href="<?= base_url() ?>public/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>public/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">DATA PEGAWAI</h4>
    </div>
</div> 

<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body">
            <div class="card-title">
                <button type= "button" class="btn btn-primary btn-sm tambahpegawai">Tambah Pegawai</button>
            </div>
            <p class="card-text viewdata">

            </p>
        </div>
    </div>
</div>
<div class ="viewmodal" style="display:none;"></div>
<script>
    function datapegawai(){
        $.ajax({
            url: "<?= site_url('pegawai/ambildata')?>",
            dataType: "json",
            success: function(response){
                $('.viewdata').html(response.data);     
            },
            error:function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.reponseText + "\n" + thrownError);
            }
        });
    }

    $(document).ready(function(){
        datapegawai();

        $('.tambahpegawai').click(function(e){
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('pegawai/formtambah')?>",
                dataType: "json",
                success: function(response){
                    $('.viewmodal').html(response.data).show();

                    $('#modaltambah').modal('show');
                },
                error:function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.reponseText + "\n" + thrownError);
                }
            });
        });
    });
</script>
<?= $this->endSection('')?>