
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/indexweb.css" type="text/css" rel="stylesheet">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="mainweb">
<!--phan menu cua trang web-->
	<div id="menuweb">
	  <ul id="MenuBar1" class="MenuBarHorizontal">
	    <li><a href="webcon_tai/show_san_pham.php" target="noidungweb">Trang chủ</a></li>
	    <li><a href="#" class="MenuBarItemSubmenu">Sản phẩm</a>
	      <ul>
            <li><a href="webcon_tai/show_san_pham.php?xq=1" target="noidungweb">Trong nước</a></li>
            <li><a href="webcon_tai/show_san_pham.php?xq=2" target="noidungweb">Nhập khẩu</a></li>
	      </ul>
	    </li>
	    <li><a class="MenuBarItemSubmenu" href="webcon_tai/show_san_pham.php" target="noidungweb">Khuyến mãi</a>
	      <ul>
	        <li><a href="webcon_tai/show_san_pham.php" target="noidungweb">Tết nguyên đáng</a></li>
	        <li><a href="webcon_tai/show_san_pham.php" target="noidungweb">Giáng sinh</a></li>
          </ul>
        </li>
	    <li><a href="webcon_tai/show_san_pham.php" target="noidungweb">Liên hệ cửa hàng</a></li>
      </ul>
	</div> <!--ket thuc menu-->
    <div id="menu_rong">
    </div> <!--ket thuc menu rong-->
<!--phan banner website-->
    <div id="bannerweb">
   	  <div id="bannerwebleft">
    		<img src="banner_tai/banner7.gif" class="size_banner">
        </div> <!--ket thuc banner left-->
      <div id="bannerwebrigth">
              <form action="webcon_tai/tim_kiem.php" method="get" name="tk" enctype="text/plain" target="noidungweb">
              <p>
                <input required type="text" name="tensp" placeholder="Tìm sản phẩm" size="23">
                <select name="loaisp">
              		<option value="0">Loại sản phẩm</option>
                	<option value="1">Trong nước</option>
                    <option value="2">Nhập khẩu</option>
                 </select>
                <input type="submit" value="Tìm">
               </p>
                </form>
        <fieldset>
       	  <legend>Khu vực Khách hàng</legend>
          <ul id="MenuBar2" class="MenuBarVertical">
            <li><a class="MenuBarItemSubmenu" href="#">Chức năng khách hàng</a>
              <ul>
                <li><a href="#">Lịch sử mua hàng</a></li>
                <li><a href="#">Đăng ký thành viên</a></li>
                <li><a href="#">Đăng nhập mua hàng</a></li>
              </ul>
            </li>                              
          </ul>
        </fieldset>
      </div>
  </div> <!--ket thuc banner web-->
<!--noi dung website (contents)-->
	<div id="contents">
    	<iframe name="noidungweb" src="webcon_tai/show_san_pham.php" height="900" width="970" frameborder="0" scrolling="no"></iframe>    
    </div> <!--ket thuc contents-->
<!--thong website footer web-->
	<div id="footer">
    	<div id="footer1">
        	<ul>
            	<li class="chinhanh"><a  href=""> Chi nhánh Quận 1 </a></li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận 10 </a></li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận 12 </a></li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận Gò Vấp </a></li>
                <li class="chinhanh"> <a  href=""> Chi nhánh Quận Tân Phú</a> </li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận Bình Dương</a> </li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận Biên Hòa </a></li>
                <li class="chinhanh"><a  href=""> Chi nhánh Quận Đồng Tháp </a></li>
            </ul>
        </div>
        <div id="footer2">
        	<P class="canhle_footer">
            	Văn phòng đại diện tại TP. Hồ Chí Minh
                <address class="canhle_footer">
                 100 Huỳnh Tấn Phát Quận 7<br>
                 Điện thoại: 0909090909<br>
                </address>
            </P>
            <p class="canhle_footer">
            	Giám Đốc: Trần Tấn Tài<br>
                Điện Thoại: 0327894566<br>
                Email: trantantaidev@gmail.com<br>
            </p>
        </div>
        <div id="footer3">
        	<p class="canhle_footer">
            	Hotline: 1900101010<br>
                Maps<br>               
                <img src="hinhanh_tai/Untitled.png" height="200" width="260">
            </p>
        </div>
    </div> <!--ket thuc footer thong tin web-->
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
