<?php
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
         echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
}
?>

<div class="col-md-12">
<form action="/mohinhmvc/quantri/authentication_add_dm" method="POST">
  <div class="form-group">
    <label for="email">ID danh mục:</label>
    <input type="text" class="form-control" name="cat_id" id="">
  </div>
  <div class="form-group">
    <label for="pwd">Tên danh mục:</label>
    <input type="text" name="cat_name" class="form-control" id="">
  </div>
  <button type="submit" class="btn btn-default">Thêm danh mục</button>
</form>

</div>
