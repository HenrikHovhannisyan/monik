@extends('layouts.app')

@section('content')
    <!--
    - MAIN
  -->

    <main>
        <!--
        - BANNER
      -->

        <div class="banner">
            <div class="container">
                <div class="slider-container has-scrollbar">
                    <div class="slider-item">
                        <img
                            src="./images/banner-1.jpg"
                            alt="women's latest fashion sale"
                            class="banner-img"
                        />

                        <div class="banner-content">
                            <p class="banner-subtitle">Trending item</p>

                            <h2 class="banner-title">Women's latest fashion sale</h2>

                            <p class="banner-text">starting at &dollar; <b>20</b>.00</p>

                            <a href="#" class="banner-btn">Shop now</a>
                        </div>
                    </div>

                    <div class="slider-item">
                        <img
                            src="./images/banner-2.jpg"
                            alt="modern sunglasses"
                            class="banner-img"
                        />

                        <div class="banner-content">
                            <p class="banner-subtitle">Trending accessories</p>

                            <h2 class="banner-title">Modern sunglasses</h2>

                            <p class="banner-text">starting at &dollar; <b>15</b>.00</p>

                            <a href="#" class="banner-btn">Shop now</a>
                        </div>
                    </div>

                    <div class="slider-item">
                        <img
                            src="./images/banner-3.jpg"
                            alt="new fashion summer sale"
                            class="banner-img"
                        />

                        <div class="banner-content">
                            <p class="banner-subtitle">Sale Offer</p>

                            <h2 class="banner-title">New fashion summer sale</h2>

                            <p class="banner-text">starting at &dollar; <b>29</b>.99</p>

                            <a href="#" class="banner-btn">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        - CATEGORY
      -->

        <div class="category">
            <div class="container">
                <div class="category-item-container has-scrollbar">
                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/dress.svg"
                                alt="dress & frock"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Dress & frock</h3>

                                <p class="category-item-amount">(53)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/coat.svg"
                                alt="winter wear"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Winter wear</h3>

                                <p class="category-item-amount">(58)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/glasses.svg"
                                alt="glasses & lens"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Glasses & lens</h3>

                                <p class="category-item-amount">(68)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/shorts.svg"
                                alt="shorts & jeans"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Shorts & jeans</h3>

                                <p class="category-item-amount">(84)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/tee.svg"
                                alt="t-shirts"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">T-shirts</h3>

                                <p class="category-item-amount">(35)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/jacket.svg"
                                alt="jacket"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Jacket</h3>

                                <p class="category-item-amount">(16)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/watch.svg"
                                alt="watch"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Watch</h3>

                                <p class="category-item-amount">(27)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img
                                src="./images/icons/hat.svg"
                                alt="hat & caps"
                                width="30"
                            />
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Hat & caps</h3>

                                <p class="category-item-amount">(39)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        - PRODUCT
      -->

        <div class="product-container">
            <div class="container">

                <div class="product-box">

                    <div class="product-minimal">
                        <div class="product-showcase">
                            <h2 class="title">New Arrivals</h2>

                            <div class="showcase-wrapper has-scrollbar">
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/clothes-1.jpg"
                                                alt="relaxed short full sleeve t-shirt"
                                                width="70"
                                                class="showcase-img"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Relaxed Short full Sleeve T-Shirt
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Clothes</a>

                                            <div class="price-box">
                                                <p class="price">$45.00</p>
                                                <del>$12.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/clothes-2.jpg"
                                                alt="girls pink embro design top"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Girls pnk Embro design Top
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Clothes</a>

                                            <div class="price-box">
                                                <p class="price">$61.00</p>
                                                <del>$9.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/clothes-3.jpg"
                                                alt="black floral wrap midi skirt"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Black Floral Wrap Midi Skirt
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Clothes</a>

                                            <div class="price-box">
                                                <p class="price">$76.00</p>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/shirt-1.jpg"
                                                alt="pure garment dyed cotton shirt"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Pure Garment Dyed Cotton Shirt
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mens Fashion</a>

                                            <div class="price-box">
                                                <p class="price">$68.00</p>
                                                <del>$31.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-showcase">
                            <h2 class="title">Top Rated</h2>

                            <div class="showcase-wrapper has-scrollbar">
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/watch-3.jpg"
                                                alt="pocket watch leather pouch"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Pocket Watch Leather Pouch
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Watches</a>

                                            <div class="price-box">
                                                <p class="price">$50.00</p>
                                                <del>$34.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/jewellery-3.jpg"
                                                alt="silver deer heart necklace"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Silver Deer Heart Necklace
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Jewellery</a>

                                            <div class="price-box">
                                                <p class="price">$84.00</p>
                                                <del>$30.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/perfume.jpg"
                                                alt="titan 100 ml womens perfume"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Titan 100 Ml Womens Perfume
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Perfume</a>

                                            <div class="price-box">
                                                <p class="price">$42.00</p>
                                                <del>$10.00</del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img
                                                src="./images/products/belt.jpg"
                                                alt="men's leather reversible belt"
                                                class="showcase-img"
                                                width="70"
                                            />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Men's Leather Reversible Belt
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Belt</a>

                                            <div class="price-box">
                                                <p class="price">$24.00</p>
                                                <del>$10.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-main">
                        <h2 class="title">New Products</h2>

                        <div class="product-grid">
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/jacket-3.jpg"
                                        alt="Mens Winter Leathers Jackets"
                                        width="300"
                                        class="product-img default"
                                    />
                                    <img
                                        src="./images/products/jacket-4.jpg"
                                        alt="Mens Winter Leathers Jackets"
                                        width="300"
                                        class="product-img hover"
                                    />

                                    <p class="showcase-badge">15%</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">jacket</a>

                                    <a href="#">
                                        <h3 class="showcase-title">
                                            Mens Winter Leathers Jackets
                                        </h3>
                                    </a>

                                    <div class="price-box">
                                        <p class="price">$48.00</p>
                                        <del>$75.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/shirt-1.jpg"
                                        alt="Pure Garment Dyed Cotton Shirt"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/shirt-2.jpg"
                                        alt="Pure Garment Dyed Cotton Shirt"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">shirt</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Pure Garment Dyed Cotton Shirt</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$45.00</p>
                                        <del>$56.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/jacket-5.jpg"
                                        alt="MEN Yarn Fleece Full-Zip Jacket"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/jacket-6.jpg"
                                        alt="MEN Yarn Fleece Full-Zip Jacket"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Jacket</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >MEN Yarn Fleece Full-Zip Jacket</a
                                        >
                                    </h3>


                                    <div class="price-box">
                                        <p class="price">$58.00</p>
                                        <del>$65.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/clothes-3.jpg"
                                        alt="Black Floral Wrap Midi Skirt"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/clothes-4.jpg"
                                        alt="Black Floral Wrap Midi Skirt"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle pink">new</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">skirt</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Black Floral Wrap Midi Skirt</a
                                        >
                                    </h3>



                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$35.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/shoe-2.jpg"
                                        alt="Casual Men's Brown shoes"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/shoe-2_1.jpg"
                                        alt="Casual Men's Brown shoes"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">casual</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Casual Men's Brown shoes</a
                                        >
                                    </h3>



                                    <div class="price-box">
                                        <p class="price">$99.00</p>
                                        <del>$105.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/watch-3.jpg"
                                        alt="Pocket Watch Leather Pouch"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/watch-4.jpg"
                                        alt="Pocket Watch Leather Pouch"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Pocket Watch Leather Pouch</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$150.00</p>
                                        <del>$170.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/watch-1.jpg"
                                        alt="Smart watche Vital Plus"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/watch-2.jpg"
                                        alt="Smart watche Vital Plus"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Smart watche Vital Plus</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$100.00</p>
                                        <del>$120.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/party-wear-1.jpg"
                                        alt="Womens Party Wear Shoes"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/party-wear-2.jpg"
                                        alt="Womens Party Wear Shoes"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">party wear</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Womens Party Wear Shoes</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$30.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/jacket-1.jpg"
                                        alt="Mens Winter Leathers Jackets"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/jacket-2.jpg"
                                        alt="Mens Winter Leathers Jackets"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">jacket</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Mens Winter Leathers Jackets</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$32.00</p>
                                        <del>$45.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/sports-2.jpg"
                                        alt="Trekking & Running Shoes - black"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/sports-4.jpg"
                                        alt="Trekking & Running Shoes - black"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">sports</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Trekking & Running Shoes - black</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$58.00</p>
                                        <del>$64.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/shoe-1.jpg"
                                        alt="Men's Leather Formal Wear shoes"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/shoe-1_1.jpg"
                                        alt="Men's Leather Formal Wear shoes"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">formal</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Men's Leather Formal Wear shoes</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$50.00</p>
                                        <del>$65.00</del>
                                    </div>
                                </div>
                            </div>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img
                                        src="./images/products/shorts-1.jpg"
                                        alt="Better Basics French Terry Sweatshorts"
                                        class="product-img default"
                                        width="300"
                                    />
                                    <img
                                        src="./images/products/shorts-2.jpg"
                                        alt="Better Basics French Terry Sweatshorts"
                                        class="product-img hover"
                                        width="300"
                                    />

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">shorts</a>

                                    <h3>
                                        <a href="#" class="showcase-title"
                                        >Better Basics French Terry Sweatshorts</a
                                        >
                                    </h3>

                                    <div class="price-box">
                                        <p class="price">$78.00</p>
                                        <del>$85.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--
    - FOOTER
  -->

    <footer>
        <div class="footer-nav">
            <div class="container">
                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Fashion</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Electronic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cosmetic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Health</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            419 State 414 Rte Beaver Dams, New York(NY), 14812, USA
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+607936-8058" class="footer-nav-link"
                        >(607) 936-8058</a
                        >
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link"
                        >example@gmail.com</a
                        >
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">
                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <img
                    src="./images/payment.png"
                    alt="payment method"
                    class="payment-img"
                />

                <p class="copyright">
                    Copyright &copy; <a href="#">Anon</a> all rights reserved.
                </p>
            </div>
        </div>
    </footer>




    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 class="">
                            {{ __('index.welcome') }}
                        </h1>
                        --}}{{--@foreach($product as $i)
                            <p class="">{{ $i->{lang('name')} }}</p>
                        @endforeach--}}{{--
                        @if(Auth::user() && Auth::user()->is_admin === 1)
                            <hr>
                            <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
