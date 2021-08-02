@extends('layouts.customer')    


@section('content')
<div class="container" style="min-height: 400px;">

    <center>
            <h3><b> <i class="fa fa-shopping-cart"></i> Your Cart</b></h3>

    </center>
    <br>
    <div class="w-60 mx-auto">


        @foreach (App\Models\Cart::where('customer_id',Auth::id())->get() as $item)
        <div class="card" style="height: 250px;">

            <div class="d-flex w-100 h-100">

                <div style="flex:3;">
                    <img class="w-100 h-100 thumb" src="{{ url('thumb/'.App\Models\Produk::where('id',$item->produk_id)->pluck('gambar')->first()) }}" alt="">
                </div>


                <div style="flex:4;" class="d-flex align-items-center">
                    <div class="p-3">
                        <h3>{{$item->produk_id}}</h3>
                        <h3>{{$item->jumlah}}</h3>
                    </div>
                </div>
                <div style="flex: 1;" class="p-1">

                    <a class="w-100 h-100 btn  btn-outline-danger">

                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
      
        <br>
        <br>

      <form method="POST" action="{{ route('beli') }}">
        @csrf
        <button type="submit" class="w-100  btn btn-outline-success">

            Checkout
        </button>

      </form>
    </div>
</div>

@endsection