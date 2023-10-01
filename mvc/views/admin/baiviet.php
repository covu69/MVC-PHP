<h3>Tất cả sản phẩm</h3>
<div id="toolbar" class="btn-group">
	<a href="/mohinhmvc/quantri/add_baiviet" class="btn btn-success">
		<i class="glyphicon glyphicon-plus"></i> Thêm bài viết
	</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID bài viết</th>
        <th>Tên bài viết</th>
        <th>Danh mục bài viết</th>
        <th>Hình ảnh </th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($data["getbv"])){
            ?>
      <tr>
        <td><?php echo $row["id_post"] ?></td>
        <td><?php echo $row["title_post"] ?></td>
        <td value="<?php echo $row["id_category_post"] ?>"><?php echo $row["name_category_post"] ?></td>
        <td style="text-align: center"><img width="100" height="100" src="/mohinhmvc/public/uploads/post/<?php echo $row["image_post"]?>" /></td>
        <td><a href="/mohinhmvc/quantri/del_bv/<?php echo $row["id_post"]?>">Xóa</a> || <a href="/mohinhmvc/quantri/edit_bv/<?php echo$row["id_post"]?>">Cập nhật</a></td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>