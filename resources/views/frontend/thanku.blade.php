@extends('frontend.layouts.main1')

@section('content')
<style>
    .thank-you-page {
        text-align: center;
        padding: 50px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 600px;
    }

    .thank-you-page h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #28a745;
    }

    .thank-you-page h2 {
        font-size: 1.5em;
        margin-bottom: 40px;
        color: #555;
    }

    .thank-you-page img {
        max-width: 100px;
        margin-bottom: 20px;
    }

    .thank-you-page .alert {
        margin-bottom: 30px;
        border-radius: 5px;
    }

    .thank-you-page a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .thank-you-page a:hover {
        background-color: #218838;
    }
</style>

<div class="thank-you-page">
    @if(session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ session::get('success')}}
        </div>
    @endif
    <img src="{{ asset('images/thank-you.png') }}" alt="Thank You">
    <h1>Happy Shopping</h1>
    <h2>Thank you for shopping with us. We hope to see you again!</h2>
    <a href="{{ url('/') }}">Continue Shopping</a>
</div>
@endsection
