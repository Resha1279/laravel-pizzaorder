@extends('layouts/app')

@section('content')


        <div class="flex-center position-ref full-height">

            <div class="content">
            <img src="/img/pizza-house.png" alt="logo">
                <div class="title m-b-md">
                 NEPAL'S BEST PIZZA
                </div>
                @if (Route::has('login'))

                @auth
                        <a class="btn" href="{{ url('/pizzas') }}">View all Pizza Orders</a>
                    @else
                    <p class="message">{{session('message')}}</p>
                    <a  class="btn" href="/pizzas/create">Order a Pizza</a>
                    @endauth

                    @endif
            </div>
        </div>

@endsection
