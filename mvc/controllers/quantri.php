<?php
class quantri extends controller {
   public function login(){
    $this->view("admin","header");
    if(Sess::get('login')==true){
      header('location:dashboard');
    }
    $this->view("admin","login");
    $this->view("admin","footer");
   }

   public function authentication_login(){
    $user_mail = $_POST['user_mail'];
    $user_pass= $_POST['user_pass'];
    $table = 'user';
    $login = $this->model("user_model");
    $login->taikhoan($table,$user_mail,$user_pass);
   Sess::set('login',true);
   
   }

   public function dashboard(){
      Sess::checkss('login');
   $this->view("admin","header");
   $this->view("admin","menu");
   $this->view("admin","dashboard");
   $this->view("admin","footer");
   }

   public function logout(){
      Sess::destroy();
      header("location:/mohinhmvc/quantri/login");
   }
   // session

  

   // end session
   // danh mục sản phẩm
   public function hienthidanhmuc(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $dm = $this->model("danhmucsp_model");
      $table = 'category';
      $htdm=$dm->getdm($table);
      $this->view("admin","danhmuc",["getdm"=>$htdm]);
      $this->view("admin","footer");
   }

   public function add_danhmuc(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $this->view("admin","add_danhmuc");
      $this->view("admin","footer");
   }

   public function authentication_add_dm(){
      $cat_id = $_POST['cat_id'];
      $cat_name =$_POST['cat_name'];
      
    $table = 'category';
    $dm = $this->model("danhmucsp_model");
    $dm->add_dm($table,$cat_id,$cat_name);
    if($dm==1){
      $mesage['msg']="Thêm danh mục thành công!";
      header("location:/mohinhmvc/quantri/hienthidanhmuc?msg=".urldecode(serialize($mesage)));
    }else{
      header("location:/mohinhmvc/quantri/login");
    }
   }

   public function del_dm($id){
      $dm = $this->model("danhmucsp_model");
      $table = 'category';
      $dm->xoa_dm($table,$id);
      if($dm==1){
         header("location:/mohinhmvc/quantri/hienthidanhmuc");
       }else{
         $mesage['msg']="Xóa danh mục không thành công!";
         header("location:/mohinhmvc/quantri/hienthidanhmuc");
       }
   }

   public function edit_dm($id){
      $this->view("admin","header");
      $this->view("admin","menu");
      $dm = $this->model("danhmucsp_model");
      $table = 'category';
      $edit=$dm->lay1dm($table,$id);
      $this->view("admin","edit_danhmuc",["edit_dm"=>$edit]);  
      $this->view("admin","footer");
   }

   public function capnhat_dm(){
      
      $id = $_POST['cat_id'];
      $cat_name =$_POST['cat_name'];
      
    $table = 'category';
    $dm = $this->model("danhmucsp_model");
    $dm->update($table,$id,$cat_name);
    if($dm==1){
      $mesage['msg']="Thêm danh mục thành công!";
      header("location:/mohinhmvc/quantri/hienthidanhmuc");
    }else{
      header("location:/mohinhmvc/quantri/login");
    }
   }

   // ket thuc danh muc

   // san pham
   public function hienthisanpham(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $sp = $this->model("sanpham_model");
      $table = 'sanpham';
      $htsp=$sp->getsp($table);
      $this->view("admin","sanpham",["getsp"=>$htsp]);
      $this->view("admin","footer");
   }

   public function add_sanpham(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $dm = $this->model("danhmucsp_model");
      $table = 'category';
      $htdm=$dm->getdm($table);
      $this->view("admin","add_sanpham",["getdm"=>$htdm]);
      $this->view("admin","footer");
   }

   public function insert_sanpham(){
      $title_sanpham = $_POST['title_sanpham'];
      $desc_sanpham =$_POST['desc_sanpham'];
      $price_sanpham = $_POST['price_sanpham'];
      $quantity_sanpham=$_POST['quantity_sanpham'];
      $cat_id =$_POST['cat_id'];
      $sanpham_hot=$_POST['sanpham_hot'];
      $file_name = $_FILES["image_sanpham"]["name"];
      $file_tmp_name = $_FILES["image_sanpham"]["tmp_name"];
      $file_error = $_FILES["image_sanpham"]["error"];
      if($file_error == 0){
         move_uploaded_file($file_tmp_name, "public/uploads/img_sanpham/".basename($file_name));;
      }
    
    $table = 'sanpham';
    $sp = $this->model("sanpham_model");
    $sp->add_sp($table,$title_sanpham,$price_sanpham,$desc_sanpham,$quantity_sanpham,$cat_id,$sanpham_hot,$file_name);
    if($sp==1){
      header("location:/mohinhmvc/quantri/hienthisanpham");
    }else{
      header("location:/mohinhmvc/quantri/hienthisanpham");
    }
   }

   public function del_sp($id){
      $sp = $this->model("sanpham_model");
      $table = 'sanpham';
      $sp->xoa_sp($table,$id);
      if($sp==1){
         header("location:/mohinhmvc/quantri/hienthisanpham");
       }else{
         header("location:/mohinhmvc/quantri/hienthisanpham");
       }
   }

   public function edit_sp($id){
      $this->view("admin","header");
      $this->view("admin","menu");
      $sp = $this->model("sanpham_model");
      $table = 'sanpham';
      $edit=$sp->lay1sp($table,$id);
      $dm = $this->model("danhmucsp_model");
      $table_dm = 'category';
      $htdm=$dm->getdm($table_dm);
      $this->view("admin","edit_sanpham",["edit_sp"=>$edit,"getdm"=>$htdm]);
      $this->view("admin","footer");
   }

   public function capnhat_sp($id){
      $title_sanpham = $_POST['title_sanpham'];
      $desc_sanpham =$_POST['desc_sanpham'];
      $price_sanpham = $_POST['price_sanpham'];
      $quantity_sanpham=$_POST['quantity_sanpham'];
      $cat_id =$_POST['cat_id'];
      $sanpham_hot =$_POST['sanpham_hot'];
       // Advanced
    if($_FILES["image_sanpham"]["name"] == ""){
      $image_sanpham= $_FILES["image_sanpham"];
  }
  else{
      $image_sanpham= $_FILES["image_sanpham"]["name"];
      $file_tmp_name = $_FILES["image_sanpham"]["tmp_name"];
      $file_error = $_FILES["image_sanpham"]["error"];
      if($file_error == 0){
         move_uploaded_file($file_tmp_name, "public/uploads/img_sanpham/".$image_sanpham);
      }
  }
    
    $sp = $this->model("sanpham_model"); 
    $table='sanpham';
    $sp->update_sp($table,$id,$title_sanpham,$price_sanpham,$desc_sanpham,$quantity_sanpham,$image_sanpham,$cat_id,$sanpham_hot);
    if($sp==1){
   
      header("location:/mohinhmvc/quantri/hienthisanpham");
    }else{
      header("location:/mohinhmvc/quantri/dashboard");
    }
   }
   // end sanpham

   // start post

   public function hienthibaiviet(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $bv = $this->model("post_model");
      $ht=$bv->get_bv();
      $this->view("admin","baiviet",["getbv"=>$ht]);
      $this->view("admin","footer");
   }

   public function add_baiviet(){
      $this->view("admin","header");
      $this->view("admin","menu");
      $dm_bv = $this->model("post_model");
      $table = 'category_post';
      $ht=$dm_bv->get_dm_bv($table);
      $this->view("admin","add_post",["dmbv"=>$ht]);
      $this->view("admin","footer");
   }

   public function insert_baiviet(){
      $title_post = $_POST['title_post'];
      $content_post =$_POST['content_post'];
      $id_category_post =$_POST['id_category_post'];
      $file_name = $_FILES["image_post"]["name"];
      $file_tmp_name = $_FILES["image_post"]["tmp_name"];
      $file_error = $_FILES["image_post"]["error"];
      if($file_error == 0){
         move_uploaded_file($file_tmp_name, "public/uploads/post/".basename($file_name));;
      }
    $pst= $this->model("post_model");
    $pst->add_post($title_post,$content_post,$file_name,$id_category_post);
    if($pst==1){
      

echo '<script type="text/javascript">

            window.onload = function () { alert("Chào mừng tại c-sharpcorner.com."); }

</script>';

      header("location:/mohinhmvc/quantri/hienthibaiviet");
    }else{
      header("location:/mohinhmvc/quantri/hienthibaiviet");
    }
   }

   // end post
   // đơn hàng
   public function dsach_donhang(){
      $ordermodel = $this->model("order_model");
      $dsdh=$ordermodel->ds_dh();
      $this->view("admin","header");
      $this->view("admin","menu");
      $this->view("admin","order",["list_dh"=>$dsdh]);
      $this->view("admin","footer");
   }

   public function order_details($order_code){
      $ordermodel = $this->model("order_model");
      $ttdh=$ordermodel->tt_dh($order_code);
      $ttnd=$ordermodel->tt_nd($order_code);
      $this->view("admin","header");
      $this->view("admin","menu");
      $this->view("admin","order_details",["tt_donhang"=>$ttdh,"tt_nguoidung"=>$ttnd]);
      $this->view("admin","footer");
   }

   public function order_confirm($order_code){
      $ordermodel = $this->model("order_model");
      $data=array(
         'order_status'=>1
      );
      $result=$ordermodel->order_confirm($data,$order_code);
      if($result==1){
        header("location:/mohinhmvc/quantri/dsach_donhang");
      }
   }
   // end đơn hàng
}
?>