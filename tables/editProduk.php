  <?php
    $idEdit = $data['id_produk'];
    $qrySelectEdit = "select *from produk where id_produk = '$idEdit'";
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

	<div class="modal fade" id="editProduk<? echo $data['id_produk']; ?>" role="dialog">
          <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Produk</h4>
              </div>
              <form method="post" action="prosesEditProduk.php">
              <div class="modal-body">
                <div class="bootstrap-iso">
                 <div class="container-fluid">
                  <div class="row">
                   <div class="col-md-9 col-sm-6 col-xs-12">

                      <div class="form-group" hidden>
                      <label class="control-label " for="idproduk" >
                       Kode Produk
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <input class="form-control" id="kdproduk" name="kdproduk" placeholder="Kode Produk" value="<? echo $data2['id_produk']; ?>" type="text">
                      </div>
                     </div>

                    <div class="form-group ">
                      <label class="control-label " for="nama_produk">
                       Nama Produk
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <input type="text" class="form-control" id="nama_produk" name="namaeditproduk" placeholder="Nama Produk" value="<? echo $data2['nama_produk']; ?>">
                      </div>
                     </div>

                     <div class="form-group ">
                      <label class="control-label " for="gambarproduk">
                       Gambar
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <input class="form-control" id="gambarproduk" name="fotoproduk" placeholder="Gambar Produk" type="file">
                      </div>
                     </div>

                     <div class="form-group ">
                      <label class="control-label " for="deskripsi">
                       Deskripsi
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <textarea class="form-control" id="deskripsi" name="deskripsieditproduk" placeholder="Deskripsi" rows="10"><? echo $data2['deskripsi_produk']; ?></textarea>
                      </div>
                     </div>

                     <div class="form-group">
                      <label class="control-label " for="stok" >
                       Stok
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span></span>
                       </div>
                       <input class="form-control" id="stok" name="stok" value="<? echo $data2['stok']; ?>" placeholder="Stok" type="number">
                      </div>
                     </div>

                     <div class="form-group">
                      <label class="control-label " for="harga" >
                       Pasang Harga
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span>Rp</span>
                       </div>
                       <input class="form-control" id="harga" name="hargaeditproduk" value="<? echo $data2['harga']; ?>" placeholder="Harga" type="number">
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

            </div>

          </div>

        </div>
