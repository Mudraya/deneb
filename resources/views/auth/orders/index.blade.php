@extends('auth.layouts.admin_master')

@section('title', __('admin.orders'))

@section('content')
        <h1>@lang('admin.orders')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('admin.name_col')
                </th>
                <th>
                    @lang('admin.phone')
                </th>
                <th>
                    @lang('admin.confirm_data')
                </th>
                <th>
                    @lang('admin.sum')
                </th>
                <th>
                    @lang('admin.actions')
                </th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->sum }} {{ $order->currency->symbol }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               @admin
                               href="{{ route('admin.orders.show', $order) }}"
                               @else
                               href="{{ route('person.orders.show', $order) }}"
                               @endadmin
                            >@lang('admin.open')</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
@endsection
