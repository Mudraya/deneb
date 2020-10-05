@extends('auth.layouts.admin_master')

@isset($category)
    @section('title', __('admin.edit_category') . ' ' . $category->__('name'))
@else
    @section('title', __('admin.create_category'))
@endisset

@section('content')
        @isset($category)
            <h1>@lang('admin.edit_category') <b>{{ $category->__('name') }}</b></h1>
        @else
            <h1>@lang('admin.add_category')</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($category)
              action="{{ route('admin.categories.update', $category) }}"
              @else
              action="{{ route('admin.categories.store') }}"
            @endisset
        >
            <div>
                @isset($category)
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
                               value="{{ old('code', isset($category) ? $category->code : null) }}">
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
                            value="{{ old('name', isset($category) ? $category->name : null) }}">
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
                               value="@isset($category){{ $category->name_en }}@endisset">
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
                                      rows="7">{{ old('description', isset($category) ? $category->description : null) }}</textarea>
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
                                  rows="7">@isset($category){{ $category->description_en }}@endisset</textarea>
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
                <button class="btn btn-success">@lang('admin.save')</button>
            </div>
        </form>
@endsection
