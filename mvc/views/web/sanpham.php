
<section>

<div class="bg_in">
   <div class="breadcrumbs">

            <ol itemscope itemtype="http://schema.org/BreadcrumbList">

               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                  <a itemprop="item" href=".">

                  <span itemprop="name">Trang chủ</span></a>

                  <meta itemprop="position" content="1" />

               </li>

               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                  <a itemprop="item" href="/mohinhmvc/trangweb/sanpham">
         
                  <span itemprop="name">Sản phẩm</span></a>

                  <meta itemprop="position" content="2" />

               </li>

              
            </ol>

         </div>
<div class="module_pro_all">
   <div class="box-title">
      <div class="title-bar">
         <h1>Tất cả sản phẩm</h1>

      </div>
   </div>
   <div class="pro_all_gird">
      <div class="girds_all list_all_other_page ">
      <?php 
   foreach($data["laysp"] as $key => $row){
?>
         <div class="grids">
            <div class="grids_in">
               <div class="content">
               <div class="img-right-pro">
                 
                  <a href="/mohinhmvc/trangweb/danhmuc_sp/<?php echo $row['id_sanpham'] ?>">
                  <img class="lazy img-pro content-image" src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $row["image_sanpham"]?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
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
                  <a href="/mohinhmvc/trangweb/chitiet_sp/<?php echo $row['id_sanpham'] ?>">
                     <h3><?php echo $row['title_sanpham'] ?></h3>
                  </a>
               </div>
               <div class="add_card">
                  <a onclick="return giohang(579);">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                  </a>
               </div>
               <div class="price_old_new">
                  <div class="price">
                     <span class="news_price"><?php echo number_format($row["price_sanpham"],0,',','.').'VND'  ?></span>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <?php
   }
?>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <div class="clear"></div>
</div>


</section>