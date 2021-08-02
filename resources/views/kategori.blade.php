@extends('layouts.admin')


@section('content')
    



<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Order baru</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Statistik</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Pengunjung</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->



        <div class="card">
            <div class="card-header">
                <h1 class="">Tabel Kategori</h1>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default"
                    class="btn btn-block btn-info btn-lg">Buat Kategori !</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                           
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($kategori as $item)
                       <tr>
                          

                        <td>{{$item->nama_kategori}}</td>
                        <td><a href="{{ route('kategori.edit', ['kategori'=>$item->id]) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            
                            
                             <form  action="{{ route('kategori.destroy', ['kategori'=>$item->id]) }}" method="POST"> 
                             @csrf 
                             @method('DELETE')  
                            <button type="submit" onsubmit="return confirm('Yakin ?');" class=" btn btn-danger">Hapus</button>
                  
                            </form> 
                        </td>


                        
                    </tr>
                       @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>





    </div><!-- /.container-fluid -->
</section> 


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buat Kategori</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="POST" id="kategori">
            @csrf
            <div class="modal-body">


              <div class="form-group">
                <div class="input-group">

                  <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori"
                    aria-label="Nama Kategori" aria-describedby="basic-addon1">
                </div>
              </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>










@endsection