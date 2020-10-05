@extends('auth.layouts.admin_master')

@section('title', 'Продукт ' . $product->__('name'))

@section('content')
        <h1>{{ $product->__('name') }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    @lang('admin.field')
                </th>
                <th>
                    @lang('admin.value')
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>@lang('admin.code')</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>@lang('admin.name_col')</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>@lang('admin.name_col') en</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('admin.description')</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>@lang('admin.description') en</td>
                <td>{{ $product->description_en }}</td>
            </tr>
            <tr>
                <td>@lang('admin.image')</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>@lang('admin.category')</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>@lang('admin.labels')</td>
                <td>
                    @if($product->isNew())
                        <span class="badge badge-success">@lang('admin.new')</span>
                    @endif

                    @if($product->isHit())
                        <span class="badge badge-danger">@lang('admin.bestseller')</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
@endsection
