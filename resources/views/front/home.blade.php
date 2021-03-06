@extends('template.default')

@section('content')

    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href="{{ asset('/shirts') }}"><button class="button large">Check out My Shirts</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
         <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">

            @forelse($shirts->chunk(3) as $chunk)

                @foreach ($chunk as $shirt)
                    <div class="small-3 columns pull-left">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <a class="button expanded add-to-cart" href="{{ route('cart.edit', $shirt->id) }}">
                                    Add to Cart
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/' . $shirt->image) }}" width="300" height="300">
                                </a>
                            </div>
                            <a href="#">
                                <h3>
                                   {{ $shirt->name }}
                                </h3>
                            </a>
                            <h5>
                                &#2547;{{ $shirt->price }}
                            </h5>
                            <p>
                                {{ $shirt->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @empty
                <h3>No shirt is present</h3>
            @endforelse
    </div>
    <br>

@endsection
















