<section>
   <div class="bg_in">
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Sản phẩm HOT</h1>
            <a class="read_more" href="sanpham.php">
            Xem thêm
            </a>
         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
            <?php 
               foreach($data["sp_nb"] as $key => $spnb){
               ?>
            <form action="/mohinhmvc/trangweb/them_giohang" method="post">

            <input type="hidden" value="<?php echo $spnb['id_sanpham'] ?>" name="sanpham_id">
            <input type="hidden" value="<?php echo $spnb['title_sanpham'] ?>" name="sanpham_title">
            <input type="hidden" value="<?php echo $spnb['image_sanpham'] ?>" name="sanpham_image">
            <input type="hidden" value="<?php echo $spnb['price_sanpham'] ?>" name="sanpham_price">
            <input type="hidden" value="1" name="sanpham_quantity">
               <div class="grids">
                  <div class="grids_in">
                     <div class="content">
                        <div class="img-right-pro">
                           <a href="/mohinhmvc/trangweb/danhmuc_sp/<?php echo $spnb['id_sanpham'] ?>">
                           <img class="lazy img-pro content-image" src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $spnb["image_sanpham"]?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>
                           <div class="content-overlay"></div>
                           <div class="content-details fadeIn-top">
                              <ul class="details-product-overlay">
                                 <li>Màn hình : Super Amoled 4.5k</li>
                                 <li>Độ phân giải : 2K+(1440x3040)</li>
                                 <li>Ram : 8GB</li>
                                 <li>CPU : Android 9.0</li>
                                 <li>GPU : Mali-G76 MP12</li>
                                 <li>SSD : 512MB</li>
                              </ul>
                           </div>
                        </div>
                        <div class="name-pro-right">
                           <a href="/mohinhmvc/trangweb/chitiet_sp/<?php echo $spnb['id_sanpham'] ?>">
                              <h3><?php echo $spnb['title_sanpham'] ?></h3>
                           </a>
                        </div>
                        <div class="add_card">
                           <input type="submit" style="box-shadow: none;" class="btn btn-success" name="addcart" value="Đặt hàng">
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price"><?php echo number_format($spnb["price_sanpham"],0,',','.').'VND'  ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <?php
               } 
               ?>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Macbook mới</h1>
            <a class="read_more" href="sanpham.php">
            Xem thêm
            </a>
         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
            <div class="grids">
               <div class="grids_in">
                  <div class="content">
                     <div class="img-right-pro">
                        <a href="sanpham.php">
                        <img class="lazy img-pro content-image" src="/mohinhmvc/public/image/mac.jpg" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                        </a>
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                           <ul class="details-product-overlay">
                              <li>Màn hình : Super Amoled 4.5k</li>
                              <li>Độ phân giải : 2K+(1440x3040)</li>
                              <li>Ram : 8GB</li>
                              <li>CPU : Android 9.0</li>
                              <li>GPU : Mali-G76 MP12</li>
                              <li>SSD : 512MB</li>
                           </ul>
                        </div>
                     </div>
                     <div class="name-pro-right">
                        <a href="chitietsp.php">
                           <h3>Iphone X 64GB</h3>
                        </a>
                     </div>
                     <div class="add_card">
                        <a onclick="return giohang(579);">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                        </a>
                     </div>
                     <div class="price_old_new">
                        <div class="price">
                           <span class="news_price">17.800.000đ </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Phụ kiện</h1>
            <a class="read_more" href="sanpham.php">
            Xem thêm
            </a>
         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
            <div class="grids">
               <div class="grids_in">
                  <div class="img-right-pro">
                     <a href="sanpham.php">
                     <img class="lazy img-pro" src="/mohinhmvc/public/image/phukien.jpg" data-original="image/phukien.jpg" alt="Máy in Canon MF229DW" />
                     </a>
                  </div>
                  <div class="name-pro-right">
                     <a href="chitietsp.php">
                        <h3>Bàn phím chơi gane 7 màu</h3>
                     </a>
                  </div>
                  <div class="add_card">
                     <a onclick="return giohang(579);">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                     </a>
                  </div>
                  <div class="price_old_new">
                     <div class="price">
                        <span class="news_price">800.000đ </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
</section>
<!--end:body-->
<div class="clear"></div>