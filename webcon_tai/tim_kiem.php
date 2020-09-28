
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/contentweb.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php
    include "../library/connect.php";
    if(isset($_GET["tensp"])) {
        if($_GET['loaisp'] == 0){
            $dataxq = mysqli_query($conn, "SELECT * FROM san_pham WHERE ten_sp LIKE '%".$_GET["tensp"]."%'");
            $datalistxq = mysqli_fetch_all($dataxq);
?>
    <div id="maincontents">
<?php
        foreach($datalistxq as $item) {
?>
        <a style="float: left;margin:0 10px;" href="chi_tiet_sp.php?idsp=<?php echo $item['0'] ?>&anhsp=<?php echo $item['2']?>" target="noidungweb">
            <div id="sanpham?sp=<?php echo $item['0']?>">
                <img src="../hinhanh_tai/<?php echo $item['2']?>" class="sizeimage">
                <p class="thongtin">
                    Tên: <?php echo $item['1']?><br>
                    Giá:<span class="gia"> <?php echo number_format($item['4'])?> vnđ </span>
                </p>
            </div>
        </a>
<?php
        }
?>
    </div>
<?php
        } else {
            $data = mysqli_query($conn, "SELECT * FROM san_pham WHERE ten_sp LIKE '%".$_GET["tensp"]."%' AND id_kieu_loai='".$_GET['loaisp']."'");
            $datalist = mysqli_fetch_all($data);
?>
    <div id="maincontents">
<?php
        foreach($datalist as $item) {
?>
        <a style="float: left;margin:0 10px;" href="chi_tiet_sp.php?idsp=<?php echo $item['0'] ?>&anhsp=<?php echo $item['2']?>" target="noidungweb">
            <div id="sanpham?sp=<?php echo $item['0']?>">
                <img src="../hinhanh_tai/<?php echo $item['2']?>" class="sizeimage">
                <p class="thongtin">
                    Tên: <?php echo $item['1']?><br>
                    Giá:<span class="gia"> <?php echo number_format($item['4'])?> vnđ </span>
                </p>
            </div>
        </a>
<?php
        }
?>
    </div>
<?php
        }
    }
?>

</body>
</html>
