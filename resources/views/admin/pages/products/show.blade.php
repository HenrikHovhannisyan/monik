@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Show Product' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Show Product</h2>
            <a class="btn btn-success" href="{{ route('products.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <table class="table table-dark table-striped table-bordered table-responsive">
                        @if($metadata->primary_price)
                            <tr>
                                <th>Primary Price</th>
                                <td class="text-white">
                                    {{ $metadata->primary_price }}
                                </td>
                            </tr>
                        @endif
                        @if($metadata->product_link)
                            <tr>
                                <th>Product Link</th>
                                <td class="text-white">
                                    <a href="{{ $metadata->product_link }}" target="_blank">
                                        {{ $metadata->product_link }}
                                    </a>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Code</th>
                            <td class="text-white">
                                {{ $product->code }}
                            </td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td class="text-white">
                                {{ $product->quantity }}
                            </td>
                        </tr>
                        <tr>
                            <th>Sizes</th>
                            <td class="text-white">
                                @foreach($size as $sizeName => $item)
                                    @if( $item['quantity'])
                                        <span class="d-inline-flex px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">
                                            ({{ $sizeName }}) - {{ $item['quantity'] }}
                                        </span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td class="text-white">
                                {{ $product->category->name_ru }}
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td class="text-white">
                                @if($status)
                                    @foreach($status as $key => $value)
                                        {{ $value }}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                @else
                                    No status available
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td class="text-white">
                                {{ $product->price }}֏
                            </td>
                        </tr>
                        @if($product->discount)
                            <tr>
                                <th>Discount</th>
                                <td class="text-white">
                                    {{ $product->discount }}%
                                </td>
                            </tr>
                            <tr>
                                <th>Final price</th>
                                <td class="text-white">
                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Name AM</th>
                            <td class="text-white">
                                {{ $product->name_am }}
                            </td>
                        </tr>
                        <tr>
                            <th>Name RU</th>
                            <td class="text-white">
                                {{ $product->name_ru }}
                            </td>
                        </tr>
                        <tr>
                            <th>Name EN</th>
                            <td class="text-white">
                                {{ $product->name_en }}
                            </td>
                        </tr>
                        <tr>
                            <th>Description AM</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_am) !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Description RU</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_ru) !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Description EN</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_en) !!}
                            </td>
                        </tr>
                        @if($product->color)
                            <tr>
                                <th>Color</th>
                                <td class="text-white">
                                    {{ $product->color }}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Gender</th>
                            <td class="text-white">
                                @foreach($gender as $key => $value)
                                    {{ $value }}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                @foreach(json_decode($product->images) as $imagePath)
                                    <img src="{{asset($imagePath)}}" width="200" class="m-1 img-fluid">
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

