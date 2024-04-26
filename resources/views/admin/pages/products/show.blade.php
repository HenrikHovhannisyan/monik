@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Show Category' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Show Category</h2>
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <ul>
                        <li class="mb-2">
                            <strong>Code :</strong>
                            <span class="text-white">
                                {{ $product->code }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Category :</strong>
                            <span class="text-white">
                                {{ $product->category->name_en }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Name AM :</strong>
                            <span class="text-white">
                                {{ $product->name_am }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Name RU :</strong>
                            <span class="text-white">
                                {{ $product->name_ru }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Name EN :</strong>
                            <span class="text-white">
                                {{ $product->name_en }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Description AM :</strong>
                            <span class="text-white">
                                    {!! html_entity_decode($product->description_am) !!}
                                </span>
                        </li>
                        <li class="mb-2">
                            <strong>Description RU :</strong>
                            <span class="text-white">
                                    {!! html_entity_decode($product->description_ru) !!}
                                </span>
                        </li>
                        <li class="mb-2">
                            <strong>Description EN :</strong>
                            <span class="text-white">
                                    {!! html_entity_decode($product->description_en) !!}
                                </span>
                        </li>
                        @if($product->color)
                            <li class="mb-2">
                                <strong>Color :</strong>
                                <span class="text-white">
                                    {{ $product->color }}
                                </span>
                            </li>
                        @endif
                        <li class="mb-2">
                            <strong>Size :</strong>
                            @foreach($size as $key => $value)
                                <span class="text-white">{{ $value }}</span>
                                @if(!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </li>
                        <li class="mb-2">
                            <strong>Gender :</strong>
                            @foreach($gender as $key => $value)
                                <span class="text-white">{{ $value }}</span>
                                @if(!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </li>
                        <li class="mb-2">
                            <strong>Image:</strong><br>
                            @foreach(json_decode($product->images) as $imagePath)
                                <img src="{{asset($imagePath)}}" width="200" class="m-1 img-fluid">
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection

