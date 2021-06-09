@extends('layouts.app')

@section('content')

    <!--Main-->
    <section class="jumbotron flex">
        <div class="container">
            <div class="cards flex">
                @foreach ($cards as $card)
                    <div class="card">
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
                        <h4 class="card-title"> {{ $card['title'] }}</h4>
                    </div>
                @endforeach
            </div>
            <button class="loadmore"><a href="#">Load more</a></button>
        </div>
    </section>
@endsection
