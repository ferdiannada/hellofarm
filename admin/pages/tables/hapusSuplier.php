<?
  $idHapusSuplier = $data['id_suplier'];
  $qrySelectHapus = "SELECT *FROM suplier where id_suplier = $idHapusSuplier";
  $eksekusiSelectHapus = mysqli_query($koneksi, $qrySelectHapus);
  $dataHapusSuplier = mysqli_fetch_array($eksekusiSelectHapus);
?>

<div class="modal fade" id="modalHapusSuplier<?php echo $data['id_suplier'];?>" role="dialog">
    <div class="modal-dialog">
      <!--Modal Content-->
      <form method="GET" action="prosesHapusSuplier.php">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Buku</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" hidden>
              <label class="control-label " for="idproduk" >
                id suplier
              </label>
               <div class="input-group">
                 <div class="input-group-addon">

                  </div>
                    <input class="form-control" id="kode_suplier" name="kode_suplier" placeholder="Kode Produk" value="<? echo $dataHapusSuplier['id_suplier']; ?>" type="text">
                  </div>
          </div>
          <h3>Apakah anda yakin akan menghapus data dari suplier, <? echo $dataHapusSuplier['nama_suplier']; ?> ?</h3>
        </div>
        <div class="modal-footer">

          <?php
            echo "
            <button type = 'submit' class='btn btn-danger' name='hapus'>
             Hapus
           </button>
            <button class='btn btn-success' data-dismiss='modal'>
             Batal
           </button>
            ";
          ?>


        </div>

      </div>
        </form>
    </div>

  </div>
