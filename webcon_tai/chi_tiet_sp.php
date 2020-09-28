<?php
   include "../library/connect.php";
   $data = mysqli_query($conn, "SELECT * FROM `chi_tiet_sp` AS c,`san_pham` AS s WHERE c.id_sp = s.id_sp AND s.id_sp='".$_GET['idsp']."' LIMIT 0,1");
   $datalist = mysqli_fetch_row($data);

?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Untitled Document</title>
      <link href="../css/chitietsanpham.css" type="text/css" rel="stylesheet">
   </head>
   <body>
      <div id="mainweb_chitiet_sp">
         <div id="tt_hinhct">
            <div>
               <img src="../hinhanh_tai/<?php echo $_GET['anhsp']?>" class="hinh_ct">
            </div>
            <div>
               <img src="../hinhanh_tai/<?php echo $_GET['anhsp']?>" class="hinh_ct_khac">
               <img src="../hinhanh_tai/<?php echo $datalist['1']?>" class="hinh_ct_khac">
               <img src="../hinhanh_tai/<?php echo $datalist['1']?>" class="hinh_ct_khac">
               <img src="../hinhanh_tai/<?php echo $datalist['1']?>" class="hinh_ct_khac">
            </div>
         </div>
         <!-- ket thuc hinh chi tei san pham-->
         <div id="thongtin">
            <div id="tt_chitiet">
               <h2><?php echo $datalist['9']?></h2>
               <p>
                  <b>Giá:<span style="color:#F00"> <?php echo number_format($datalist['12']); ?> vnđ </span></b><br>                  
               </p>
               <p>
                  MÔ TẢ SẢN PHẨM
               </p>
               <p>
                  - Thông tin: <?php echo $datalist['13']?>
               </p>
               <p>
                  - Thời gian bảo hành: <?php echo $datalist['14']?>
               </p>  
               <p>
                  - Chất liệu: <?php echo $datalist['15']?>
               </p>
               <p>
                  - Số lượng tồn: <?php echo $datalist['15']?>
               </p>
               <p>
                  - Sản xuất: <?php echo $datalist['16']?>
               </p>
            </div>
            <!--ket thuc chi tiet san pham--> 
            <div id="tt_mua_hang">
               <a href="#">
                  <div class="muangay">
                     <p class="canhle_mua_ngay">
                        Mua ngay
                     </p>
                  </div>
               </a>
               <a href="#">
                  <div class="tragop">
                     <p  class="canhle_thea_gop">
                        Trã góp
                     </p>
                  </div>
               </a>
               <a href="#">
                  <div class="gopthe">
                     <p class="canhle_thea_gop">
                        Góp thẻ
                     </p>
                  </div>
               </a>
            </div>
            <!--ket thuc mua hang-->
         </div>
         <div id="tt_lienkhac">
            <p>
               - Địa chỉ: 100 Huỳnh Tấn Phát Quận 7 <br>
               - SDT: 0909090909<br>
               - Email: trantantaidev@gmail.com
            </p>
         </div>
         <!--ket thuc thong tin khac-->
         <div id="thongso_chitiet_sp">
            <h2>CHI TIẾT SẢN PHẨM</h2>
            <div style="width: 80%;height:100%;">
                <div style="float: left;height:100%;width: 32%;margin-right:2%;">
                    <p style="width: 100%;clear: both;height: 100px;"><?php echo $datalist['2']?></p>
                    <p style="width: 100%;clear: both;height: 166px;">
                        <img src="../hinhanh_tai/<?php echo $datalist['1']?>" width="100%" height="100%" alt="">
                    </p>
                </div>
                <div style="float: left;height:100%;width: 32%;margin-right:2%;">
                    <p style="width: 100%;clear: both;height: 100px;"><?php echo $datalist['4']?></p>
                    <p style="width: 100%;clear: both;height: 166px;">
                        <img src="../hinhanh_tai/<?php echo $datalist['3']?>" width="100%" height="100%" alt="">
                    </p>
                </div>
                <div style="float: left;height:100%;width: 32%;">
                    <p style="width: 100%;clear: both;height: 100px;"><?php echo $datalist['6']?></p>
                    <p style="width: 100%;clear: both;height: 166px;">
                        <img src="../hinhanh_tai/<?php echo $datalist['5']?>" width="100%" height="100%" alt="">
                    </p>
                </div>
            </div>
        </div>
         <!--thong so chi tiet-->
      </div>
   </body>
</html>