@extends('new_admin.layout.admin')
@section('content')
    <div class="d-flex">
        <h2>Заказ №{{$order->id}}</h2>
    </div>

    <form action="{{ route('admin.orders.update', $order) }}" method="post">
        @csrf
        <label>
            Статус заказа:
            <select name="status" class="form-control">
                <option value="Создан" @selected($order->status == 'Создан')>Создан</option>
                <option value="Обработка" @selected($order->status == 'Обработка')>Обработка</option>
                <option value="Отправка" @selected($order->status == 'Отправка')>Отправка</option>
                <option value="Доставлен" @selected($order->status == 'Доставлен')>Доставлен</option>
            </select>
        </label>
        <input type="submit" value="Сохранить">
    </form>
    <div>
        <h2>Путёвка {{ $order->products->name }}</h2>
        <p>Цена путёвки {{ $order->products->price }} рублей</p>
        <p>Количество {{ $order->count }} штук</p>
        <p>Сумма заказа {{ $order->sum }} рублей</p>
    </div>
@endsection
