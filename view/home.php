<!-- banner-area-start -->
<div class="banner-area banner-res-large pt-30 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="view/img/banner/1.png" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Miễn phí vận chuyển</h4>
                        <p>Đối với tất cả đơn hàng có giá trị $500 trở lên</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="view/img/banner/2.png" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Hoàn lại tiền</h4>
                        <p>100% Đảm bảo hoàn lại tiền nếu có sai sót</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="view/img/banner/3.png" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Thanh toán khi giao hàng</h4>
                        <p>Sự hài lòng của khách hàng là niềm vui của chúng tôi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="view/img/banner/4.png" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Trợ giúp + Hỗ trợ</h4>
                        <p>Gọi đến : + 0123.4567.89</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->
<!-- slider-area-start -->
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(view/img/banner/banner1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-content slider-animated-1 text-center">
                            <h1>Huge Sale</h1>
                            <h2>koparion</h2>
                            <h3>Now starting at £99.00</h3>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(view/img/banner/banner2.jpg);">
            <div class="container">
                <div class="slider-content slider-content-2 slider-animated-1">
                    <h1>We can help get your</h1>
                    <h2>Books in Order</h2>
                    <h3>and Accessories</h3>
                    <a href="#">Contact Us Today!</a>
                </div>
            </div>
        </div>
        <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(view/img/banner/banner3.jpg);">
            <div class="container">
                <div class="slider-content slider-content-2 slider-animated-1">
                    <h1>We can help get your</h1>
                    <h2>Books in Order</h2>
                    <h3>and Accessories</h3>
                    <a href="#">Contact Us Today!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area-end -->
<!-- product-area-start -->
<div class="product-area pt-95 xs-mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2>Sản phẩm hàng đầu</h2>
                    <p>Nếu bạn đang phân vân không biết nên lựa chọn cuốn sách nào hay để đọc. <br /> Hãy đến với chúng tôi, Book HTD hân hạnh được giới thiệu tới khách hàng những đầu sách hàng đầu đang chờ bạn..</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul class="nav justify-content-center">
                        <li><a class="active" href="#Audiobooks" data-bs-toggle="tab">Sách mới </a></li>
                        <li><a href="#books" data-bs-toggle="tab"> Sách giảm giá</a></li>
                        <li><a href="#bussiness" data-bs-toggle="tab">Sách nổi bật</a></li>
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Audiobooks">
                <div class="tab-active owl-carousel">
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
                        echo '<div class="product-wrapper' . $mr . '" >
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
                                <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <button><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a></button>
                                </form>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
                        # code...
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
<!-- banner-area-start -->
<div class="banner-area-5 mtb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img-2">
                    <a href="#"><img src="view/img/banner/banner4.jpg" alt="banner" /></a>
                    <div class="banner-text">
                        <!-- <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                            <h2>Sale up to 30% off</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->
<!-- new-book-area-start -->
<div class="new-book-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                    <h2>Sách nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="tab-active owl-carousel">
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/1.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                        <h4><a href="#"></a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$60.00</li>
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
                            <img src="view/img/product/18.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
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
                        <h4><a href="#">Driven Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$34.00</li>
                                <li class="old-price">$36.00</li>
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
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/3.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
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
                            <img src="view/img/product/10.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                        <h4><a href="#">Fusion Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$59.00</li>
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
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/5.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                                <li>$34.00</li>
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
                            <img src="view/img/product/19.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                        <h4><a href="#">Compete Track Tote</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$32.00</li>
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
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/7.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
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
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/4.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/9.jpg" alt="book" class="primary" />
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
                        <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
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
                            <img src="view/img/product/8.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                        <h4><a href="#">Rival Messenger</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
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
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="view/img/product/11.jpg" alt="book" class="primary" />
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
                        <h4><a href="#">Impulse Duffle</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$74.00</li>
                                <li class="old-price">$78.00</li>
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
                            <img src="view/img/product/3.jpg" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
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
                        <h4><a href="#">Crown Summit</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$36.00</li>
                                <li class="old-price">$38.00</li>
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
    </div>
</div>
<!-- new-book-area-start -->
<!-- banner-static-area-start -->
<div class="banner-static-area bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="banner-shadow-hover xs-mb">
                    <a href="#"><img src="view/img/banner/banner5.jpg" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="banner-shadow-hover">
                    <a href="#"><img src="view/img/banner/banner6.jpg" alt="banner" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-static-area-end -->
<!-- most-product-area-start -->
<div class="most-product-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách</h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/20.jpg" alt="book" /></a>
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
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/21.jpg" alt="book" /></a>
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
                                <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$35.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/22.jpg" alt="book" /></a>
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
                                <h4><a href="#">Compete Track Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$35.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/23.jpg" alt="book" /></a>
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
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/24.jpg" alt="book" /></a>
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
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$70.00</li>
                                        <li class="old-price">$74.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/22.jpg" alt="book" /></a>
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
                                <h4><a href="#">Fusion Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$59.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách mới </h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/23.jpg" alt="book" /></a>
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
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/24.jpg" alt="book" /></a>
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
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$70.00</li>
                                        <li class="old-price">$74.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/26.jpg" alt="book" /></a>
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
                                <h4><a href="#">Driven Backpack1</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$40.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/20.jpg" alt="book" /></a>
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
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/21.jpg" alt="book" /></a>
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
                                <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$35.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/22.jpg" alt="book" /></a>
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
                                <h4><a href="#">Compete Track Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$35.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách hot</h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/27.jpg" alt="book" /></a>
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
                                <h4><a href="#">Crown Summit</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$36.00</li>
                                        <li class="old-price">$38.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/28.jpg" alt="book" /></a>
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
                                <h4><a href="#">Driven Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$34.00</li>
                                        <li class="old-price">$36.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/29.jpg" alt="book" /></a>
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
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/23.jpg" alt="book" /></a>
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
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$30.00</li>
                                        <li class="old-price">$33.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/24.jpg" alt="book" /></a>
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
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$70.00</li>
                                        <li class="old-price">$74.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="view/img/product/22.jpg" alt="book" /></a>
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
                                <h4><a href="#">Fusion Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>$59.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="block-newsletter">
                    <h2>Đăng ký để nhận thông tin mới nhất</h2>
                    <p>Bạn có thể luôn cập nhật được thông tin mới nhất từ trang web của chúng tôi!</p>
                    <form action="#">
                        <input type="text" placeholder="Nhập địa chỉ email của bạn" />
                    </form>
                    <a href="#">Gửi Email</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- most-product-area-end -->
<!-- testimonial-area-start -->
<div class="testimonial-area ptb-100 bg">
    <div class="container">
        <div class="row">
            <div class="testimonial-active owl-carousel">
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
                            <a href="#">Sandy Wilcke/user</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <a href="#">Sandy Wilcke/user</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area-end -->
<!-- social-group-area-start -->
<div class="social-group-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title-3">
                    <h3>Tweets mới nhất</h3>
                </div>
                <div class="twitter-content">
                    <div class="twitter-icon">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="twitter-text">
                        <p>
                            Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen luôn thay đổi của người đọc. Thật tuyệt vời khi lưu ý làm thế nào
                        </p>
                        <a href="#">Book HTD</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title-3">
                    <h3>Phương thức liên lạc</h3>
                </div>
                <div class="link-follow">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- social-group-area-end -->