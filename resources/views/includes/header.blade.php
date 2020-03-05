<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">
                            {{ Cart::content()->count() }}
                        </span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            @if(Cart::content()->count() != 0)
                                <h4 class="title-cart align-center">${{ Cart::total() }}</h4>
                                {{-- <p class="subtitle">Please make your choice.</p> --}}
                                <a href="{{ route('cart')}}" class="btn btn-small btn--dark">
                                <span class="text">View Cart</span>
                                </a>
                            @else
                                <p class="align-center">Cart is Empty</p>
                                <a href="/" class="btn btn-small btn--dark">
                                    <span class="text">Continue Shopping</span>
                                    </a>
                                @endif
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>
