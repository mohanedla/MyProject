<div class="col-xs-6 col-sm-4 shopcart">
    <div id="cart" class="btn-group btn-block mtb_40">
        <button type="button" class="btn" data-target="#cart-dropdown"
            data-toggle="collapse" aria-expanded="true"><span
                id="shippingcart">{{ __('Shopping cart') }}</span>
            {{-- @livewire('cart-counter') --}}
            <span id="cart-total">{{ __('items') }}
                ({{ App\Models\Cart::where('user_id',auth()->user()->id)->count() }})
            </span>
        </button>
    </div>

    <div id="cart-dropdown" class="cart-menu collapse" >
        <ul style=" color:black;">
            <li >
                @if (App\Models\Cart::where('user_id',auth()->user()->id)->count() >2)
                    <div id="cart-dropdown1" >
                    @else
                        <div>
                @endif
                <table class="table table-striped" >
                    <tbody style=" color:black;">
                        @if (App\Models\Cart::where('user_id',auth()->user()->id)->count() > 0)

                            @foreach (App\Models\Cart::where('user_id',auth()->user()->id)->get() as $item)
                                <tr>
                                    <td class="text-center"><a href="#"><img
                                                style="width: 80px"
                                                src="{{ asset(Storage::url($item->image)) }}"
                                                alt="iPod Classic" title="iPod Classic"></a>
                                    </td>
                                    <td class="text-left product-name">
                                        <span>{{ $item->name }}</span>
                                         <span class="text-left price">{{ $item->color->name }}</span>

                                         
                                         @if($item->size )
                                         <span class="text-left price">
                                            {{ $item->size->name }}</span>
                                         @endif


                                         <span class="text-left price">{{ $item->price }}$</span>
                                         <span class="text-left price">{{ round( $item->price  * Session::get('LYD') , 2) }}LYD</span>

                                        <input class="cart-qty" name="product_quantity" style="border-color:black; color:black;"
                                            min="1" value="{{ $item->qty }}"
                                            type="number">
                                    </td>
                                    <td class="text-center">
                                        <a class="close-cart"
                                            href="{{ url('remove', $item->id) }}"><i
                                                class="fa fa-times-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        @endif
                    </tbody>

                </table>
    </div>
    </li>
    <li>
        <table class="table">

            <tbody style=" color:black;">
                <tr>
                    @if(auth()->user()->count_order > 3)
                    <th>${{App\Models\Cart::GET_TOTAL_PRICE() - ( App\Models\Cart::GET_TOTAL_PRICE()*0.15)}}
                    <br>
                {{   round(  ( App\Models\Cart::GET_TOTAL_PRICE() -  App\Models\Cart::GET_TOTAL_PRICE() *0.15 ) * Session::get('LYD') , 2) }} LYD</th>
                    @else
                    <th>${{App\Models\Cart::GET_TOTAL_PRICE()}}
                        <br>
                    {{   round(   App\Models\Cart::GET_TOTAL_PRICE() * Session::get('LYD') , 2) }} LYD </th>

                    @endif
                    <th><strong>:"{{ __('Total') }}"</strong></th>
                    
                </tr>
                <tr>
                    <td>
                        <form action="cart_page">
                            <input class="btn pull-left mt_10" value="{{ __('View cart') }}"
                                type="submit">
                        </form>
                    </td>
                    <td>
                        <form action="checkout_page">
                            <input class="btn pull-right mt_10" value="{{ __('Checkout') }}"
                                type="submit">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </li>

    </ul>
</div>
</div>