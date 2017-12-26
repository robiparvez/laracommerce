@extends('template.default')

@section('title', 'Shirts')

@section('content')

    <div class="container">
        <div class="row">

            @forelse($shirts as $shirt)
            <div class="small-3 columns pull-left">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart" href="{{ route('cart.edit', $shirt->id) }}">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/' . $shirt->image) }}" width="300" height="300">
                            </img>
                        </a>
                    </div>
                    <a href="{{ route('single') }}">
                        <h3>
                            {{ $shirt->name }}
                        </h3>
                    </a>
                    <h5>
                       &#2547;{{ $shirt->price }}
                    </h5>
                    <p>
                        <h3>
                        </h3>
                        {{ $shirt->description }}
                    </p>
                </div>
            </div>

            @empty
            <h3>
                No shirts available!
            </h3>
            @endforelse
        </div>
    </div>
@endsection
