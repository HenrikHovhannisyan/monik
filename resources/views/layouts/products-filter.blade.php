<div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
    <div class="sidebar">
        <form method="GET" action="{{ route('products') }}">
            <div class="widget">
                <h5 class="widget_title">
                    {{ __("index.widget_title") }}
                </h5>
                <div class="product_size_switch">
                    <input type="radio" name="sort" id="default" class="d-none" value="default" {{ !request('sort') || request('sort') == 'default' ? 'checked' : '' }}>
                    <span class="w-100 h-auto {{ !request('sort') || request('sort') == 'default' ? 'active' : '' }}" data-for="default">
                                            {{ __("index.default_sorting") }}
                                        </span>
                    <input type="radio" name="sort" id="price" class="d-none" value="price" {{ request('sort') == 'price' ? 'checked' : '' }}>
                    <span class="w-100 h-auto {{ request('sort') == 'price' ? 'active' : '' }}" data-for="price">
                                            {{ __("index.sort_by_price_low_to_high") }}
                                        </span>
                    <input type="radio" name="sort" id="price-desc" class="d-none" value="price-desc" {{ request('sort') == 'price-desc' ? 'checked' : '' }}>
                    <span class="w-100 h-auto {{ request('sort') == 'price-desc' ? 'active' : '' }}" data-for="price-desc">
                                            {{ __("index.sort_by_price_high_to_low") }}
                                        </span>
                </div>
            </div>
            <div class="widget">
                <h5 class="widget_title">{{ __("index.categories") }}</h5>
                <ul class="list_brand">
                    @foreach ($categories as $category)
                        <li>
                            <div class="custome-checkbox d-flex justify-content-between">
                                <input class="form-check-input" type="checkbox" name="categories[]" id="{{ $category->id }}" value="{{ $category->id }}"
                                    {{ in_array($category->id, request()->categories ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="{{ $category->id }}">
                                    <span>{{ $category->{lang('name')} }}</span>
                                </label>
                                <span>({{ count($category->products) }})</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="widget">
                <h5 class="widget_title">{{ __("index.price") }}</h5>
                <div class="filter_price">
                    <div id="price_filter" data-min="0" data-max="20000" data-min-value="{{ request('price_first', 0) }}" data-max-value="{{ request('price_second', 20000) }}" data-price-sign="֏"></div>
                    <div class="price_range">
                        <span id="flt_price"></span>
                        <input type="hidden" name="price_first" id="price_first" value="{{ request('price_first') }}">
                        <input type="hidden" name="price_second" id="price_second" value="{{ request('price_second') }}">
                    </div>
                </div>
            </div>
            <div class="widget">
                <h5 class="widget_title">{{ __("index.gender") }}</h5>
                <ul class="list_brand">
                    <li>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="gender[]" id="boy" value="boy"
                                {{ in_array('boy', request()->gender ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="boy">
                                <span>{{ __("index.boy") }}</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="gender[]" id="girl" value="girl"
                                {{ in_array('girl', request()->gender ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="girl">
                                <span>{{ __("index.girl") }}</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h5 class="widget_title">{{ __("index.status") }}</h5>
                <ul class="list_brand">
                    <li>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="status[]" id="new" value="new"
                                {{ in_array('new', request()->status ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="new">
                                <span>{{ __("index.new") }}</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="status[]" id="top" value="top"
                                {{ in_array('top', request()->status ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="top">
                                <span>{{ __("index.top") }}</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="discount" id="sale" value="sale"
                                {{  request()->discount ?? [] ? 'checked' : '' }}>
                            <label class="form-check-label" for="sale">
                                <span>{{ __("index.sale") }}</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h5 class="widget_title">{{ __("index.size") }}</h5>
                <div class="product_size_switch">
                    @foreach (['0-3', '3-6', '6-12', '12-18', '18-24'] as $size)
                        <input type="radio" name="size[]" id="size_{{ $size }}" class="d-none" value="{{ $size }}" {{ in_array($size, request()->size ?? []) ? 'checked' : '' }}>
                        <span data-for="size_{{ $size }}" class="{{ in_array($size, request()->size ?? []) ? 'active' : '' }}">{{ $size }}</span>
                    @endforeach
                </div>
            </div>
            <div class="widget text-center d-grid mb-3">
                <a href="{{ route('products') }}" class="btn btn-line-fill btn-sm">
                    {{ __("index.clear_filter") }}
                </a>
                <hr>
                <button type="submit" class="btn-sm btn-fill-out ms-0">
                    {{ __("index.filter") }}
                </button>
            </div>
        </form>

        <div class="widget">
            <div class="shop_banner">
                <div class="banner_img overlay_bg_20">
                    <img src="{{ "/images/ad/sidebar_banner_img.png" }}" alt="{{ config('app.name', 'Sofia') }}">
                </div>
                <div class="shop_bn_content2 text_white">
                    <h5 class="text-uppercase shop_subtitle">
                        {{ __("ad.new_collection") }}
                    </h5>
                    <h3 class="text-uppercase shop_title">
                        {{ __("ad.sale_30_off") }}
                    </h3>
                    <a href="{{ route('products') }}" class="btn btn-white rounded-0 btn-sm text-uppercase">
                        {{ __("ad.shop_now") }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
