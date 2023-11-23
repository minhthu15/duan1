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
						<?php
						if(isset($_SESSION['user'])){
							extract($_SESSION['user']);
						?>
						<div class="single-login">
								<label>Xin chào</label>
								<?=$user?>
							</div>
							<div class="single-login">
							<div class="single-login single-login-2">
								<a href="index.php?act=edittaikhoan">Cập nhật thông tin tài khoản</a>
							</div>
							<a href="admin/index.php">Đăng nhập Admin</a><br>
							<a href="index.php?act=thoat">Thoát</a>
							</div>
						<?php
						}else{

						}
						?>
						<div class="login-form">
							<div class="single-login">
								<label>Tên đăng nhập hoặc Email<span>*</span></label>
								<input type="text" />
							</div>
							<div class="single-login">
								<label>Mật khẩu <span>*</span></label>
								<input type="text" />
							</div>
							<div class="single-login single-login-2">
								<a href="#">Đăng nhập</a>
								<input id="rememberme" type="checkbox" name="rememberme" value="forever">
								<span>Nhớ mật khẩu</span>
							</div>
							<a href="#">Quên mật khẩu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- user-login-area-end -->