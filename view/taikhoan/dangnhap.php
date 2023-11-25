	 <!-- breadcrumbs-area-start -->
	 <div class="breadcrumbs-area mb-70">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-lg-12">
	 				<div class="breadcrumbs-menu">
	 					<ul>
	 						<li><a href="index.php">Trang chủ</a></li>
	 						<li><a href="index.php?act=dangnhap" class="active">Đăng nhập</a></li>
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
	 					<h2>Đăng nhập</h2>
	 				</div>
	 			</div>
	 			<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
	 				<div class="login-form">
					 <?php
							if (isset($_SESSION['user'])) {
								extract($_SESSION['user'])
								
							?>
	 						<div class="single-login">
	 							<label>Xin chào <span>*</span></label>
	 						</div>

							
	 						<div class="single-login">
	 							<a href="index.php?act=quenmk">Quên mật khẩu</a>
	 						</div>
	 						<div class="single-login">
	 							<a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
	 						</div>
	 						<div class="single-login">
	 							<a href="index.php?act=thoat">Thoát</a>
	 						</div>
	 					<?php
							} else {
							?>
	 						<form action="index.php?act=dangnhap" method="post">
	 							<div class="single-login">
	 								<label>Tên đăng nhập<span>*</span></label>
	 								<input type="text" name="user">
	 							</div>
	 							<div class="single-login">
	 								<label>Mật khẩu <span>*</span></label>
	 								<input type="password" name="pass">
	 							</div>

	 							<div class="single-login single-login-2">
	 								<input type="submit" value="Đăng Nhập" name="dangnhap"><br><br>
	 								<input id="rememberme" type="checkbox" name="rememberme" value="forever">
	 								<span>Nhớ mật khẩu</span>
	 							</div>
	 							<a href="index.php?act=quenmk">Quên mật khẩu</a>
	 				</div>
				</div>
	 			</div>
	 			</form>
				 <?php } ?>
				 <?php
					if (isset($thongbao) && ($thongbao != "")) {
						echo $thongbao;
					}
					?>
	 		</div>
	 	</div>
	 </div>
	 <!-- user-login-area-end -->