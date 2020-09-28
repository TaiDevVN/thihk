<?php
    if(isset($_POST['create'])) {
        include "../library/connect.php";
        $ten_sp = $_POST['ten_sp'];
        $gia_nhap = $_POST['gia_nhap'];
        $gia_ban = $_POST['gia_ban'];
        $thong_tin = $_POST['thong_tin'];
        $thoi_gian_bh = $_POST['thoi_gian_bh'];
        $chat_lieu = $_POST['chat_lieu'];
        $so_luong = $_POST['so_luong'];
        $id_kieu_loai = $_POST['id_kieu_loai'];
        $hinh = $_FILES['hinh']['name'];
        $hinh_tmp = $_FILES['hinh']['tmp_name'];
        $path_hinh = "../hinhanh_tai/";
        if($_FILES['hinh']['error'] > 0) {
            echo "<script>alert('Upload file không hợp lệ!')</script>";
        } else {
            if(file_exists($path_hinh.$hinh)){
                echo "<script>alert('Hình đã tồn tại vui lòng kiểm tra lại!')</script>";
            } else {
                $sqlsp = "INSERT INTO `san_pham`(`ten_sp`, `hinh`, `gia_nhap`, `gia_ban`, `thong_tin`, `thoi_gian_bh`, `chat_lieu`, `so_luong`, `id_kieu_loai`) VALUES ('$ten_sp','$hinh','$gia_nhap','$gia_ban','$thong_tin','$thoi_gian_bh','$chat_lieu','$so_luong','$id_kieu_loai')";
                if(!mysqli_query($conn,$sqlsp)) {
                    echo "<script>alert('Thêm sản phẩm mới không thành công');</script>";
                } else {
                    move_uploaded_file($hinh_tmp,$path_hinh.$hinh);
                    echo "<script>alert('Thêm sản phẩm mới thành công');</script>";
                }
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/all.min.css">
<title>Title</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="h2 text-center">Thêm sản phẩm</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sp" required placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label>Hình sản phẩm</label>
                    <input type="file" class="form-control-file" name="hinh" required>
                </div>
                <div class="form-group">
                    <label>Giá nhập</label>
                    <input type="number" class="form-control" name="gia_nhap" required placeholder="Nhập giá">
                </div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="number" class="form-control" name="gia_ban" required placeholder="Nhập giá">
                </div>
                <div class="form-group">
                    <label>Thông tin</label>
                    <textarea class="form-control" name="thong_tin"rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Thời gian bảo hành</label>
                    <input type="number" class="form-control" name="thoi_gian_bh" required placeholder="Nhập thời gian">
                </div>
                <div class="form-group">
                    <label>Chất liệu</label>
                    <input type="text" class="form-control" name="chat_lieu" required placeholder="Nhập chất liệu">
                </div>
                <div class="form-group">
                    <label>Số lượng nhập</label>
                    <input type="number" class="form-control" name="so_luong" required placeholder="Nhập số lượng">
                </div>
                <div class="form-group">
                    <label>Nơi sản xuất</label>
                    <select required class="form-control" name="id_kieu_loai">
                        <option value="1">Trong nước</option>
                        <option value="2">Nhập khẩu</option>
                    </select>
                </div>
                <button type="submit" name="create" class="btn btn-success">Xác nhận</button>
                <button type="reset" class="btn btn-danger">Hủy bỏ</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<script src="../javascript/jquery.slim.min.js"></script>
<script src="../javascript/popper.min.js"></script>
<script src="../javascript/bootstrap.min.js"></script>
</body>
</html>