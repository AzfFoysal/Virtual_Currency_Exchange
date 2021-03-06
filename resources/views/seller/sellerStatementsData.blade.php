<table  class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Order NO</th>
            <th scope="col">Poduct id</th>
            <th scope="col">product title</th>
            <th scope="col">Income</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Actions</th>
            <th scope='col'></th>
          </tr>
        </thead>
        <tbody>

                @foreach ( $product as $item )
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->name }}</td>
                            @if ($item->status=='completed')
                            <td>{{ $item->price_on_selling_time*$item->amount }}</td>
                            <input type="hidden" value="{{$total_income=($item->price_on_selling_time*$item->amount)+$total_income}}">
                            @else
                            <td>{{ $item->status }}</td>
                            @endif
                        <td>{{ $item->updated_at->format('Y/m/d ') }}</td>
                        <td>{{ $item->updated_at->format('H:i:s') }}</td>
                        <td><a class="btn btn-primary" href="{{ route('seller.statement.show',$item->id) }}"> Details</a>
                        <td>
                            {{-- <form method="post" action="{{ route('seller.invoice.index',$item->id) }}"> --}}
                                @if ($item->status!='cancelled')
                                     <a href="{{ route('seller.invoice.index',[$item->id,$item->seller_id,$item->buyer_id]) }}" type='submit'  class="btn btn-success">dawnload invoice</a>
                                @endif
                                {{-- </form> --}}
                        </td>
                    </tr>
                @endforeach

          <tr>
            <br>
            @if ($total_income>0)
            <div class="alert alert-info" role="alert">
                Total : <strong>{{ $total_income }}</strong> Taka
             </div>
            @endif
          </tr>

    </tbody>
</table>

