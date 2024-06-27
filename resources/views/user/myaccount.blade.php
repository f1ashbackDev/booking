@extends('layouts.headers')
@section('content-test')
    <!-- Offers -->

    <div class="offers">

        <!-- Offers -->

        <div class="container">
            <div style="padding-top: 200px">
                <div>
                    <ul style="display: flex">
                        <li style="margin-right: 15px"><a href="{{ route('myaccount') }}" style="color: black; border-bottom: 1px solid">Личная информация</a></li>
                        <li><a href="{{ route('order') }}" style="color: black">Заказы</a></li>
                    </ul>
                </div>
                <div style="margin-top: 15px;">
                    <p>Фамилия: {{ \Illuminate\Support\Facades\Auth::user()->surname }}</p>
                    <p>Имя: {{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                    <p>Логин: {{ \Illuminate\Support\Facades\Auth::user()->login }}</p>
                    <p>Почта: {{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
