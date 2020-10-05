@extends('auth.layouts.admin_master')

@section('title', __('admin.order') . ' ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>@lang('admin.order') №{{ $order->id }}</h1>
                    <p>@lang('admin.customer'): <b>{{ $order->name }}</b></p>
                    <p>@lang('admin.phone'): <b>{{ $order->phomne }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('admin.name_col')</th>
                            <th>@lang('admin.count')</th>
                            <th>@lang('admin.price')</th>
                            <th>@lang('admin.sum')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                        <img height="56px"
                                             src="{{ (Storage::url($product->image)) }}"
                                        >
                                        {{ $product->__('name') }}
                                    </a>
                                </td>
                                <td><span class="badge"> {{ $product->pivot->count }}</span></td>
                                <td>{{ $product->pivot->price }} {{ $order->currency->symbol }}</td>
                                <td>{{ $product->pivot->price * $product->pivot->count }} {{ $order->currency->symbol }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">@lang('admin.total_sum'):</td>
                            <td>{{ $order->sum }} {{ $order->currency->symbol }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
