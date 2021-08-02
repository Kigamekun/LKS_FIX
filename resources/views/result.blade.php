@extends('layouts.customer')

@section('content')
    
<div style="min-height: 400px;" class="container">


    <br>

<h3 class="text-black-50">

    Result For : Produk
</h3>


<div class="justify-content-center d-flex flex-wrap ">

   
    @foreach ($produk as $item)
    <div style="width: 15rem;margin:10px;" class="card">



        <div class="m-2 position-absolute">
            <span class="badge bg-warning">
                New
            </span>

        </div>
        <img class="thumb" style="height: 250px;" src="{{url('thumb/'.$item->gambar) }}" alt="">
        <div class="card-body">

            <div class="card-title">
                <center>

                    <h4>{{$item->nama_produk}}</h4>
                    <h6>{{$item->harga}}</h6>
                </center>
            </div>

        </div>

        <button class="btn btn-outline-warning m-2">
            <i class="fa fa-2x fa-cart-plus"></i>

        </button>

    </div>

    @endforeach



</div>




</div>



@endsection