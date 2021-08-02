@extends('layouts.customer')


@section('content')
    
<div class="container" style="min-height: 400px;">

    <center>
            <h3><b> <i class="fa fa-history"></i> History</b></h3>

    </center>
    <br>
    <div class="w-60 mx-auto">

        @foreach ($transaksi as $item)
        <div class="card" style="height: 250px;">

            <div class="d-flex w-100 h-100">

                <div style="flex:4;" class="d-flex align-items-center">
                    <div class="p-3">
                        <h3>tanggal : {{$item->tanggal}}</h3>
                        <h3>kode transaksi : {{$item->kode_transaksi}}</h3>
            
                    </div>
                </div>
             
            </div>
        </div>
        <br>
        @endforeach

        <br>
      
    </div>
</div>

@endsection