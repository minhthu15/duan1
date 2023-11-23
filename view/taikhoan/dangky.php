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
							<h2>Đăng ký</h2>
						</div>
					</div>
					<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
						<div class="login-form">
							<div class="single-login">
								<label>Email<span>*</span></label>
								<input type="text" />
							</div>
							<div class="single-login">
								<label>Tên đăng nhập<span>*</span></label>
								<input type="text" />
							</div>
							<div class="single-login">
								<label>Mật khẩu <span>*</span></label>
								<input type="text" />
							</div>
							<div class="single-login single-login-2">
								<a href="#">Đăng ký</a>
							</div>
						</div>
					</div>
					<?php
					if(isset($thongbao)&&($thongbao!="")){
						echo $thongbao;
					}
					?>
				</div>
			</div>
		</div>
		<!-- user-login-area-end -->