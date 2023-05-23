@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row row-cols-6">
            @foreach ($db as $comic)
                <div class="col">
                    <div class="card border-0 rounded-0 mb-4">
                        <figure class="m-0">
                            <img src="{{ $comic['thumb'] }}" alt="Locandina">
                        </figure>
                        <div class="card-body text-center p-3 pt-2">
                            <h2 class="card-title m-0">{{ $comic['series'] }}</h2>
                            <p class="m-0">{{ $comic['type'] }}</p>
                            <p class="m-0">{{ $comic['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
