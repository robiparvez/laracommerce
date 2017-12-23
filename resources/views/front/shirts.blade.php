@extends('template.default')

@section('title', 'Shirts')

@section('content')

<div class="row">

    @forelse($shirts as $shirt)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/' . $shirt->image) }}">
                    </a>
                </div>
                <a href="{{ route('single') }}">
                    <h3>
                       {{ $shirt->name }}
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    <h3></h3>{{ $shirt->description }}
                </p>
            </div>
        </div>
    @empty
        <h3>No shirts available!</h3>
    @endforelse

</div>

@endsection



