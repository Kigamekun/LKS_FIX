@extends('layouts.customer')

@section('content')

<div data-bs-ride="carousel" class="carousel slide" id="carousel">

    <div class="carousel-inner h-auto">

        <div class="carousel-item active">
            <div class="carousel-caption">
                <h2><b>Lets Buy the recomended product !</b></h2>
                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, eos?</p>
            </div>

            <img style="max-height: 700px;" src=" Assets_Frontend/header1.png" alt=""
                class="img-fluid h-auto w-100 d-block">
        </div>

        <div class="carousel-item ">
            <div class="carousel-caption">
                <h2><b>Lets Buy the recomended product !</b></h2>
                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, eos?</p>
            </div>
            <img style="max-height: 700px;" src="Assets_Frontend/header4.jpg" alt=""
                class="h-auto img-fluid w-100 d-block">
        </div>

        <div class="carousel-item ">

            <div class="carousel-caption">
                <h2><b>Lets Buy the recomended product !</b></h2>
                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, eos?</p>
            </div>
            <img style="max-height: 700px;" src="Assets_Frontend/header5.jpg" alt=""
                class="h-auto img-fluid w-100 d-block">
        </div>
    </div>


</div>


<div style=" background: #ddd;" class="w-100">


    <div class="container">
        <div class="p-3 d-flex justify-content-between align-items-center">


            <i class="fa fa-4x fa-cc-paypal"></i>

            <i class="fa fa-4x fa-address-card"></i>

            <i class="fa fa-4x fa-check-circle"></i>
            <i class="fa fa-4x fa-clock-o"></i>
        </div>
    </div>

</div>

<br>
<br>

<div class="container">

{{-- 
    <center>
        <h2><b>Recomended Product !</b></h2>
    </center>



    <div class="d-flex justify-content-center flex-wrap">

        <div style="width: 25rem;margin:10px;" class="card">



            <div class="m-2 position-absolute">
                <span class="badge bg-warning">
                    New
                </span>
                <span class="badge bg-info">
                    Terlaris !
                </span>
            </div>
            <img class="thumb" style="height: 300px;" src="Assets_Frontend/produk1.jpg" alt="">
            <div class="card-body">

                <div class="card-title">
                    <center>

                        <h4>Laptop Asus Tuf Gimang</h4>
                        <h6>Rp.8000.000</h6>
                    </center>
                </div>

            </div>

            <button class="btn btn-outline-warning m-2">
                <i class="fa fa-2x fa-cart-plus"></i>

            </button>

        </div>
        <div style="width: 25rem;margin:10px;" class="card">



            <div class="m-2 position-absolute">
                <span class="badge bg-warning">
                    New
                </span>
                <span class="badge bg-info">
                    Terlaris !
                </span>
            </div>
            <img class="thumb" style="height: 300px;" src="Assets_Frontend/produk2.jpg" alt="">
            <div class="card-body">

                <div class="card-title">
                    <center>

                        <h4>Keyboard Tuf</h4>
                        <h6>Rp.8000.000</h6>
                    </center>
                </div>

            </div>

            <button class="btn btn-outline-warning m-2">
                <i class="fa fa-2x fa-cart-plus"></i>

            </button>

        </div>
        <div style="width: 25rem;margin:10px;" class="card">



            <div class="m-2 position-absolute">
                <span class="badge bg-warning">
                    New
                </span>
                <span class="badge bg-info">
                    Terlaris !
                </span>
            </div>
            <img class="thumb" style="height: 300px;" src="Assets_Frontend/produk3.jpg" alt="">
            <div class="card-body">

                <div class="card-title">
                    <center>

                        <h4>Laptop Asus Rog Gimang</h4>
                        <h6>Rp.8000.000</h6>
                    </center>
                </div>

            </div>

            <button class="btn btn-outline-warning m-2">
                <i class="fa fa-2x fa-cart-plus"></i>

            </button>

        </div>

    </div>


    <br>
    <br>
    <br> --}}


    <center>
        <h3><b>Apple Set</b></h3>
    </center>

    <br>


    <div style="height: 500px;" class="d-flex w-100">

        <div style="flex:1; " class="m-2">
            <img src="{{ url('header6.jpg') }}" alt="" class="thumb w-100 h-100 img-fluid">
        </div>

        <div style="flex: 1; display: flex; flex-direction: column;">
            <div class="m-2 thumb"
                style="flex:1;background: url('{{ url('header7.jpg') }}');background-repeat: no-repeat;background-position-y: center; background-size: cover; ">

            </div>
            <div class="m-2 thumb"
                style="flex:1; background: url('{{ url('header8.jpg') }}');background-repeat: no-repeat;background-position-y: center; background-size: cover;">

            </div>
        </div>
    </div>






    <br>
    <br>
    <br>
    <center>
        <h5><b>
                Category
            </b></h5>
    </center>


    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-primary m-3">
            Laptop
        </button>
        <button class="btn btn-outline-primary m-3">
            Hp
        </button>

        <button class="btn btn-outline-primary m-3">
            Tablet
        </button>

    </div>

    <br>

    <br>
    <center>
        <h3><b>
                All Product
            </b></h3>
    </center>
    <br>
    <br>


    <div class="d-flex justify-content-center flex-wrap">

        








       @foreach ($produk as $item)
       <div style="width: 18rem;margin:10px;" class="card">



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


    <br>

    <br>

    <h6 style="text-align: right;"><a href="{{ route('all_product') }}" class="nav-link">All Items <i
                class="fa fa-arrow-circle-right"></i></a> </h6>
</div>

<br>


<!-- 
<div class="w-100">

<img src="" alt="">

</div> -->



<div class="w-100 p-5" style="background: #ddd;">

    <ul>
        <h3>Many reason you must buy our product !</h3>
        <br>
        <br>
        <li>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio non mollitia voluptatem commodi beatae
            placeat molestias provident itaque earum totam possimus quaerat, labore reiciendis odit eaque doloribus
            quos natus accusantium nemo, veniam sequi illum fugiat! Itaque fugit rerum architecto esse.
            Reprehenderit, doloremque maiores voluptas dolore error placeat quam, voluptate odio, fugit in vero
            veniam dignissimos totam aspernatur eius atque eligendi! Perspiciatis praesentium ex quos. Mollitia
            saepe deleniti molestiae iure temporibus et minus doloremque facilis voluptatibus magni asperiores
            labore quia accusamus consectetur explicabo commodi, itaque distinctio incidunt assumenda sint, quas
            illum ducimus dicta. Nisi doloribus atque tempore quisquam consequuntur? Nihil, corporis!
        </li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum facilis aliquam fuga harum possimus
            beatae deserunt iste. Eligendi obcaecati cupiditate, ex perspiciatis praesentium quos velit alias
            molestias quam! Repudiandae animi quos, nesciunt unde dicta soluta debitis suscipit, minima quisquam
            doloribus beatae totam optio libero mollitia esse rem, itaque dolorem sed!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolore sit ipsam delectus asperiores
            provident odio doloribus, dolorum aliquid iste corrupti unde commodi, sed quidem aperiam officiis
            beatae. Nesciunt praesentium aliquid nobis hic veritatis molestias, aut assumenda nulla unde deleniti.
        </li>
    </ul>

</div>

@endsection
