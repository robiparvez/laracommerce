<div  class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{ route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
               MC-MyKey Shirts
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{ route('shirts') }}">
                    SHIRTS
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>

            <li>
                <a href="{{ route('calendar') }}">
                    VIEW CALENDER
                </a>
            </li>


            <li>
                <a href="{{ route('cart.index') }}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    CART
                    <span class="alert badge">
                        {{ Cart::count() }}
                    </span>
                </a>
            </li>
        </ol>
    </div>
</div>