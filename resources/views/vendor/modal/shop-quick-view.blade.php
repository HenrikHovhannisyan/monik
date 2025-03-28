<div class="ajax_quick_view">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="product-image">
                <div class="product_img_box">
                    <img id="product_img" src='{{ asset(json_decode($product->images)[0]) }}' data-zoom-image="{{ asset(json_decode($product->images)[0]) }}" alt="product_img1" />
                </div>
                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                    @foreach(json_decode($product->images) as $index => $imagePath)
                        <div class="item">
                            <a href="#" class="product_gallery_item {{ $index == 0 ? 'active' : '' }}" data-image="{{asset($imagePath)}}" data-zoom-image="{{asset($imagePath)}}">
                                <img src="{{asset($imagePath)}}" alt="product_small_img{{ $index + 1 }}" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="pr_detail">
                <div class="product_description">
                    <h4 class="product_title">
                        <a href="{{ route('product', ['slug' => $product->slug]) }}" title="{{ $product->{lang('name')} }}">
                            {{ $product->{lang('name')} }}
                        </a>
                    </h4>
                    <div class="product_price">
                        @if($product->discount)
                            <span class="price">
                                {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                            </span>
                            <del>{{ $product->price }}֏</del>
                            <div class="on_sale">
                                <span>{{ $product->discount }}%</span>
                            </div>
                        @else
                            <span class="price">
                                {{ $product->price }}֏
                            </span>
                        @endif
                    </div>
                    <div class="pr_desc">
                        <p>
                            {!! html_entity_decode( $product->{lang('description')})  !!}
                        </p>
                    </div>
                    <div class="product_sort_info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-rotate"></i>
                                {{ __('index.14_day_return') }}
                            </li>
                        </ul>
                    </div>
                    @if($product->color)
                        <div class="pr_switch_wrap">
                            <span class="switch_lable">
                                {{ __("index.color") }}
                            </span>
                            <div class="product_color_switch">
                                <span data-color="{{ $product->color }}"></span>
                            </div>
                        </div>
                    @endif
                    <div class="pr_switch_wrap">
                        <span class="switch_lable">
                            {{ __("index.gender") }}
                        </span>
                        <div class="product_color_switch">
                            @foreach($gender as $key => $value)
                                {{ __("index.$value") }}
                                @if(!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="pr_switch_wrap d-flex align-items-center">
                        <span class="switch_lable">
                            {{ __("index.size") }}
                        </span>
                        <div class="product_size_switch">
                            @foreach($size as $sizeName => $item)
                                @if($item['quantity'])
                                    <span data-size="{{ $sizeName }}" data-max="{{ $item['quantity'] }}">
                                        {{ $sizeName }}
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr />
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="size" id="sizeField" value="">
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <button class="btn btn-fill-out btn-addtocart" type="submit" disabled>
                                <i class="fa-solid fa-cart-plus"></i>
                                {{ __("index.add_to_cart") }}
                            </button>
                        </div>
                    </div>
                </form>
                <hr />
                <ul class="product-meta">
                    <li>
                        {{ __("index.sku") }}:
                        <span class="text-dark" title="{{ $product->code }}">
                            {{ $product->code }}
                        </span>
                        <button class="btn btn-outline-secondary ps-2 pe-1 p-0"
                                onclick="copyProductCode('{{ $product->code }}')">
                            <i class="fa-solid fa-copy copy-icon"></i>
                        </button>
                    </li>
                    <li>{{ __("index.category") }}:
                        <a href="{{route('products')}}?categories%5B%5D={{ $product->category->id }}" title="{{ $product->category->{lang('name')} }}" title="{{ $product->category->{lang('name')} }}">
                            {{ $product->category->{lang('name')} }}
                        </a>
                    </li>
                </ul>

                <div class="product_share">
                    <span>{{ __("index.share") }}:</span>
                    <ul class="social_icons">
                        <li><a href="shop-quick-view.html#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="shop-quick-view.html#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="shop-quick-view.html#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
