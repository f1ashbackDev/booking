@extends('new_admin.layout.admin')
@section('content')
    <div class="d-flex">
        <h2>Путевки сайта</h2>
        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Создать
        </button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Описание</th>
            <th>Фотографии</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td><img src="{{ asset('/storage/' . $item->image) }}" style="width: 119px;
                        height: 67px"/></td>
                <td>
                    <a href="{{ route('admin.products.edit', $item) }}">Изменить</a>
                    <a href="{{ route('admin.products.delete', $item) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Создание</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-primary" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Название</label>
                            <input type="text" class="form-control" id="name" placeholder="Название" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цена</label>
                            <input type="number" class="form-control" id="price" placeholder="0" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Описание</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="photoFile" class="form-label">Фотографии</label>
                            <input class="form-control" type="file" name="image" id="photoFile">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Создать</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
