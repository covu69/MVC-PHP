

<h3 style="text-align: center;">Cập nhật mục sản phẩm</h3>
<div class="col-md-12">
<?php
        while($row=mysqli_fetch_array($data["edit_dm"])){
            ?>
<form action="/mohinhmvc/quantri/capnhat_dm" method="POST">
  <div class="form-group">
    <label for="email">ID danh mục:</label>
    <input type="text" value="<?php echo $row["cat_id"] ?>" class="form-control" name="cat_id" >
  </div>
  <div class="form-group">
    <label for="pwd">Tên danh mục:</label>
    <input type="text" value="<?php echo $row["cat_name"] ?>" name="cat_name" class="form-control" >
  </div>
  <button  type="submit" class="btn btn-default" name="capnhat" value="capnhat">Cập nhật</button>
  <!-- <script>
    function cap_nhat(){
      let a=0;
      let b=1;
      if(b==1){
        let a= 3;
      }
    }
  </script> -->
</form>
<?php
        }
        ?>
</div>
