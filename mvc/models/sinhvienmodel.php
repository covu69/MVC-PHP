<?php
class sinhvienmodel extends DB{
    public function GetSV(){
          return "Vũ Quốc Cơ";
    }

    public function Tong($a, $b){
          return $a + $b;
    }
    
    public function NV(){
      $qr = "SELECT * FROM `nhanvien`";
      return mysqli_query($this->con, $qr);
    }

    public function ADDkt($makhenthuong,$manv,$phanthuong){
      $qr = "INSERT INTO khenthuong(makthuong, manv, phanthuong) VALUES ('$makhenthuong','$manv','$phanthuong')";
      return mysqli_query($this->con, $qr);
    }
}
?>