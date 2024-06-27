@extends('new_admin.layout.admin')
@section('content')
    <h2>Изменение продукта:</h2>
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
    <form method="post" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data"
          class="d-flex flex-column">
        @csrf
        <div class="input-group mb-3 d-flex flex-column col-sm-9">
            <label>Название</label>
            <p>{{$product->name}}</p>
            <input type="text" class="form-control" aria-label="" style="width: 350px; height: 30px;" name="name">
        </div>
        <div class="input-group mb-3 d-flex flex-column col-sm-9">
            <label>Цена</label>
            <p>{{$product->price}}</p>
            <input type="text" class="form-control" aria-label="" style="width: 350px; height: 30px;" name="price">
        </div>
        <div class="input-group mb-3 d-flex flex-column col-sm-9">
            <label>Описание</label>
            <p>{{$product->description}}</p>
            <input type="text" class="form-control" aria-label="" style="width: 350px; height: 30px;" name="description">
        </div>
        <label>
            Текущие фотографии:
            <img src="{{ asset('/storage/' . $product->image) }}" style="width: 250px; height: 250px"/>
        </label>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Добавьте или измените фотографии</label>
            <input class="form-control" type="file" id="formFileMultiple" name="image">
        </div>
        <input type="submit" placeholder="Создать" class="btn btn-primary"/>
    </form>
@endsection
