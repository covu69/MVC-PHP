<?php
class order_model extends DB{
    public function ins_order($table_order, $data_order){
        $sql = "INSERT INTO $table_order(`order_code`, `order_date`, `order_status`) VALUES ('$data_order[0]','$data_order[1]','$data_order[2]')";
       return mysqli_query($this->con, $sql);
    }

    public function ins_order_details($data_order_details){
        $sql = "INSERT INTO `order_details`(`order_code`, `id_sanpham`, `sanpham_quantity`, `name`, `sodienthoai`, `email`, `diachi`, `noidung`) 
        VALUES ('$data_order_details[1]',
        '$data_order_details[2]',
        '$data_order_details[3]',
        '$data_order_details[4]',
        '$data_order_details[5]',
        '$data_order_details[6]',
        '$data_order_details[7]',
        '$data_order_details[8]')";
        return mysqli_query($this->con, $sql);
    }
    public function ds_dh(){
        $sql = "SELECT * FROM `tbl_order` order by order_id asc";
       return mysqli_query($this->con, $sql);
    }
    public function tt_dh($order_code){
        $sql = "SELECT * FROM tbl_order INNER JOIN order_details 
        ON tbl_order.order_code = order_details.order_code 
        INNER JOIN sanpham 
        ON order_details.id_sanpham= sanpham.id_sanpham  
        WHERE tbl_order.order_code = $order_code";
        return mysqli_query($this->con, $sql);
    }
    public function tt_nd($order_code){
        $sql = "SELECT * FROM order_details INNER JOIN tbl_order ON tbl_order.order_code = order_details.order_code WHERE tbl_order.order_code = $order_code LIMIT 1;";
        return mysqli_query($this->con, $sql);
    }

    public function order_confirm($data,$order_code){
        $sql = "UPDATE `tbl_order` SET `order_status`='$data[order_status]' WHERE tbl_order.order_code = $order_code ";
        return mysqli_query($this->con, $sql);
    }
}
?>
