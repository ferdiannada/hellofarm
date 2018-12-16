<?php
  $idEditSuplier = $data['id_suplier'];
  $qrySelectEdit = "select *from suplier where id_suplier = '$idEditSuplier'";
  $eksekusiSelectEdit = mysqli_query($koneksi, $qrySelectEdit);
  $data2 = mysqli_fetch_array($eksekusiSelectEdit);
?>
<link rel="stylesheet" href="style/css/bootstrap-iso.css">
<link rel="stylesheet" href="style/css/font-awesome.min.css">

<link rel="stylesheet" href="style/css/bootstrap.min.css">
<script type="text/javascript" src="style/js/jquery.min.js"></script>
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<!-- akhir koneksi -->

<div class="modal fade" id="modalEditSuplier<? echo $idEditSuplier; ?>" role="dialog">
        <div class="modal-dialog">
          <!--Modal Content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Suplier</h4>
            </div>
            <form method="post" action="prosesEditSuplier.php" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="bootstrap-iso">
               <div class="container-fluid">
                <div class="row">
                 <div class="col-md-9 col-sm-6 col-xs-12">

                   <div class="form-group" hidden>
                     <label class="control-label " for="nama_suplier">
                      id suplier
                     </label>
                     <div class="input-group">
                      <div class="input-group-addon">

                      </div>
                      <input type="text" class="form-control" id="nama_suplier" name="idsuplier" placeholder="Nama Suplier" value="<?php echo $data2['id_suplier']; ?>"></textarea>
                     </div>
                    </div>

                  <div class="form-group ">
                    <label class="control-label " for="nama_suplier">
                     Nama Suplier
                    </label>
                    <div class="input-group">
                     <div class="input-group-addon">

                     </div>
                     <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" placeholder="Nama Suplier" value="<?php echo $data2['nama_suplier'] ?>"></textarea>
                    </div>
                   </div>

                   <div class="form-group ">
                    <label class="control-label " for="alamat">
                     Alamat
                    </label>
                    <div class="input-group">
                     <div class="input-group-addon">

                     </div>
                     <input class="form-control" id="alamat" name="alamat_suplier" placeholder="Alamat" value="<?php echo $data2['alamat'] ?>" type="text">
                    </div>
                   </div>

                   <div class="form-group ">
                    <label class="control-label " for="no_telp">
                     No. Hp
                    </label>
                    <div class="input-group">
                     <div class="input-group-addon">

                     </div>
                     <input type="text" value="<?php echo $data2['no_telp'] ?>" class="form-control" id="no_telp" name="no_hp" placeholder="628xxxx">
                    </div>
                   </div>

                 </div>

                </div>
               </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="rubah" class="btn btn-primary">Simpan</button>
                <button type="submit" name="batal" class="btn btn-danger" data-dismiss="modal">Batal</button>

            </div>
            </form>
            <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal_tambah") {
                ?>
                <script>
                  $ ('#modalEditSuplier').modal('show');
                </script>
                <?php
                echo "<div class='alert alert-info'>
                            <strong>Data </strong>tidak boleh ada yang kosong
                          </div>";
                        }elseif($_GET['pesan'] == "edit_data_kosong"){
                ?>
                <script>
                  $ ('#modalEditSuplier').modal('show');
                </script>
                <?php
                echo "<div class='alert alert-warning'>
                        <strong>Form </strong>tidak boleh kosong
                      </div>";
                  }
              }
             ?>
          </div>

        </div>

      </div>
