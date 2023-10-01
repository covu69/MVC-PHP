
<div class="row">
	<div class="col-lg-9">
		<h1 class="page-header">Tất cả đơn hàng</h1>
	</div>
</div>


<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Code đơn hàng</th>
        <th>Ngày đặt hàng</th>
        <th>Tình trạng đơn hàng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i =0;
    foreach($data["list_dh"] as $key => $ord){
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord["order_code"] ?></td>
        <td><?php echo $ord["order_date"] ?></td>
        <td><?php if($ord["order_status"]==0){echo'Đơn hàng mới';}else{echo'Đơn hàng đã xử lý';} ?></td>
        <td><a href="/mohinhmvc/quantri/order_details/<?php echo $ord["order_code"]?>">Xem đơn hàng</a></td>
      </tr>
      <?php
        }
            ?>
    </tbody>
  </table>