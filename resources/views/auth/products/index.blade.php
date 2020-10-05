@extends('auth.layouts.admin_master')

@section('title', __('admin.products'))

@section('content')
        <h1>@lang('admin.products')</h1>
        <table class="table product-table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('admin.code')
                </th>
                <th>
                    @lang('admin.name_col')
                </th>
                <th>
                    @lang('admin.category')
                </th>
                <th>
                    @lang('admin.price')
                </th>
                <th>
                    @lang('admin.count')
                </th>
                <th>
                    @lang('admin.actions')
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->__('name') }}</td>
                    <td>{{ $product->category->__('name') }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->count }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('admin.products.show', $product) }}">@lang('admin.open')</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('admin.products.edit', $product) }}">@lang('admin.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('admin.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
        <a class="btn btn-success" type="button" href="{{ route('admin.products.create') }}">@lang('admin.add_product')</a>
@endsection
