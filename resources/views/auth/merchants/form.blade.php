@extends('auth.layouts.admin_master')

@isset($merchant)
    @section('title',  __('admin.edit_merchant') . ' ' . $merchant->name)
@else
    @section('title', __('admin.create_merchant'))
@endisset

@section('content')
        @isset($merchant)
            <h1>@lang('admin.edit_merchant') <b>{{ $merchant->name }}</b></h1>
        @else
            <h1>@lang('admin.add_merchant')</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($merchant)
              action="{{ route('admin.merchants.update', $merchant) }}"
              @else
              action="{{ route('admin.merchants.store') }}"
            @endisset
        >
            <div>
                @isset($merchant)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('admin.name_col'): </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($merchant){{ $merchant->name }}@endisset">
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="email" id="email"
                               value="@isset($merchant){{ $merchant->email }}@endisset">
                    </div>
                </div>

                <button class="btn btn-success">@lang('admin.save')</button>
            </div>
        </form>
@endsection
