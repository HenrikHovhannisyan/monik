@extends('layouts.app')

@section('content')
    @include('vendor.banner')

    <!-- END MAIN CONTENT -->
    <div class="main_content">
        <!-- START SECTION CATEGORIES -->
        <div class="section pt-0 small_pb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cat_overlap radius_all_5">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-4">
                                    <div class="text-center text-md-start">
                                        <h4>Top Categories</h4>
                                        <p class="mb-2">
                                            There are many variations of passages of Lorem
                                        </p>
                                        <a href="index-4.html#" class="btn btn-line-fill btn-sm"
                                        >View All</a
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div
                                        class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="30"
                                        data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/1.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Hat</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/2.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Body</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/3.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Hygienic sets</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/4.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Pajamas</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/5.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Socks</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/6.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Trousers</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="categories_box">
                                                <a href="index-4.html#">
                                                    <img
                                                        src="{{ asset('images/categories_box/7.png') }}"
                                                        alt=""
                                                    />
                                                    <span>Shirts</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CATEGORIES -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Exclusive Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style1">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="arrival-tab"
                                        data-bs-toggle="tab"
                                        href="index.html#arrival"
                                        role="tab"
                                        aria-controls="arrival"
                                        aria-selected="true"
                                    >New Arrival</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="sellers-tab"
                                        data-bs-toggle="tab"
                                        href="index.html#sellers"
                                        role="tab"
                                        aria-controls="sellers"
                                        aria-selected="false"
                                    >Best Sellers</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="featured-tab"
                                        data-bs-toggle="tab"
                                        href="index.html#featured"
                                        role="tab"
                                        aria-controls="featured"
                                        aria-selected="false"
                                    >Featured</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="special-tab"
                                        data-bs-toggle="tab"
                                        href="index.html#special"
                                        role="tab"
                                        aria-controls="special"
                                        aria-selected="false"
                                    >Special Offer
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div
                                class="tab-pane fade show active"
                                id="arrival"
                                role="tabpanel"
                                aria-labelledby="arrival-tab"
                            >
                                <div class="row shop_container">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img1.jpg') }}"
                                                        alt="product_img1"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue Dress For Woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img2.jpg') }}"
                                                        alt="product_img2"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Lether Gray Tuxedo</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#847764"></span>
                                                        <span data-color="#0393B5"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash">New</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img3.jpg') }}"
                                                        alt="product_img3"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >woman full sliv dress</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#7C502F"></span>
                                                        <span data-color="#2F366C"></span>
                                                        <span data-color="#874A3D"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img4.jpg') }}"
                                                        alt="product_img4"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >light blue Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#A92534"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img5.jpg') }}"
                                                        alt="product_img5"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >blue dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#5FB7D4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img6.jpg') }}"
                                                        alt="product_img6"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue casual check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img7.jpg') }}"
                                                        alt="product_img7"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >white black line dress</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#7C502F"></span>
                                                        <span data-color="#2F366C"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img8.jpg') }}"
                                                        alt="product_img8"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Men blue jins Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#444653"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="sellers"
                                role="tabpanel"
                                aria-labelledby="sellers-tab"
                            >
                                <div class="row shop_container">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img9.jpg') }}"
                                                        alt="product_img9"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >T-Shirt Form Girls</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#B5B6BB"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img6.jpg') }}"
                                                        alt="product_img6"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue casual check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="{{ asset('images/product_img11.jpg') }}"
                                                        alt="product_img11"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#090909"></span>
                                                        <span data-color="#AC644D"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img7.jpg"
                                                        alt="product_img7"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >white black line dress</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#7C502F"></span>
                                                        <span data-color="#2F366C"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img8.jpg"
                                                        alt="product_img8"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Men blue jins Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#444653"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img5.jpg"
                                                        alt="product_img5"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >blue dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#5FB7D4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img12.jpg"
                                                        alt="product_img12"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <span class="pr_flash">New</span>
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black T-shirt for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#1B1B25"></span>
                                                        <span data-color="#444653"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img10.jpg"
                                                        alt="product_img10"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Red & Black check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#E8ADA9"></span>
                                                        <span data-color="#C38F77"></span>
                                                        <span data-color="#BE7154"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="featured"
                                role="tabpanel"
                                aria-labelledby="featured-tab"
                            >
                                <div class="row shop_container">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img5.jpg"
                                                        alt="product_img5"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >blue dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#5FB7D4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img12.jpg"
                                                        alt="product_img12"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <span class="pr_flash">New</span>
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black T-shirt for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#1B1B25"></span>
                                                        <span data-color="#444653"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img9.jpg"
                                                        alt="product_img9"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >T-Shirt Form Girls</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#B5B6BB"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img10.jpg"
                                                        alt="product_img10"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Red & Black check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#E8ADA9"></span>
                                                        <span data-color="#C38F77"></span>
                                                        <span data-color="#BE7154"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img7.jpg"
                                                        alt="product_img7"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >white black line dress</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#7C502F"></span>
                                                        <span data-color="#2F366C"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img11.jpg"
                                                        alt="product_img11"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#090909"></span>
                                                        <span data-color="#AC644D"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img8.jpg"
                                                        alt="product_img8"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Men blue jins Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#444653"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img6.jpg"
                                                        alt="product_img6"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue casual check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="special"
                                role="tabpanel"
                                aria-labelledby="special-tab"
                            >
                                <div class="row shop_container">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img4.jpg"
                                                        alt="product_img4"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >light blue Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#A92534"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img9.jpg"
                                                        alt="product_img9"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >T-Shirt Form Girls</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#B5B6BB"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img8.jpg"
                                                        alt="product_img8"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Men Checks Casual Shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#444653"></span>
                                                        <span data-color="#B9C2DF"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash">New</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img1.jpg"
                                                        alt="product_img1"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue Dress For Woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                        <span data-color="#DA323F"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img12.jpg"
                                                        alt="product_img12"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <span class="pr_flash bg-danger">Hot</span>
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black T-shirt for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 70%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#1B1B25"></span>
                                                        <span data-color="#444653"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img6.jpg"
                                                        alt="product_img6"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Blue casual check shirt</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 68%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#87554B"></span>
                                                        <span data-color="#333333"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img7.jpg"
                                                        alt="product_img7"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >white black line dress</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#333333"></span>
                                                        <span data-color="#7C502F"></span>
                                                        <span data-color="#2F366C"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img
                                                        src="images/product_img11.jpg"
                                                        alt="product_img11"
                                                    />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="index.html#"
                                                            ><i class="icon-basket-loaded"></i> Add To
                                                                Cart</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a href="shop-compare.html" class="popup-ajax"
                                                            ><i class="icon-shuffle"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="shop-quick-view.html"
                                                                class="popup-ajax"
                                                            ><i class="icon-magnifier-add"></i
                                                                ></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"
                                                            ><i class="icon-heart"></i
                                                                ></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title">
                                                    <a href="shop-product-detail.html"
                                                    >Black dress for woman</a
                                                    >
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div
                                                            class="product_rate"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Phasellus blandit massa enim. Nullam id
                                                        varius nunc id varius nunc.
                                                    </p>
                                                </div>
                                                <div class="pr_switch_wrap">
                                                    <div class="product_color_switch">
                                                        <span class="active" data-color="#090909"></span>
                                                        <span data-color="#AC644D"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SINGLE BANNER -->
        <div class="section bg_light_blue2 pb-0 pt-md-0">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-6 offset-md-1">
                        <div class="medium_divider d-none d-md-block clearfix"></div>
                        <div class="trand_banner_text text-center text-md-start">
                            <div class="heading_s1 mb-3">
                                <span class="sub_heading">New season trends!</span>
                                <h2>Best Summer Collection</h2>
                            </div>
                            <h5 class="mb-4">Sale Get up to 50% Off</h5>
                            <a
                                href="shop-left-sidebar.html"
                                class="btn btn-fill-out rounded-0"
                            >Shop Now</a
                            >
                        </div>
                        <div class="medium_divider clearfix"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center trading_img">
                            <img src="images/tranding_img.png" alt="tranding_img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SINGLE BANNER -->

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                            data-loop="true"
                            data-dots="false"
                            data-nav="true"
                            data-margin="20"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                        >
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img
                                                src="images/product_img1.jpg"
                                                alt="product_img1"
                                            />
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="index.html#"
                                                    ><i class="icon-basket-loaded"></i> Add To Cart</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html" class="popup-ajax"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product-detail.html"
                                            >Blue Dress For Woman</a
                                            >
                                        </h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                nunc id varius nunc.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img
                                                src="images/product_img2.jpg"
                                                alt="product_img2"
                                            />
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="index.html#"
                                                    ><i class="icon-basket-loaded"></i> Add To Cart</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html" class="popup-ajax"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product-detail.html"
                                            >Lether Gray Tuxedo</a
                                            >
                                        </h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                nunc id varius nunc.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#847764"></span>
                                                <span data-color="#0393B5"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <span class="pr_flash">New</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img
                                                src="images/product_img3.jpg"
                                                alt="product_img3"
                                            />
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="index.html#"
                                                    ><i class="icon-basket-loaded"></i> Add To Cart</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html" class="popup-ajax"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product-detail.html"
                                            >woman full sliv dress</a
                                            >
                                        </h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                nunc id varius nunc.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#333333"></span>
                                                <span data-color="#7C502F"></span>
                                                <span data-color="#2F366C"></span>
                                                <span data-color="#874A3D"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img
                                                src="images/product_img4.jpg"
                                                alt="product_img4"
                                            />
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="index.html#"
                                                    ><i class="icon-basket-loaded"></i> Add To Cart</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html" class="popup-ajax"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product-detail.html">light blue Shirt</a>
                                        </h6>
                                        <div class="product_price">
                                            <span class="price">$69.00</span>
                                            <del>$89.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 70%"></div>
                                            </div>
                                            <span class="rating_num">(22)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                nunc id varius nunc.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#333333"></span>
                                                <span data-color="#A92534"></span>
                                                <span data-color="#B9C2DF"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img
                                                src="images/product_img5.jpg"
                                                alt="product_img5"
                                            />
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart">
                                                    <a href="index.html#"
                                                    ><i class="icon-basket-loaded"></i> Add To Cart</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="shop-compare.html" class="popup-ajax"
                                                    ><i class="icon-shuffle"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="shop-quick-view.html" class="popup-ajax"
                                                    ><i class="icon-magnifier-add"></i
                                                        ></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="icon-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title">
                                            <a href="shop-product-detail.html"
                                            >blue dress for woman</a
                                            >
                                        </h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                nunc id varius nunc.
                                            </p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#5FB7D4"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SHOP INFO -->
        <div class="section pb_70">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <img src="images/icons/delivery.png" alt="Delivery" />
                            </div>
                            <div class="icon_box_content">
                                <h5>Free Delivery</h5>
                                <p>
                                    If you are going to use of Lorem, you need to be sure there
                                    anything
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <img
                                    src="{{ asset('images/icons/money-bag.png') }}"
                                    alt="Money Back"
                                />
                            </div>
                            <div class="icon_box_content">
                                <h5>30 Day Return</h5>
                                <p>
                                    If you are going to use of Lorem, you need to be sure there
                                    anything
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <img src="{{ asset('images/icons/support.png') }}" alt="Support" />
                            </div>
                            <div class="icon_box_content">
                                <h5>27/4 Support</h5>
                                <p>
                                    If you are going to use of Lorem, you need to be sure there
                                    anything
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP INFO -->
    </div>
    <!-- END MAIN CONTENT -->

@endsection
