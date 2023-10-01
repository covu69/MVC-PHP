<?php
class post_model extends DB{
   public function get_dm_bv($table){
      $sql = "SELECT * FROM $table order by id_category_post asc";
      return mysqli_query($this->con, $sql);
   }
   public function get_bv(){
    $sql = "SELECT * FROM post
    INNER JOIN category_post
    ON post.id_category_post = category_post.id_category_post
    ORDER BY id_post asc";
    return mysqli_query($this->con, $sql);
   }

   public function add_post($title_post,$content_post,$image_post,$id_category_post){
      $sql = "INSERT INTO `post`(`title_post`, `content_post`, `image_post`, `id_category_post`)
       VALUES ('$title_post','$content_post','$image_post','$id_category_post')";
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

   public function update_sp($table,$id,$title_sanpham,$price_sanpham,$desc_sanpham,$quantity_sanpham,$image_sanpham,$cat_id){
      $sql = "UPDATE $table SET title_sanpham='$title_sanpham',price_sanpham='$price_sanpham',desc_sanpham='$desc_sanpham',quantity_sanpham='$quantity_sanpham',image_sanpham='$image_sanpham',cat_id='$cat_id' WHERE id_sanpham=$id";
      return mysqli_query($this->con, $sql);
   }
}
?>
