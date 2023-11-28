<?php
session_start();
ob_start(); 
include "./model/pdo.php";
include "./model/the_loai.php";
include "./model/truyen.php";
include "./model/taikhoan.php";
include "global.php";
include "./view/header.php";

if (isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_the_loai();
$dsbanchay = loadall_sanpham_top10();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        
        case 'truyen':
            if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                $iddm = $_GET['iddm'];
                $dssp =loadall_sanpham("",$iddm);
                $tentl = load_ten_tl($iddm);
                include "view/truyen.php";
            }else{
                include "view/home.php";

            }
            break;

            
            case 'chitiettruyen':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $id = $_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    include "view/chitiettruyen.php";
                }else{
                    include "view/home.php";
    
                }
                break;



                case 'dangky':
                    if ((isset($_POST['dangky'])) && ($_POST['dangky'])) {
                        $email = $_POST['email'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        insert_taikhoan($email, $user, $pass);
                        $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập tài khoản";
                    }
                    include "./view/taikhoan/dangky.php";
                    break;

                    case 'dangnhap':
                        if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $checkuser = checkuser($user, $pass);
                            if (is_array($checkuser)){
                                $_SESSION['user']=$checkuser;
                                header('location:index.php');
                            }else{
                               $thongbao='Tài khoản không tồn tại.Vui lòng kiểm tra lại đăng ký';
                            }
                          
                        }
                      include "./view/taikhoan/dangnhap.php";
                        break;

                        
                case 'edit_taikhoan':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $id= $_POST['id'];

                        update_taikhoan($id, $user,$pass, $email, $address, $tel);
                        $_SESSION['user']= checkuser($user, $pass);
                            header('Location:index.php?act=edit_taikhoan');
                    }
                    include "./view/taikhoan/edit_taikhoan.php";
                    break;
                    
                    case 'quenmk':
                        if(isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                            $email = $_POST['email'];
                            $checkemail=check_email($email);
                            if (is_array($checkemail)) {
                               $thongbao = "Mật khẩu của bạn là :".$checkemail['pass'];
                            }else{
                                $thongbao="Email này không tồn tại";
                            }
                        }
                        include "./view/taikhoan/quenmk.php";
                        break;
                        case'thoat':
                            session_unset();
                            header('location:index.php');
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
ob_end_flush();
?>