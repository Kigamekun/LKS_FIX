@extends('layouts.admin')



@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Transaksi detail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/produk">Home</a></li>
            <li class="breadcrumb-item active">Invoice</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
         


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> KigaShop WB.
                 
                 
                 
                  <small class="float-right">Date: 2/10/2014</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                  <strong>Kiga.</strong><br>
                 Kp Pondok Bitung<br>
                  Bogor<br>
                  Phone: 0895331493506<br>
                  Email: reksa.prayoga1012@gmail.com
                </address>
              </div>
              <!-- /.col -->















              <div class="col-sm-4 invoice-col">
                To
                <address>
                  <strong>{{$transaksi->customer_id}}</strong><br>
                
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Kode Transaksi {{$transaksi->kode_transaksi}}</b><br>
                <br>
              
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            
            <!-- /.row -->

            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection