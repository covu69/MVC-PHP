<?php
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
         echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
}
?>
<h3 style="text-align: center;">Thêm bài viết</h3>
<div class="col-md-12">
<form action="/mohinhmvc/quantri/insert_baiviet" role="form" method="POST" enctype="multipart/form-data">
 
<div class="form-group">
    <label for="email">Tên bài viết:</label>
    <input type="text" class="form-control" name="title_post" id="">
  </div>
<div class="form-group">
    <label for="email">Hình ảnh bài viết:</label>
    <input type="file" name="image_post" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Chi tiết bài viết:</label>
    <textarea name="content_post" class="form-control" rows="5" style="resize:none"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục sản phẩm:</label>
    <select name="id_category_post" class="form-control">
    <?php
        while($row_dmbv=mysqli_fetch_array($data["dmbv"])){
            ?>
           <option value="<?php echo $row_dmbv["id_category_post"] ?>"><?php echo $row_dmbv["name_category_post"] ?></option>
          <?php
        }
            ?>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Thêm bài viết</button>
</form>

</div>