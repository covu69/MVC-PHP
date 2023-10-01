<?php
class danhmucsp_model extends DB{
   public function getdm($table){
      $sql = "SELECT * FROM $table order by cat_id asc";
      return mysqli_query($this->con, $sql);
   }

   public function add_dm($table,$cat_id,$cat_name){
      $sql = "INSERT INTO $table(`cat_id`, `cat_name`) VALUES ('$cat_id','$cat_name')";
      return mysqli_query($this->con, $sql);
   }

   public function xoa_dm($table,$id){
      $sql ="DELETE FROM $table WHERE cat_id='$id'";
      return mysqli_query($this->con, $sql);
   }
   public function lay1dm($table,$id){
      $sql = "SELECT * FROM $table WHERE cat_id='$id'";
      return mysqli_query($this->con, $sql);
   }

   public function update($table,$id,$cat_name){
      $sql = "UPDATE $table SET `cat_name`='$cat_name' WHERE cat_id='$id'";
      return mysqli_query($this->con, $sql);
   }

   public function laysp_dm($id){
      $sql = "SELECT * FROM sanpham INNER JOIN category ON sanpham.cat_id = category.cat_id WHERE category.cat_id = $id";
      return mysqli_query($this->con, $sql);
   }
   public function chitiet_sp($id){
      $sql = "SELECT * FROM sanpham INNER JOIN category ON sanpham.cat_id = category.cat_id WHERE sanpham.id_sanpham = $id";
      return mysqli_query($this->con, $sql);
   }

   public function sp_lquan($id){
      $sql = "SELECT * FROM sanpham INNER JOIN category ON sanpham.cat_id = category.cat_id WHERE sanpham.cat_id = category.cat_id And category.cat_id = $id ";
      return mysqli_query($this->con, $sql);
   }


}
?>