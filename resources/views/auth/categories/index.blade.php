@extends('auth.layouts.admin_master')

@section('title', __('admin.categories'))

@section('content')
        <h1>@lang('admin.categories')</h1>
        <table class="table">
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
                    @lang('admin.actions')
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->__('name') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('admin.categories.show', $category) }}">@lang('admin.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('admin.categories.edit', $category) }}">@lang('admin.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('admin.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('admin.categories.create') }}">@lang('admin.add_category')</a>
@endsection
