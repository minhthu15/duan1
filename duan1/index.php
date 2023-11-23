<?php
session_start();
// include "./view/home.php";
// include "./view/footer.php";
include "./model/the_loai.php";
include "./model/pdo.php";
include "./model/truyen.php";
include "./model/taikhoan.php";
include "global.php";

if (isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_the_loai();


include "./view/header.php";


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if ((isset($_POST['kyw'])) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if ((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'dangky':
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if (isset($email) && isset($user) && isset($pass)) {
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập tài khoản";
            }

            include "./view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập tài khoản";
            }
            include "./view/taikhoan/dangnhap.php";
            break;

        case 'addtocart':

            $id = $_POST['id'];
            $name = $_POST['name'];
            $img = $_POST['img'];
            $price = $_POST['price'];
            $soluong = 1;
            $ttien = $soluong * $price;
            $spadd = [$id, $name, $img, $price, $soluong, $ttien];
            array_push($_SESSION['mycart'], $spadd);
            include "./view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;
        default:
            # code...
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
?>