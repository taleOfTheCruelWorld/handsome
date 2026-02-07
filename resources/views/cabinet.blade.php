@extends('theme')
@section('content')
<div class="container">
        <h1>Отзывы</h1>
        <table class="table">
            <tr>
                <td>Name</td>
                <td>Phone</td>
                <td>City</td>
                <td>Adress</td>
                <td>Size</td>
                <td>Type</td>
                <td>Color</td>
                <td>Dilivery type</td>
                <td>Tarif</td>
                <td>Price</td>
            </tr>
            @forelse ($orders as $order)
            <tr>
                <td>{{ $order->name}}</td>
                <td>{{ $order->phone}}</td>
                <td>{{ $order->city->name}}</td>
                <td>{{ $order->adress}}</td>
                <td>{{ $order->size}}</td>
                <td>{{ $order->type->name }}</td>
                <td>{{ $order->color->name}}</td>
                <td>{{ $order->retake_type->name}}</td>
                <td>{{ $order->tarif->name}}</td>
                <td>{{ $order->tarif->price * $order->size}}</td>
            </tr>
            @empty
            Отзывов нет
            @endforelse
        </table>
    </div>
</div>
@endsection
