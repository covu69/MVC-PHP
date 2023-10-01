<?php
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
         echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
}
?>
<h3 style="text-align: center;">Thêm sản phẩm</h3>
<div class="col-md-12">
<form action="/mohinhmvc/quantri/insert_sanpham" role="form" method="POST" enctype="multipart/form-data">
 
<div class="form-group">
    <label for="email">Tên sản phẩm:</label>
    <input type="text" class="form-control" name="title_sanpham" id="">
  </div>
<div class="form-group">
    <label for="email">Hình ảnh sản phẩm:</label>
    <input type="file" name="image_sanpham" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Giá sản phẩm:</label>
    <input type="text" name="price_sanpham" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Số lượng sản phẩm:</label>
    <input type="text" name="quantity_sanpham" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="pwd">Miêu tả sản phẩm:</label>
    <textarea name="desc_sanpham" class="form-control" rows="5" style="resize:none"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục sản phẩm:</label>
    <select name="cat_id" class="form-control">
    <?php
        while($row=mysqli_fetch_array($data["getdm"])){
            ?>
           <option value="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"] ?></option>
          <?php
        }
            ?>
    </select>
  </div>
  <div class="form-group">
    <label for="pwd">Sản phẩm nổi bật:</label>
    <select name="sanpham_hot" class="form-control">
           <option value="0">Không</option>
           <option value="1">Có </option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Thêm Sản phẩm</button>
</form>

</div>
