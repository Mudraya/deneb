@extends('auth.layouts.admin_master')

@section('title', __('admin.category') . ' ' . $category->__('name'))

@section('content')
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>@lang('admin.code')</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>@lang('admin.name_col')</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>@lang('admin.name_col') en</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('admin.description')</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>@lang('admin.description') en</td>
                <td>{{ $category->description_en }}</td>
            </tr>
            <tr>
                <td>@lang('admin.image')</td>
                <td><img src="{{ Storage::url($category->image) }}"
                         height="240px"></td>
            </tr>
            <tr>
                <td>@lang('admin.number_of_products')</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
@endsection
