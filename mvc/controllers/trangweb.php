<?php
class trangweb extends controller{
    public function index(){
        $dm_sp = $this->model("danhmucsp_model");
        $sp = $this->model("sanpham_model");
        $table = 'category';
        $ht_dmsp= $dm_sp->getdm($table);
        $spnb = $sp->sp_noibat();
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","slider");
        $this->view("web","home",["sp_nb"=>$spnb]);
        $this->view("web","footer");
    }   
     public function danhmuc_sp($id){
        $dm_sp = $this->model("danhmucsp_model");
        $table = 'category';
        $ht_dmsp= $dm_sp->getdm($table);
        $laysp= $dm_sp->laysp_dm($id);
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","danhmuc_sp",["sp_dm"=>$laysp]);
        $this->view("web","footer");
    }

    // sanpham
    public function sanpham(){
        $dm_sp = $this->model("danhmucsp_model");
        $ht_sp = $this->model("sanpham_model");
        $table = 'category';
        $table_sp ='sanpham';
        $ht_dmsp= $dm_sp->getdm($table);
        $ht= $ht_sp->getsp($table_sp); 
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","sanpham",["laysp"=>$ht]);
        $this->view("web","footer");
    }
    // end sanpham

    public function chitiet_sp($id){
        $dm_sp = $this->model("danhmucsp_model");
        $table = 'category';
        $ht_dmsp= $dm_sp->getdm($table);
        $ctsp= $dm_sp->chitiet_sp($id);
        foreach($ctsp as $key => $dmsp){
            $id_dmsp= $dmsp['cat_id'];
        }
        $splq = $dm_sp->sp_lquan($id_dmsp);
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","details_sp",["tt_sp"=>$ctsp,"sp_lq"=>$splq]);
        $this->view("web","footer");
    }

  
    // gio hang
    public function giohang(){
        $dm_sp = $this->model("danhmucsp_model");
        $table = 'category';
        $ht_dmsp= $dm_sp->getdm($table);
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","cart");
        $this->view("web","footer");
    }
    
    public function them_giohang(){
        if(isset($_SESSION["shopping_cart"])){
            $avaiable =0;
            foreach($_SESSION["shopping_cart"] as $key => $value){
                if($_SESSION["shopping_cart"][$key]['sanpham_id']==$_POST['sanpham_id']){
                    $avaiable++;
                    $_SESSION["shopping_cart"][$key]['sanpham_quantity']=$_SESSION["shopping_cart"][$key]['sanpham_quantity']+$_POST['sanpham_quantity'];
                }
            }
            if($avaiable==0){
                $item = array(
                    'sanpham_id' => $_POST["sanpham_id"],
                    'sanpham_title' => $_POST["sanpham_title"],
                    'sanpham_image' => $_POST["sanpham_image"],
                    'sanpham_price' => $_POST["sanpham_price"],
                    'sanpham_quantity' => $_POST["sanpham_quantity"]
                );
                $_SESSION["shopping_cart"][]=$item;
            }
        }else{
            $item = array(
                'sanpham_id' => $_POST["sanpham_id"],
                'sanpham_title' => $_POST["sanpham_title"],
                'sanpham_image' => $_POST["sanpham_image"],
                'sanpham_price' => $_POST["sanpham_price"],
                'sanpham_quantity' => $_POST["sanpham_quantity"]
            );
            $_SESSION["shopping_cart"][]=$item;
        }
        header("location:/mohinhmvc/trangweb/giohang");
    }

    public function thaotac_giohang(){
        if(isset($_POST['del_cart'])){
         if(isset($_SESSION['shopping_cart'])){
             foreach($_SESSION["shopping_cart"] as $key => $value){
                 if ($_SESSION["shopping_cart"][$key]['sanpham_id']== $_POST['del_cart']) {
                     unset($_SESSION['shopping_cart'][$key]);
                 }
             }
             header("location:/mohinhmvc/trangweb/giohang");
         }else{
             header("location:/mohinhmvc/trangweb/index");
         }            
        }else{
            foreach($_POST['qty'] as $key => $qty){
                foreach($_SESSION["shopping_cart"] as $sess => $value){
                if($value['sanpham_id'] == $key && $qty >= 1){
                    $_SESSION['shopping_cart'][$sess]['sanpham_quantity']=$qty;
                }
            }
         }
         header("location:/mohinhmvc/trangweb/giohang");
        }

    }
    // đặt hàng
    public function dathang(){
        $order_model = $this->model("order_model");
        $table_order = "tbl_order";
        $name = $_POST['name'];
        $sodienthoai = $_POST['sodienthoai'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $noidung = $_POST['noidung'];
        $order_code = rand(0,9999);

        date_default_timezone_set('asia/ho_chi_minh');
        $date =date("d/m/Y");
        $hour =date("h:i:sa");
        $order_date = $date.$hour;
        
        $data_order = array(
           '0'=>$order_code,
           '1'=>$date.''.$hour,
           '2'=>'0',
        );
        $result_oder = $order_model->ins_order($table_order,$data_order);
        if(Sess::get("shopping_cart") == true){
            foreach(Sess::get("shopping_cart") as $key => $value){
                $data_order_details = array(
                    '1'=>$order_code,
                    '2'=>$value['sanpham_id'],
                    '3'=>$value['sanpham_quantity'],
                    '4'=>$name,
                    '5'=>$sodienthoai,
                    '6'=>$email,
                    '7'=>$diachi,
                    '8'=>$noidung
                );
                $result_oder_details = $order_model->ins_order_details($data_order_details);
            }

            unset($_SESSION["shopping_cart"]);
            header("location:/mohinhmvc/trangweb/giohang");
        }
    }
    // end
    //end gio hang
    // lien he
    public function lienhe(){
        $dm_sp = $this->model("danhmucsp_model");
        $table = 'category';
        $ht_dmsp= $dm_sp->getdm($table);;
        $this->view("web","header",["getdm"=>$ht_dmsp]);
        $this->view("web","contact");
        $this->view("web","footer");
    }
    // end lien he
}