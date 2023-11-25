<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?act=dangky" class="active">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- user-login-area-start -->
<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Cập nhật tài khoản</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <div class="login-form">
                    <?php
                    if ((isset($_SESSION['user'])) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edit_taikhoan" method="post">
                        <div class="single-login">
                            <label>Email<span>*</span></label>
                            <input type="email" name="email" value="<?= $email ?>">
                        </div>
                        <div class="single-login">
                            <label>Tên đăng nhập<span>*</span></label>
                            <input type="text" name="user">
                        </div>
                        <div class="single-login">
                            <label>Mật khẩu <span>*</span></label>
                            <input type="password" name="pass" value="<?= $pass ?>">
                        </div>
                        <div class="single-login">
                            <label>Địa chỉ <span>*</span></label>
                            <input type="text" name="address" value="<?= $address ?>">
                        </div>
                        <div class="single-login">
                            <label>Số điện thoại <span>*</span></label>
                            <input type="text" name="tel" value="<?= $tel ?>">
                        </div>

                        <div class="single-login single-login-2">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="submit" value="Cập nhật" name="capnhat"><br><br>
                            <input type="reset" value="Nhập lại">
                        </div>

                </div>
            </div>
            </form>
            <?php

            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </div>
    </div>
</div>
<!-- user-login-area-end -->