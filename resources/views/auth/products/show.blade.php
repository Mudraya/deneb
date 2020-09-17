@extends('auth.layouts.admin_master')

@section('title', 'Продукт ' . $product->name)

@section('content')
        <h1>{{ $product->__('name') }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->__('name') }}</td>
            </tr>
            <tr>
                <td>Название en</td>
                <td>{{ $product->__('name')_en }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->__('description') }}</td>
            </tr>
            <tr>
                <td>Описание en</td>
                <td>{{ $product->__('description')_en }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Лейблы</td>
                <td>
                    @if($product->isNew())
                        <span class="badge badge-success">Новинка</span>
                    @endif

                    @if($product->isHit())
                        <span class="badge badge-danger">Хит продаж</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
@endsection
