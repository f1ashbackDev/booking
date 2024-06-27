@extends('layouts.index')
@section('content')
    <!-- Offers -->

    <div class="offers">

        <!-- Offers -->

        <div class="container">
            <div style="padding-top: 200px">
                <div>
                    <ul style="display: flex">
                        <li style="margin-right: 15px"><a style="color: black" href="{{ route('myaccount') }}">Личная информация</a></li>
                        <li><a style="color: black; border-bottom: 1px solid" href="{{ route('order') }}">Заказы</a></li>
                    </ul>
                </div>
                <div style="margin-top: 15px;">
                    <h1 style="color: black">История заказов</h1>
                        <table class="table" style="margin-top: 30px; color: black">
                            <thead>
                                <tr>
                                    <td>Номер заказа</td>
                                    <td>Статус заказа</td>
                                    <td>Название тура</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->products->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
