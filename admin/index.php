<?php
include "style.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // controller danh muc
        case 'adddm':
            // Kiểm tra nếu submit form
            if (isset($_POST['themmoi'])) {
              
              // Lay giá trị 
              $tenloai = $_POST['tenloai'];
              
              // Validate
              if(empty($tenloai)){
                $error = "Tên loại không được để trống";
              }
              else{
                // Xử lý insert db
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công"; 
              }
              
            }
            
            // Nếu có lỗi
            if (isset($error)) {
              echo "<p>$error</p>"; 
            }
            
            include "danhmuc/add.php"; 
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        /*controller sản phẩm*/

        case 'addsp':
                                //ktr nguoi dung co click vao add k
                            // Khi submit form
                    if(isset($_POST['themmoi'])) {

                        // Lấy dữ liệu
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        
                        // Validate 
                        if(empty($iddm)){
                        $error = "Chọn danh mục sản phẩm";  
                        }
                        else if(empty($tensp)){
                        $error = "Nhập tên sản phẩm";
                        }
                        else if(empty($giasp)){
                        $error = "Nhập giá sản phẩm"; 
                        }
                        else if(!is_numeric($giasp)){
                        $error = "Giá phải là số";
                        }
                        
                        // Code upload và insert db
                        if(!$error){
                        
                        // Code upload hình
                        
                        insert_sanpham(...);
                        $thongbao = "Thêm thành công!";
                        
                        }
                        
                    }
                    
                    // Hiển thị lỗi
                    if(isset($error)){
                        echo "<p>$error</p>"; 
                    }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
            }
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (!empty($hinh)) {
                    $bim = move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                } else {
                    $sanpham = loadone_sanpham($id);
                    // print_r($sanpham);
                }
                if (true) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
            // end sp
        
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
?>