@extends('auth.layouts.admin_master')

@section('title', 'Категории')

@section('content')
        <h1>Категории</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
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
                                <a class="btn btn-success" type="button" href="{{ route('admin.categories.show', $category) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('admin.categories.edit', $category) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('admin.categories.create') }}">Добавить категорию</a>
@endsection
