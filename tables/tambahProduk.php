
  <link rel="stylesheet" href="style/css/bootstrap-iso.css">
  <link rel="stylesheet" href="style/css/font-awesome.min.css">

  <link rel="stylesheet" href="style/css/bootstrap.min.css">
  <script type="text/javascript" src="style/js/jquery.min.js"></script>
  <script type="text/javascript" src="style/js/bootstrap.min.js"></script>

  <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
  <!-- akhir koneksi -->

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Koneksi Font Awesome -->
  <!-- Koneksi tinyMce -->
    <script type="text/javascript" src="artikel/lib/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins : 'pagebreak, code',
        pagebreak_separator: "<!--more-->"

      });
    </script>

	<div class="modal fade" id="modalTambah" role="dialog">
          <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Produk</h4>
              </div>
              <form method="post" action="prosesTambahProduk.php" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="bootstrap-iso">
                 <div class="container-fluid">
                  <div class="row">
                   <div class="col-md-9 col-sm-6 col-xs-12">

                    <div class="form-group ">
                      <label class="control-label " for="nama_produk">
                       Nama Produk
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <input type = "text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                      </div>
                     </div>

                     <div class="form-group ">
                      <label class="control-label " for="gambarproduk">
                       Gambar
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <input class="form-control" id="gambarproduk" name="gambarproduk" placeholder="Gambar Produk" type="file">
                      </div>
                     </div>

                     <div class="form-group ">
                      <label class="control-label " for="deskripsi">
                       Deskripsi
                      </label>
                      <div class="input-group">
                       <div class="input-group-addon">

                       </div>
                       <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="20"></textarea>
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
                       <input class="form-control" id="stok" name="stok" placeholder="Stok" type="number">
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
                       <input class="form-control" id="harga" name="harga" placeholder="Harga" type="number">
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
