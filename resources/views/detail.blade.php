@extends('layouts.customer')

@section('content')
    <br>
<div style="min-height: 400px;" class="container">

    <div class="d-flex " style="height: 500px;">

        <div style="flex:4;display: flex; align-items: center;">

            <img class="w-100 h-100 thumb" src="{{ url('thumb/'.$produk->gambar) }}" style=" border-radius: 10px;"  alt="">
        </div>

        <div class="" style="flex:5;display: flex;align-items: center;">
            <div class="m-5">

                <h2>{{$produk->nama_produk}}</h2>
                <h3>Rp.{{$produk->harga}}</h3>
                <p>{{$produk->deskripsi}}</p>

                <hr>



                
                <form action="{{ route('add_cart') }}" method="POST" class="d-flex ">

                    @csrf
<input type="hidden" name="id"value="{{$produk->id}}">
                    <input type="number" name="jumlah" required min="1" name="" id="" class="form-control ">

                    <button type="submit" class="ms-2 btn-lg col-9 btn btn-outline-info">
                        Beli !
                    </button>

                </form>






            </div>

        </div>

    </div>

    <hr>

    <br>

    <h4 class="text-black-50">

        Related Product

    </h4>


    <br>

    <div class="d-flex justify-content-center flex-wrap">
        
@foreach ($recomen as $item)
    
<div style="width: 18rem;margin:10px;" class="card">



    <div class="m-2 position-absolute">
        <span class="badge bg-warning">
            New
        </span>
        <span class="badge bg-info">
            Terlaris !
        </span>
    </div>
    <img class="thumb" style="height: 250px;" src="{{ url('thumb/'.$item->gambar) }}" alt="">
    <div class="card-body">

        <div class="card-title">
            <center>

                <h4>{{$item->nama_produk}}</h4>
                <h6>{{$item->harga}}</h6>
            </center>
        </div>

    </div>

    <a href="{{ route('detail', ['id'=>$item->id]) }}" class="btn btn-outline-warning m-2">
        <i class="fa fa-2x fa-cart-plus"></i>

    </a>

</div>
@endforeach
    </div>



</div>




@endsection