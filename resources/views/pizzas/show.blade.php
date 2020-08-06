@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="crust">Crust - {{$pizza->base}}</p>
    <p classs="toppings">Extra Toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf 
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>

<a href="/pizzas" class="back">back to all pizzas</a>

@endsection
