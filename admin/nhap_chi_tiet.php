<?php
    include "../library/connect.php";
    if(isset($_POST['create'])) {
        if($_FILES['hinh_thong_tin_1']['error'] > 0 || $_FILES['hinh_thong_tin_2']['error'] > 0 || $_FILES['hinh_thong_tin_3']['error'] > 0) {
            echo "<script>alert('Upload file không hợp lệ!')</script>";
        } else {
            if(!isset($_POST['id_sp'])) {
                echo "<script>alert('Vui lòng chọn sản phẩm')</script>";                
            } else {
                $path_hinh = "../hinhanh_tai/";
                $hinh_thong_tin_1 = $_FILES['hinh_thong_tin_1']['name'];
                $hinh1_tmp = $_FILES['hinh_thong_tin_1']['tmp_name'];
                $hinh_thong_tin_2 = $_FILES['hinh_thong_tin_2']['name'];
                $hinh2_tmp = $_FILES['hinh_thong_tin_2']['tmp_name'];
                $hinh_thong_tin_3 = $_FILES['hinh_thong_tin_3']['name'];
                $hinh3_tmp = $_FILES['hinh_thong_tin_3']['tmp_name'];
                if(file_exists($path_hinh.$hinh_thong_tin_1) || file_exists($path_hinh.$hinh_thong_tin_2) || file_exists($path_hinh.$hinh_thong_tin_3)) {
                    echo "<script>alert('Hình đã tồn tại vui lòng kiểm tra lại!')</script>";
                } else {
                    $id_sp = $_POST['id_sp'];
                    $thong_tin_1 = $_POST['thong_tin_1'];
                    $thong_tin_2 = $_POST['thong_tin_2'];
                    $thong_tin_3 = $_POST['thong_tin_3'];
                    $sqlct = "INSERT INTO `chi_tiet_sp`(`hinh_thong_tin_1`, `thong_tin_1`, `hinh_thong_tin_2`, `thong_tin_2`, `hinh_thong_tin_3`, `thong_tin_3`, `id_sp`) VALUES ('$hinh_thong_tin_1','$thong_tin_1','$hinh_thong_tin_2','$thong_tin_2','$hinh_thong_tin_3','$thong_tin_3',$id_sp)";
                    if(!mysqli_query($conn,$sqlct)) {
                        echo "<script>alert('Thêm chi tiết sản phẩm mới không thành công');</script>";
                    } else {
                        move_uploaded_file($hinh1_tmp,$path_hinh.$hinh_thong_tin_1);
                        move_uploaded_file($hinh2_tmp,$path_hinh.$hinh_thong_tin_2);
                        move_uploaded_file($hinh3_tmp,$path_hinh.$hinh_thong_tin_3);
                        echo "<script>alert('Thêm chi tiết sản phẩm mới thành công');</script>";
                    }
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
            <h2 class="h2 text-center">Thêm chi tiết sản phẩm</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label >Tên sản phẩm</label>
                  <select class="form-control" name="id_sp">
                    <option value="">Chọn sản phẩm</option>
                    <?php
                            $data = mysqli_query($conn, "SELECT * FROM san_pham");
                            $datalist = mysqli_fetch_all($data);
                            foreach($datalist as $item) {
                    ?>
                        <option value="<?php echo $item['0'] ?>"><?php echo $item['1'] ?></option>
                    <?php
                            }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                    <label>Thông tin 1:</label>
                    <input type="text" class="form-control" name="thong_tin_1" required placeholder="Nhập thông tin">
                </div>
                <div class="form-group">
                    <label>Hình thông tin 1:</label>
                    <input type="file" class="form-control-file" name="hinh_thong_tin_1" required>
                </div>
                <div class="form-group">
                    <label>Thông tin 2:</label>
                    <input type="text" class="form-control" name="thong_tin_2" required placeholder="Nhập thông tin">
                </div>
                <div class="form-group">
                    <label>Hình thông tin 2:</label>
                    <input type="file" class="form-control-file" name="hinh_thong_tin_2" required>
                </div>
                <div class="form-group">
                    <label>Thông tin 3:</label>
                    <input type="text" class="form-control" name="thong_tin_3" required placeholder="Nhập thông tin">
                </div>
                <div class="form-group">
                    <label>Hình thông tin 3:</label>
                    <input type="file" class="form-control-file" name="hinh_thong_tin_3" required>
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