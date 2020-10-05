@extends('auth.layouts.admin_master')

@isset($product)
    @section('title', __('admin.edit_product') . ' ' . $product->__('name'))
@else
    @section('title', __('admin.create_product'))
@endisset

@section('content')
        @isset($product)
            <h1>@lang('admin.edit_product') <b>{{ $product->__('name') }}</b></h1>
        @else
            <h1>@lang('admin.add_product')</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('admin.products.update', $product) }}"
              @else
              action="{{ route('admin.products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">@lang('admin.code'): </label>
                    <div class="col-sm-6">
                        @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('admin.name_col'): </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($product) ? $product->name : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('admin.name_col') en: </label>
                    <div class="col-sm-6">
                        @error('name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="@isset($product){{ $product->name_en }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">@lang('admin.category'): </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $category->__('name') }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('admin.description'): </label>
                    <div class="col-sm-6">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="description" id="description" cols="72"
                                  rows="7">{{ old('description', isset($product) ? $product->description : null) }}</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('admin.description') en: </label>
                    <div class="col-sm-6">
                        @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="description_en" id="description_en" cols="72"
                                  rows="7">@isset($product){{ $product->description_en }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">@lang('admin.image'): </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            @lang('admin.download') <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>
                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">@lang('admin.price'): </label>
                        <div class="col-sm-2">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="price" id="price"
                                   value="{{ old('price', isset($product) ? $product->price : null) }}">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="count" class="col-sm-2 col-form-label">@lang('admin.count'): </label>
                        <div class="col-sm-2">
                            @error('count')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="count" id="count"
                                   value="{{ old('count', isset($product) ? $product->count : null) }}">
                        </div>
                    </div>
                    <br>
                    @foreach ([
                    'hit' => __('admin.bestseller'),
                    'new' => __('admin.new'),
                    ] as $field => $title)
                        <div class="form-group row">
                            <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                       @if(isset($product) && $product->$field === 1)
                                       checked="'checked"
                                    @endif
                                >
                            </div>
                        </div>
                        <br>
                    @endforeach
                <button class="btn btn-success">@lang('admin.save')</button>
            </div>
        </form>
@endsection
