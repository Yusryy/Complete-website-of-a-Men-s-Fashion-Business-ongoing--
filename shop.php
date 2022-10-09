<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="user-sign-in.php">Log In</a>
                <a href="#">FAQs</a>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a>
            <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>4</span></a>
            <div class="price">LKR:00.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Fashion is about something that comes from within you.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Fashion is about something that comes from within you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="signup.php">Log In</a>
                                <a href="#">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./indexs.php"><img src="img/Logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./indexs.php">Home</a></li>
                            <li class="active"><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Gallery</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a>
                        <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>4</span></a>
                        <div class="price">LKR:00.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="shirts.php">T-shirts & Shirts </a></li>
                                                    <li><a href="trousers.php">Trousers </a></li>
                                                    <li><a href="shoes.php">Shoes </a></li>
                                                    <li><a href="watches.php">Watches </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Calvin Klein</a></li>
                                                    <li><a href="#">Tommy Hilfiger</a></li>
                                                    <li><a href="#">Polo</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">$0.00 - $50.00</a></li>
                                                    <li><a href="#">$50.00 - $100.00</a></li>
                                                    <li><a href="#">$100.00 - $150.00</a></li>
                                                    <li><a href="#">$150.00 - $200.00</a></li>
                                                    <li><a href="#">$200.00 - $250.00</a></li>
                                                    <li><a href="#">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">xs
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="xxl">xxl
                                                    <input type="radio" id="xxl">
                                                </label>
                                                <label for="3xl">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl">4xl
                                                    <input type="radio" id="4xl">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                                <label class="c-1" for="sp-1">
                                                    <input type="radio" id="sp-1">
                                                </label>
                                                <label class="c-2" for="sp-2">
                                                    <input type="radio" id="sp-2">
                                                </label>
                                                <label class="c-3" for="sp-3">
                                                    <input type="radio" id="sp-3">
                                                </label>
                                                <label class="c-4" for="sp-4">
                                                    <input type="radio" id="sp-4">
                                                </label>
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="shirts.php">Tshirts</a>
                                                <a href="shoes.php">Shoes</a>
                                                <a href="trousers.php">Trousers</a>
                                                <a href="watches.php">Watches</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">High To Low</option>
                                        <option value="">Popular</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                        </li>
                                        <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Flat Shoes Leather</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:5500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-7">
                                            <input type="radio" id="pc-7">
                                        </label>
                                        <label class="active black" for="pc-8">
                                            <input type="radio" id="pc-8">
                                        </label>
                                        <label class="grey" for="pc-9">
                                            <input type="radio" id="pc-9">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Brown Jacket</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-10">
                                            <input type="radio" id="pc-10">
                                        </label>
                                        <label class="active black" for="pc-11">
                                            <input type="radio" id="pc-11">
                                        </label>
                                        <label class="grey" for="pc-12">
                                            <input type="radio" id="pc-12">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                        </li>
                                        <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Flowing Scalf</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-16">
                                            <input type="radio" id="pc-16">
                                        </label>
                                        <label class="active black" for="pc-17">
                                            <input type="radio" id="pc-17">
                                        </label>
                                        <label class="grey" for="pc-18">
                                            <input type="radio" id="pc-18">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Leather Backpack</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-19">
                                            <input type="radio" id="pc-19">
                                        </label>
                                        <label class="active black" for="pc-20">
                                            <input type="radio" id="pc-20">
                                        </label>
                                        <label class="grey" for="pc-21">
                                            <input type="radio" id="pc-21">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Polo t-shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-22">
                                            <input type="radio" id="pc-22">
                                        </label>
                                        <label class="active black" for="pc-23">
                                            <input type="radio" id="pc-23">
                                        </label>
                                        <label class="grey" for="pc-24">
                                            <input type="radio" id="pc-24">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Summer t-shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-25">
                                            <input type="radio" id="pc-25">
                                        </label>
                                        <label class="active black" for="pc-26">
                                            <input type="radio" id="pc-26">
                                        </label>
                                        <label class="grey" for="pc-27">
                                            <input type="radio" id="pc-27">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                        </li>
                                        <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>CK Perfume</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-28">
                                            <input type="radio" id="pc-28">
                                        </label>
                                        <label class="active black" for="pc-29">
                                            <input type="radio" id="pc-29">
                                        </label>
                                        <label class="grey" for="pc-30">
                                            <input type="radio" id="pc-30">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Back Pack</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-31">
                                            <input type="radio" id="pc-31">
                                        </label>
                                        <label class="active black" for="pc-32">
                                            <input type="radio" id="pc-32">
                                        </label>
                                        <label class="grey" for="pc-33">
                                            <input type="radio" id="pc-33">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                        </li>
                                        <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Camo Jacket</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-34">
                                            <input type="radio" id="pc-34">
                                        </label>
                                        <label class="active black" for="pc-35">
                                            <input type="radio" id="pc-35">
                                        </label>
                                        <label class="grey" for="pc-36">
                                            <input type="radio" id="pc-36">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-13.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Leather Bag Office</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-37">
                                            <input type="radio" id="pc-37">
                                        </label>
                                        <label class="active black" for="pc-38">
                                            <input type="radio" id="pc-38">
                                        </label>
                                        <label class="grey" for="pc-39">
                                            <input type="radio" id="pc-39">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-14.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Tie Pin</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fifth row -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress1.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Long Sleeved T-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress2.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Short Sleeved T-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress3.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Short Sleeved T-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress4.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's V neck T-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress5.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's CasualT-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress6.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's T-Shirts Body Building</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress7.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Cotton Short Sleeve</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress8.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual T-Shirt Bodybuilding</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress9.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Striped Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- eigth row -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress10.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Formal Wear</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress11.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Long Sleeve Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress12.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Long Sleeve Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress13.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Casual Shorts Sleeve</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress14.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Shorts Sleeve Polo</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress15.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Printed Shirts</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress16.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Business Casual</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2800.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress17.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Summer Vintage</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2550.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress18.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Navy Bluee</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress19.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Long Sleeve Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress20.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Short Sleeve</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress21.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Printed Polo</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2400.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress22.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Summer Fashion</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2100.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress23.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Logo Print T-Shirt</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:1500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dress24.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Sports T-Shirt CK</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:2500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th row -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser1.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Slim Ankle Length Pant</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser2.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Formal Pant</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3950.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser3.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Multi Pocket Trouser</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser4.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Harem Black Joggers</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser5.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Harem Joggers</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser6.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Fitness Trouser</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3450.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser7.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Casual Pant</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser8.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Linen Grey</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser9.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Patchwork Joggers</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser10.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Linen Loose Casual</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser11.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Skinny Jeans Denim</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser12.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Denim Pant</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser13.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Denim Tommy Hilfiger</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser14.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Casual Denim Pants</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser15.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Fashion Slim Fitr</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3550.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser16.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Formal</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser17.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Cotton Jeans</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser18.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Denim Jeans</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:4900.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser19.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Cotton Slim Fit</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3550.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser20.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Slim Fit Trouser</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/trouser21.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Streetwear Trouser</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:3750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 20th row -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe1.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Classic Business</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:7750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe2.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Canvas</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:6500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe3.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Summer Casual Shoes</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:7750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe4.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's British Style</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:9950.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe5.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Fashion Summer</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:8750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe6.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Denim Loafers</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:8750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe7.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Shoes Flats Brand</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:7700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe8.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Business Casual</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:9950.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe9.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Mitto Rossi</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe10.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Classy Style</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe11.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Italian Brand</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:11700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe12.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Leather Loafers</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10750.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe13.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Walking Casual</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe14.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Fashion Shoe</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe15.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Leaf Pattern Shoe</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:9700.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- watches -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/shoe16.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Casual Outdoor Running</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:11950.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/guciii.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Gucci Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:90000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch1.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's FNGEEN Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:18000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch2.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Quartz Watch Men's</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:16500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch3.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Quartz Watch Ultra Thin</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:10000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch4.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Romans Men's Fashion Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:19000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch5.jpeg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Hublot Men's Fashion</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:38000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch6.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>CITIZEN Men's Fashion Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:26000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch7.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Benyar Sports</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:20000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch8.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Black Pagani Watch Men's</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:18000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch9.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>OLEVS Quartz Men's Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:15000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch10.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi Function Digital Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:18500.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch11.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>SPANDA Outdoor Sports Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:18000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch12.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Men's Luminous Stainless Steel</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:50000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch13.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>LIGE Men's Quartz</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:28000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch14.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Hublot Slim Sports Men's</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:55000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch15.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>MEGIR Men's Fashion</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:25000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/watch16.jpg">
                                  <ul class="product__hover">
                                      <li><a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                                      <li><a href="checkout.php"><img src="img/icon/buy_now.png" alt=""> <span>Buy Now</span></a>
                                      </li>
                                      <li><a href="productdisplay.php"><img src="img/icon/search.png" alt=""></a></li>
                                  </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>AILANG Men's Watch</h6>
                                    <a href="shopping-cart.php" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>LKR:45000.00</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/Logo.jpg" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="checkout.php"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="shop.php">Clothing Store</a></li>
                            <li><a href="shop.php">Trending Shoes</a></li>
                            <li><a href="shop.php">Accessories</a></li>
                            <li><a href="shop.php">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="checkout.php">Payment Methods</a></li>
                            <li><a href="checkout.php">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <p class="copyright">&#9400;2022 NZ Fashion and Clothing. All rights reserved; Web Solution by <strong> Mohamed Yusry </strong> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
