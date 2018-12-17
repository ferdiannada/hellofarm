

<!-- product -->
<?php

  $sqlDetil = mysqli_query($koneksi, "select * from produk where id_produk = '$tampil[id_produk]'");
  $dataDetil = mysqli_fetch_array($sqlDetil);
 ?>
   <div class="modal fade" id="modalDetil<?php echo $tampil['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content modal-info">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body modal-spa">
             <div class="col-md-5 span-2">
                   <div class="item">
                     <img src="../../web/images/of24.png" class="img-responsive" alt="">
                   </div>
             </div>
             <div class="col-md-7 span-1 ">
               <h3><?php echo $dataDetil['nama_produk'] ?></h3>

               <div class="price_single">
                 <span class="reducedfrom "><?php echo $dataDetil['harga'] ?></span>

                <div class="clearfix"></div>
               </div>
               <h4 class="quick">Ulasan Singkat:</h4>
               <p class="quick_desc"> <?php echo $dataDetil['deskripsi_produk'] ?></p>
                <div class="add-to">
                    <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Wheat" data-summary="summary 24" data-price="1.50" data-quantity="1" data-image="images/of24.png">Add to Cart</button>
                 </div>
             </div>
             <div class="clearfix"> </div>
           </div>
         </div>
       </div>
     </div>
