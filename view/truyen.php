<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="#" class="active">Sách <strong><?=$tentl?></strong> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- product-main-area-start -->
<div class="product-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                    <div class="tab-active owl-carousel">
                            <div class="flexslider">
                                <?php
                                $i = 0;
                                foreach ($dssp as $sp) {
                                    extract($sp);
                                    $linksp = "index.php?act=chitiettruyen&idsp=" . $id;
                                    $hinh = $img_path . $img;
                                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                        $mr = "";
                                    } else {
                                        $mr = "mr";
                                    }

                                    echo    '<div class="product-wrapper ' . $mr . '">
							<div class="product-img">
								<a href="' . $linksp . '">
									<img src="' . $hinh . '" alt="book" class="primary" />
								</a>
								<div class="quick-view">
									<a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<div class="product-flag">
									<ul>
										<li><span class="sale">new</span></li>
										<li><span class="discount-percentage">-5%</span></li>
									</ul>
								</div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="' . $linksp . '">' . $name . '</a></h4>
								<div class="product-price">
									<ul>
										<li>' . $price . '</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
							</div>
						</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-main-area-end -->
                <!-- new-book-area-start -->
                <div class="new-book-area mt-60">
                    <div class="section-title text-center mb-30">
                        <h3>SÁCH CÙNG MUA</h3>
                    </div>
                    <div class="tab-active-2 owl-carousel">
                        <?php
                        $i = 0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=chitiettruyen&idsp=" . $id;
                            $hinh = $img_path . $img;
                            if (($i == 2) || ($i == 5) || ($i == 8)) {
                                $mr = "";
                            } else {
                                $mr = "mr";
                            }

                            echo    '<div class="product-wrapper ' . $mr . '">
							<div class="product-img">
								<a href="' . $linksp . '">
									<img src="' . $hinh . '" alt="book" class="primary" />
								</a>
								<div class="quick-view">
									<a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<div class="product-flag">
									<ul>
										<li><span class="sale">new</span></li>
										<li><span class="discount-percentage">-5%</span></li>
									</ul>
								</div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="' . $linksp . '">' . $name . '</a></h4>
								<div class="product-price">
									<ul>
										<li>' . $price . '</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
								<div class="product-button">
									<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
								</div>
								<div class="add-to-link">
									<ul>
										<li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>';
                        }
                        ?>
                        <!-- single-product-end -->


                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/product/3.jpg" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$52.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-end -->
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/product/5.jpg" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li> <span>Starting at</span>$34.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            ?>
                        </div>
                        <!-- single-product-end -->
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/product/7.jpg" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#">Strive Shoulder Pack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$32.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-end -->
                    </div>
                </div>
                <!-- new-book-area-end -->
            </div>

            <div class="col-lg-3 col-md-12 col-12 order-lg-2 order-2">
                <div class="shop-left">
                    <div class="left-title mb-20">
                        <h4>SÁCH BÁN CHẠY</h4>
                    </div>
                    <div class="random-area mb-30">
                        <div class="product-active-2 owl-carousel">
                            <div class="product-total-2">
                                <?php
                                foreach ($spnew as $sp) {
                                    extract($sp);
                                    $linksp = "index.php?act=chitiettruyen&idsp=" . $id;
                                    $hinh = $img_path . $img;


                                    echo '<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="' . $linksp . '"><img src="' . $hinh . '" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="' . $linksp . '">' . $name . '</a></h4>
										<div class="product-price">
											<ul>
												<li>' . $price . '</li>
												<li class="old-price">' . $price . '</li>
											</ul>
										</div>
									</div>
								</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-main-area-end -->