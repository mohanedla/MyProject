<table class="table table-bordered">
    <thead>
        {{-- R1  أعلى 5 منجات مبيعا--}}
        {{-- R2 المنتجات المباعة --}}
        {{-- R3 جرد مالي --}}
        {{-- R4  أعلىى منتج مبييعا--}}
        {{-- 
        <tr>   
        <tr>   

           <th >{{ __('#')}}</th>
           <th>{{ __('المنتج') }}</th>
           <th >{{ __('العلامة التجارية') }}</th> 
           <th >{{ __('الكمية المباعة') }}</th>
           <th >{{ __('الكمية المتبقية') }}</th>
           <th >{{ __('الربح') }}</th>

        </tr> --}}
        <tr>   
           {{-- R5 جرد المنتجات --}}

            <th >{{ __('#')}}</th>
            {{-- <th>{{ __('المنتج') }}</th>
            <th >{{ __('العلامة التجارية') }}</th> 
            <th >{{ __('الكمية المباعة') }}</th>
            <th >{{ __('الكمية المتبقية') }}</th>
            <th >{{ __('سعر الشراء') }}</th>
            <th >{{ __('سعر البيع') }}</th>
            <th >{{ __('الربح') }}</th> --}}
            @foreach ($columns as $column)
                <th >{{ $column['name']  }}</th> 
            @endforeach

        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($bills as $bill) --}}
    @foreach ($collections as $key => $item)
        <tr>
            <td class="text-right">
                <h5><strong>
                     {{  $key+1 }}
                    </strong>
                </h5>
            </td>
            @foreach ($columns as $column)
                <td class="text-right">
                    <h5><strong>
                         {{ Helper::get_property($column['code'],  $item) }}
                        </strong>
                    </h5>
                </td>
            @endforeach
            
        </tr>
    @endforeach
               {{-- <td class="text-right">
                  <img src="{{ asset(Storage::url($bill->profile_image)) }}" alt="Profile"
                      style="  border-radius: 50%;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    width: 50px;
                    height: 55px;">
                </td>
                <td class="text-right">
                    <h5><strong>  </strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong>  </strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong>  </strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong> </strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong></strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong></strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong></strong></h5>
                </td>
                <td class="text-right">
                    <h5><strong></strong></h5>
                </td> --}}

            </tr>
        {{-- @endforeach --}}
           
    </tbody>
</table>