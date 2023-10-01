<h3>Tất cả sản phẩm</h3>
<div id="toolbar" class="btn-group">
	<a href="/mohinhmvc/quantri/add_sanpham" class="btn btn-success">
		<i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
	</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Mô tả sản phẩm</th>
        <th>Số lượng sản phẩm</th>
        <th>Sản phẩm nổi bật</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($data["getsp"])){
            ?>
      <tr>
        <td><?php echo $row["id_sanpham"] ?></td>
        <td><?php echo $row["title_sanpham"] ?></td>
        <td value="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"] ?></td>
        <td style="text-align: center"><img width="100" height="100" src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $row["image_sanpham"]?>" /></td>
        <td><?php echo number_format($row["price_sanpham"],0,',','.').'đ'  ?></td>
        <td><?php echo $row["desc_sanpham"] ?></td>
        <td><?php echo $row["quantity_sanpham"] ?></td>
        <td><?php
         if( $row["sanpham_hot"]==0){
          echo "Không phải sản phẩm nổi bật";
         }else{
          echo "Sản phẩm nổi bật";
         }
         
        ?></td>
        <td><a href="/mohinhmvc/quantri/del_sp/<?php echo$row["id_sanpham"]?>">Xóa</a> || <a href="/mohinhmvc/quantri/edit_sp/<?php echo$row["id_sanpham"]?>">Cập nhật</a></td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>