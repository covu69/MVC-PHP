

<h3 style="text-align: center;">Cập nhật sản phẩm</h3>
<div class="col-md-12">
<?php
        foreach($data["edit_sp"] as $key => $sp){
            ?>
            


<form action="/mohinhmvc/quantri/capnhat_sp/<?php echo $sp["id_sanpham"] ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên sản phẩm:</label>
    <input type="text" value="<?php echo $sp["title_sanpham"] ?>" class="form-control" name="title_sanpham" >
  </div>
  <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file"  name="image_sanpham">
                                    <!-- <script src="/mohinhmvc/public/js/xemtruocanh.js">

                                    </script> -->
                                    <br>
                                    <div>
                                    <img width="100" height="100" src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $sp["image_sanpham"]?>" />
                                    </div>
                                </div>
 

   <div class="form-group">
    <label for="email">Danh mục sản phẩm:</label>
    <select name="cat_id" class="form-control">
    <?php
        foreach($data["getdm"] as $key => $dm){
            ?>
             <option <?php if($dm["cat_id"] == $sp["cat_id"]){echo "selected";}?> value=<?php echo $dm["cat_id"]; ?>><?php echo $dm["cat_name"];?></option>
          <?php
        }
            ?>
    </select>
  </div>
    <div class="form-group">
    <label for="email">Giá sản phẩm:</label>
    <input type="text" value="<?php echo $sp["price_sanpham"] ?>" class="form-control" name="price_sanpham" >
  </div>
  <div class="form-group">
    <label for="email">Mô tả sản phẩm:</label>
    <input type="text" value="<?php echo $sp["desc_sanpham"] ?>" class="form-control" name="desc_sanpham" >
  </div>
  <div class="form-group">
    <label for="email">Số lượng sản phẩm:</label>
    <input type="text" value="<?php echo $sp["quantity_sanpham"] ?>" class="form-control" name="quantity_sanpham" >
  </div>  
  <div class="form-group">
    <label for="email">Sản phẩm nổi bật:</label>
    <select name="sanpham_hot" class="form-control">
      <?php
      if($sp["sanpham_hot"]==0){
      ?>
      <option selected value="0">Không</option>
      <option value="1">Có</option>
      <?php
      }else{
      ?>
      <option value="0">Không</option>
      <option selected value="1">Có</option>
      <?php
      }
      ?>
    </select>
  </div>
  <button  type="submit" class="btn btn-default" name="capnhat" value="capnhat">Cập nhật</button>
</form>
<?php
        }
        ?>
</div>
