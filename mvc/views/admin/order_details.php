
<div class="row">
	<div class="col-lg-9">
		<h1 class="page-header">Chi tiết đơn hàng</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-9">
		<h2 class="page-header">Thông tin người dùng</h2>
	</div>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên người đặt</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Ghi chú</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i =0;
    foreach($data["tt_nguoidung"] as $key => $tt_nd){
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $tt_nd["name"] ?></td>
        <td><?php echo $tt_nd["sodienthoai"] ?></td>
        <td><?php echo $tt_nd["diachi"] ?></td>
        <td><?php echo $tt_nd["email"] ?></td>
        <td><?php echo $tt_nd["noidung"] ?></td>
      </tr>
      <?php
        }
            ?>
    </tbody>
  </table>

<div class="row">
	<div class="col-lg-9">
		<h2 class="page-header">Thông tin sản phẩm</h2>
	</div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i =0;
    $tong_tien = 0;
    foreach($data["tt_donhang"] as $key => $tt_dh){
      $total = $tt_dh["price_sanpham"]*$tt_dh["quantity_sanpham"];
      $tong_tien+=$total;
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $tt_dh["title_sanpham"] ?></td>
        <td><img width="100" height="100" src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $tt_dh["image_sanpham"]?>" /></td>
        <td><?php echo $tt_dh["quantity_sanpham"] ?></td>
        <td><?php echo number_format($tt_dh["price_sanpham"],0,',','.').'đ'  ?></td>
        <td><?php echo number_format($tt_dh["price_sanpham"]*$tt_dh["quantity_sanpham"],0,',','.').'đ'  ?></td>
      </tr>
      <?php
        }
            ?>
      <form action="/mohinhmvc/quantri/order_confirm/<?php echo $tt_dh["order_code"]?>" method="POST">
      <tr>
        <td><input type="submit" name="update_order" value="Phê duyệt " class="btn-btn-default"></td>
        <td align="right" colspan="6">Tổng tiền: <?php echo number_format($tong_tien,0,',','.').'đ'  ?></td>
      </tr>
      </form>
    </tbody>
  </table>