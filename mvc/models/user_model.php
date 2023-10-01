<?php
class user_model extends DB{
   public function taikhoan ($table,$user_mail, $user_pass){
    $sql = "SELECT * FROM $table WHERE user_mail = '$user_mail'
    AND user_pass = '$user_pass'
    AND user_level = 1";

   $query = mysqli_query($this->con, $sql);

   if(mysqli_num_rows($query)>0){

   header('location:dashboard');
   } else{
    header('location:login');
   }
}
   public function getuser($table,$user_mail, $user_pass){
      $sql = "SELECT * FROM $table WHERE user_mail = '$user_mail'
      AND user_pass = '$user_pass'
      AND user_level = 1";
      return mysqli_query($this->con, $sql);
   }
   
}
?>