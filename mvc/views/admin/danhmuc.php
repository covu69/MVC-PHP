
<div class="row">
	<div class="col-lg-9">
		<h1 class="page-header">Tất cả danh mục sản phẩm</h1>
	</div>
</div>
<div id="toolbar" class="btn-group">
	<a href="/mohinhmvc/quantri/add_danhmuc" class="btn btn-success">
		<i class="glyphicon glyphicon-plus"></i> Thêm danh mục 
	</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID danh mục</th>
        <th>Tên danh mục</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($data["getdm"])){
            ?>
      <tr>
        <td><?php echo $row["cat_id"] ?></td>
        <td><?php echo $row["cat_name"] ?></td>
        <td><a href="/mohinhmvc/quantri/del_dm/<?php echo$row["cat_id"]?>">Xóa</a> || <a href="/mohinhmvc/quantri/edit_dm/<?php echo$row["cat_id"]?>">Cập nhật</a></td>
      </tr>
      <?php
        }
            ?>
    </tbody>
  </table>