@extends('layouts.admin')


@section('content')
<center>
    <h1>Update</h1>
  </center>
  <div style="width: 75%;margin: auto;">
    <form action="{{ route('kategori.update', ['kategori'=>$kategori->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <div class="input-group">
  
          <input value="{{$kategori->nama_kategori}}" name="nama_kategori" type="text" class="form-control"
            placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1">
        </div>
      </div>
  
  
      <br>
      <center>
        <button type="submit" class="btn btn-success">Send!</button>
      </center>
    </form>
  </div>
  
  </div>
@endsection