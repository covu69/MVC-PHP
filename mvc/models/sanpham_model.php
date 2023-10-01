<?php
class sanpham_model extends DB{
   public function getsp($table){
      $sql = "SELECT * FROM $table
      INNER JOIN category
      ON $table.cat_id = category.cat_id
      ORDER BY id_sanpham asc";
      return mysqli_query($this->con, $sql);
   }

   public function sp_noibat(){
      $sql = "SELECT * FROM `sanpham` WHERE sanpham_hot=1";
      return mysqli_query($this->con, $sql);
   }

   public function add_sp($table,$title_sanpham,$price_sanpham,$desc_sanpham,$quantity_sanpham,$cat_id,$sanphma_hot,$image_sanpham){
      $sql = "INSERT INTO $table( `title_sanpham`, `price_sanpham`, `desc_sanpham`, `quantity_sanpham`, `cat_id`, `sanpham_hot`, `image_sanpham`) VALUES 
     ('$title_sanpham','$price_sanpham','$desc_sanpham','$quantity_sanpham','$cat_id','$sanphma_hot','$image_sanpham')";
      return mysqli_query($this->con, $sql);
   }

   public function xoa_sp($table,$id){
      $sql ="DELETE FROM $table WHERE id_sanpham='$id'";
      return mysqli_query($this->con, $sql);
   }
   public function lay1sp($table,$id){
      $sql = "SELECT * FROM $table
      INNER JOIN category
      ON $table.cat_id = category.cat_id WHERE id_sanpham='$id'";
      return mysqli_query($this->con, $sql);
   }

   public function update_sp($table,$id,$title_sanpham,$price_sanpham,$desc_sanpham,$quantity_sanpham,$image_sanpham,$cat_id,$sanphma_hot){
      $sql = "UPDATE $table SET title_sanpham='$title_sanpham',price_sanpham='$price_sanpham',desc_sanpham='$desc_sanpham',quantity_sanpham='$quantity_sanpham',image_sanpham='$image_sanpham',cat_id='$cat_id',sanpham_hot='$sanphma_hot' WHERE id_sanpham=$id";
      return mysqli_query($this->con, $sql);
   }


}
?>