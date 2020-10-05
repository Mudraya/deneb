@extends('auth.layouts.admin_master')

@section('title', __('admin.merchants'))

@section('content')
        <h1>@lang('admin.merchants')</h1>
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
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
                    Email
                </th>
                <th>
                    @lang('admin.actions')
                </th>
            </tr>
            @foreach($merchants as $merchant)
                <tr>
                    <td>{{ $merchant->id }}</td>
                    <td>{{ $merchant->name }}</td>
                    <td>{{ $merchant->email }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.merchants.destroy', $merchant) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('admin.merchants.show', $merchant) }}">@lang('admin.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('admin.merchants.edit', $merchant) }}">@lang('admin.edit')</a>
                                <a class="btn btn-primary" type="button" href="{{ route('admin.merchants.update_token', $merchant) }}">@lang('admin.refresh_token')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('admin.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $merchants->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('admin.merchants.create') }}">@lang('admin.add_merchant')</a>
@endsection
