<section>
         <div class="bg_in">
            <div class="content_page cart_page">
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href=".">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                              <?php
                                  if(isset($_SESSION['shopping_cart'])){    
                              ?>                       
                           <form action='/mohinhmvc/trangweb/thaotac_giohang' method="POST">
                              <?php
                                    $tong_tien =0;
                                    foreach($_SESSION['shopping_cart'] as $key => $value){
                                       $subtotal = $value['sanpham_quantity'] * $value['sanpham_price'];
                                       $tong_tien+=$subtotal;
                              ?>
                              <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="/mohinhmvc/public/uploads/img_sanpham/<?php echo $value['sanpham_image']?>" alt="<?php echo $value['sanpham_title']?>" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $value['sanpham_title']?></h4>
                                    </div>
                                 </td>
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo number_format($value["sanpham_price"],0,',','.').'VND'  ?></span></td>
                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">
                                          <input type="number" min="1" class="inputsoluong" name="qty[<?php echo $value['sanpham_id'] ?>]"  value="<?php echo $value['sanpham_quantity']?>"></div>
                                    </div>
                                    <div class="clear"></div>
                                 </td>
                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format($subtotal,0,',','.').'VND'  ?></span></td>
                                 <td class="actions aligncenter" data-th="">
                                 <button type="submit" style="box-shadow: none; padding:10px 5px;" value="<?php echo $value['sanpham_id']?>" name="del_cart" class="btn btn-sm btn-warning">Xóa</button>
                                 </td>
                              </tr>
                              <?php
                                    }
                              ?>
                              <tr class="tr">
                              <td class="actions aligncenter" data-th="" colspan="7">
                                 <input type="hidden" value="<?php echo $value['sanpham_id'] ?>" name="del_id_sp">
                                    <button type="submit" style="box-shadow: none; padding:10px 5px;" value="<?php echo $value['sanpham_id']?>" name="update_cart" class="btn btn-sm btn-primary">Cập nhật giỏ hàng</button>
                                 </td>
                              </tr>
                           </form>
                           <tr>
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red"><?php echo number_format($tong_tien,0,',','.').'VND'  ?></span>
                                 </div>
                              </td>

                           </tr>
                           <?php
                                  }
                           ?>
                        </tbody>
                        <tfoot>
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="/mohinhmvc/trangweb" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <div class="contact_form">
                     <div class="contact_left">
                        <div class="ch-contacts-details">
                           <ul class="contact-list">
                              <li class="addr">
                                 <strong class="title">Địa chỉ của chúng tôi</strong>
                                 <p><em><strong>QuocCoShop</strong></em><br />
                                 <p>Trung Tâm Bán Hàng:</p>
                                 <p>CN1: Xóm 6 , Xã Xuân Bắc,Huyện Xuân Trường,Tỉnh Nam Định</p>
                                 <p>CN1: Xóm 6 , Xã Xuân Bắc,Huyện Xuân Trường,Tỉnh Nam Định</p>
                                 <p>CN1: Xóm 6 , Xã Xuân Bắc,Huyện Xuân Trường,Tỉnh Nam Định</p>
                                 <p> CN1: Xóm 6 , Xã Xuân Bắc,Huyện Xuân Trường,Tỉnh Nam Định</p>
                                 <p> Hotline: 0963054220 (zalo)</p>
                                 </p>
                              </li>
                           </ul>
                           <div class="hiring-box">
                              <strong class="title">Chào bạn!</strong>
                              <p>Mọi thắc mắc bạn hãy gửi về mail của chúng tôi <strong>vuquocco2002@gmail.com</strong> chúng tôi sẽ giải đáp cho bạn.</p>
                              <p><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Về trang chủ</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="contact_right">
                        <div class="form_contact_in">
                           <div class="box_contact">
                              <form name="FormDatHang" method="post" autocomplete="off" action="/mohinhmvc/trangweb/dathang" >
                                 <div class="content-box_contact">
                                    <div class="row">
                                       <div class="input">
                                          <label>Họ và tên: <span style="color:red;">*</span></label>
                                          <input type="text" name="name" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Số điện thoại: <span style="color:red;">*</span></label>
                                          <input type="text" name="sodienthoai" required onkeydown="return checkIt(event)" class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Địa chỉ: <span style="color:red;">*</span></label>
                                          <input type="text" name="diachi" required class="clsip" >
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Email: <span style="color:red;">*</span></label>
                                          <input type="text" name="email" onchange="return KiemTraEmail(this);" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Nội dung: <span style="color:red;">*</span></label>
                                          <textarea type="text" name="noidung" class="clsipa"></textarea>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                       <div class="input ipmaxn ">
                                          <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng">
                                          <input type="reset" class="btn-gui" value="Nhập lại">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="clear"></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>