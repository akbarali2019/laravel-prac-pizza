@extends('layouts/layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizzahouse.jpg" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="msg">{{ session('msg') }}</p>
        <a href="/pizzas/create">Order Your Pizza</a>
    </div>
</div>
@endsection