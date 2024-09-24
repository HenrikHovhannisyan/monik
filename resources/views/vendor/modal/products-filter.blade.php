<div class="modal fade" id="products-filter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">
                    {{ __("index.filter") }}
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="sidebar">
                    <form method="GET" action="{{ route('products') }}">
                        <div class="widget">
                            <h5 class="widget_title">
                                {{ __("index.widget_title") }}
                            </h5>
                            <div class="product_size_switch">
                                <input type="radio" name="sort" id="default_mobile" class="d-none" value="default" {{ !request('sort') || request('sort') == 'default' ? 'checked' : '' }}>
                                <span class="w-100 h-auto {{ !request('sort') || request('sort') == 'default' ? 'active' : '' }}" data-for="default_mobile">
                                    {{ __("index.default_sorting") }}
                                    <i class="fa-solid fa-filter"></i>
                                </span>
                                <input type="radio" name="sort" id="price_mobile" class="d-none" value="price" {{ request('sort') == 'price' ? 'checked' : '' }}>
                                <span class="w-100 h-auto {{ request('sort') == 'price' ? 'active' : '' }}" data-for="price_mobile">
                                    {{ __("index.sort_by_price_low_to_high") }}
                                    <i class="fa-solid fa-arrow-down-short-wide"></i>
                                </span>
                                <input type="radio" name="sort" id="price-desc_mobile" class="d-none" value="price-desc" {{ request('sort') == 'price-desc' ? 'checked' : '' }}>
                                <span class="w-100 h-auto {{ request('sort') == 'price-desc' ? 'active' : '' }}" data-for="price-desc_mobile">
                                    {{ __("index.sort_by_price_high_to_low") }}
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                </span>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">{{ __("index.categories") }}</h5>
                            <ul class="list_brand">
                                @foreach ($categories as $category)
                                    <li>
                                        <div class="custome-checkbox d-flex justify-content-between">
                                            <input class="form-check-input" type="checkbox" name="categories[]" id="{{ $category->id }}_mobile" value="{{ $category->id }}"
                                                {{ in_array($category->id, request()->categories ?? []) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ $category->id }}_mobile">
                                                <span>{{ $category->{lang('name')} }}</span>
                                            </label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">{{ __("index.price") }}</h5>
                            <div class="range_container">
                                <div class="sliders_control">
                                    <div id="fromSliderTooltip_mobile" class="slider-tooltip">0</div>
                                    <input id="fromSlider_mobile" type="range" name="price_first" value="{{ request('price_first') ?? 0 }}" min="0" max="20000" />
                                    <div id="toSliderTooltip_mobile" class="slider-tooltip">20000</div>
                                    <input id="toSlider_mobile" type="range" name="price_second" value="{{ request('price_second') ?? 20000 }}" min="0" max="20000" />
                                </div>
                                <div id="scale_mobile" class="scale" data-steps="5000"></div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">{{ __("index.gender") }}</h5>
                            <ul class="list_brand">
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="gender[]" id="boy_mobile" value="boy"
                                            {{ in_array('boy', request()->gender ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="boy_mobile">
                                            <span>{{ __("index.boy") }}</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="gender[]" id="girl_mobile" value="girl"
                                            {{ in_array('girl', request()->gender ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="girl_mobile">
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
                                        <input class="form-check-input" type="checkbox" name="status[]" id="new_mobile" value="new"
                                            {{ in_array('new', request()->status ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="new_mobile">
                                            <span>{{ __("index.new") }}</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="status[]" id="top_mobile" value="top"
                                            {{ in_array('top', request()->status ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="top_mobile">
                                            <span>{{ __("index.top") }}</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="discount" id="sale_mobile" value="sale"
                                            {{  request()->discount ?? [] ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sale_mobile">
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
                                    <input type="radio" name="size[]" id="size_{{ $size }}_mobile" class="d-none" value="{{ $size }}" {{ in_array($size, request()->size ?? []) ? 'checked' : '' }}>
                                    <span data-for="size_{{ $size }}_mobile" class="{{ in_array($size, request()->size ?? []) ? 'active' : '' }}">{{ $size }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget text-center d-flex justify-content-between align-items-center mb-4">
                            <a href="{{ route('products') }}" class="btn btn-line-fill btn-sm">
                                {{ __("index.clear_filter") }}
                            </a>
                            <button type="submit" class="btn-sm btn-fill-out ms-0">
                                {{ __("index.filter") }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-line-fill btn-sm" data-bs-dismiss="modal">
                    {{ __("index.close") }}
                </button>
            </div>
        </div>
    </div>
</div>

