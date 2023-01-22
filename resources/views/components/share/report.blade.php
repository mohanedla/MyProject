<table class="table table-bordered">
    <thead>
        {{-- R1  أعلى 5 منجات مبيعا--}}
        {{-- R2 المنتجات المباعة --}}
        {{-- R3 جرد مالي --}}
        {{-- R4  أعلىى منتج مبييعا--}}

        <tr>   
           {{-- R5 جرد المنتجات --}}

            <th >{{ __('#')}}</th>

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
        </tbody>
    </table>
    {{Carbon\Carbon::now('Africa/Tripoli')->format("Y-m-d") }}
    <br>
    {{Carbon\Carbon::now('Africa/Tripoli')->format("h-i-A") }}
              