@extends('auth.layouts.admin_master')

@section('title', __('admin.merchant') . ' ' . $merchant->name)

@section('content')
        <h1>@lang('admin.merchant') {{ $merchant->name }}</h1>
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
                <td>{{ $merchant->id }}</td>
            </tr>
            <tr>
                <td>@lang('admin.name_col')</td>
                <td>{{ $merchant->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $merchant->email }}</td>
            </tr>
            </tbody>
        </table>
@endsection
