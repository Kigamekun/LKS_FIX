@extends('layouts.customer')


@section('content')
<div style="min-height: 400px;" class="container">

    <div class="d-flex">
        
        <div class="p-2" style="flex:2;background: #ddd; border-radius: 10px;">
            
            <center>

                <h3>List Kategori</h3>
            </center>
        
            <br>

            <div class="justify-content-center flex-wrap d-flex justify-content-center">

                <button class="btn btn-success m-2">
                    Hp
                </button>



                <button class="btn btn-success m-2">
                    Laptop
                </button>



                <button class="btn btn-success m-2">
                    Tablet
                </button>



                <button class="btn btn-success m-2">
                    PC
                </button>

             
                
                
            </div>
        </div>




        <div style="flex:5;">

            <center><h1>List Produk</h1></center>
            <div class="justify-content-center d-flex flex-wrap p-3">


                @foreach ($produk as $item)
                <div style="width: 15rem;margin:10px;" class="card">



                    <div class="m-2 position-absolute">
                        <span class="badge bg-warning">
                            New
                        </span>
            
                    </div>
                    <img class="thumb" style="height: 300px;" src="{{ url('thumb/'.$item->gambar) }}" alt="">
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
    </div>


</div>


@endsection