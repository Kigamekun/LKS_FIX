<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
</head>

<body>

    <style>
        .thumb {
            transition: .7s;
        }

        .thumb:hover {
            opacity: .7;
        }
    </style>

    <header class="mb-2 p-2">

        <div class="container">
            <div class="d-flex justify-content-center align-items-center justify-content-lg-start flex-wrap">



                <div class="d-flex col-12 justify-content-center col-lg-auto">
                    <h3>
                        <b>
                            <i class="fa fa-firefox"></i>
                            KigaShop
                        </b>
                    </h3>

                </div>
                <ul class="ms-auto nav d-flex justify-content-center align-items-center col-12 col-lg-auto">

                    <!-- LOGIN -->
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                   
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        
                    </li>
                @endguest
                </ul>



            </div>
            <hr>

            <div class="d-flex justify-content-center align-items-center justify-content-lg-start flex-wrap">




                <ul class=" nav d-flex justify-content-center col-12 col-lg-auto">


                    <li><a href="{{ route('home') }}" class="nav-link"><i class="fa fa-home"></i> Home</a></li>

                    <li><a href="{{ route('cart') }}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" class="nav-link"><i
                                class="fa fa-shopping-cart"></i> Cart</a></li>

                    <li><a href="{{ route('all_product') }}" class="nav-link"><i class="fa fa-shopping-bag"></i> Shop</a></li>
                    <li><a href="{{ route('history') }}" class="nav-link"> History</a></li>
                </ul>

                <form action="{{ route('search') }}" method="POST" class="ms-auto col-12 col-lg-auto d-flex">
@csrf
                    <input type="search" placeholder="Search ..." name="search" id="search" class="form-control">
                    <button type="submit" class="btn btn-outline-info ms-2"><i class="fa fa-search"></i></button>
                </form>



            </div>

        </div>


    </header>

    <div style="background: #222;height: 50px;" class="w-100">
        <div class="container">

            <div class="d-flex justify-content-center align-items-center">

                <ul class=" nav d-flex justify-content-center col-12 col-lg-auto">

                    Produk
                    <li><a href="" class="nav-link text-white"><b> <i class="fa fa-laptop"></i> Laptop</b></a></li>

                    <li><a href="" class="nav-link text-white"> <b><i class="fa  fa-mobile-phone"></i> HP</b></a></li>

                    <li><a href="" class="nav-link text-white"><b> <i class="fa fa-headphones"></i> Headseat</b></a>
                    </li>

                </ul>
            </div>
        </div>

    </div>


    


    @if(session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-text">{{ session('status') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
       @endif



    @yield('content')


    <footer class="w-100  p-4" style="background: #222;">

        <div class="container">


            <div class="d-flex justify-content-center align-items-center">


                <div class="col-6">
                    <h3 class="text-white">Subscribe for News Letter !</h3>
                </div>


                <form action="" class="col-6">

                    <input type="text" placeholder="Gmail ..." name="" id="" class="form-control">
                </form>
            </div>
            <br>
            <br>
            <br>
            <div class="d-flex flex-wrap justify-content-between">

                <ul class="text-white" style="list-style: none;">
                    <li>
                        <h3> <i class="fa fa-firefox"></i> About</h3>
                    </li>
                    <li>KigaShop</li>
                    , ['id'=>1]   <li>reksa.prayoga1012@gmail.com</li>
                    <li>Bogor</li>
                </ul>
                <ul class="text-white" style="list-style: none;">
                    <li>
                        <h3> <i class="fa fa-question-circle"></i> Help</h3>
                    </li>
                    <li>Pay Product </li>
                    <li>register account </li>
                    <li>cart problems</li>
                </ul>

                ode_transaksi  <ul class="text-white" style="list-style: none;">
                    <li>
                        <h3> <i class="fa fa-user-plus"></i> Follow our account ! </h3>
                    </li>
                    <li class="d-flex align-items-center"><i class="fa fa-2x fa-instagram"></i> <span
                            style="margin-left: 5px;">puppetreaper</span></li>

                    <li><i class="fa fa-2x fa-facebook"></i><span style="margin-left: 5px;">ReksaSyahputra</span> </li>

                </ul>


            </div>
        </div>

        <br>

        <br>
        <center>
            <h6 class="text-white">Copyright <i class="fa fa-copyright"></i> Kigamekun All Right Reserved.</h6>
        </center>
    </footer>










    <div id="offcanvasRight" class="offcanvas offcanvas-end">

        <div class="offcanvas-header">
            <i class="fa fa-2x fa-shopping-cart"></i>
            <h4>
                Cart
            </h4>

            <button class="btn btn-close" data-bs-dismiss="offcanvas">

            </button>
        </div>

        <div class="offcanvas-body">
            @foreach (App\Models\Cart::where('customer_id',Auth::id())->get() as $item)
            <div class="card" style="height: 120px;">

                <div class="d-flex w-100 h-100">

                    <div style="flex:3;">
                        <img class="w-100 h-100" src="{{ url('thumb/'.App\Models\Produk::where('id',$item->produk_id)->pluck('gambar')->first()) }}" alt="">
                    </div>


                    <div style="flex:4;" class="">
                        <div class="p-3">
                            <h6>{{$item->produk_id}}</h6>
                            <p>{{$item->jumlah}}</p>
                        </div>
                    </div>
                    <div style="flex: 1;" class="p-1">

                        <button class="w-100 h-100 btn  btn-outline-danger">

                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
<br>
            <form action="{{ route('beli') }}" method="post">
            @csrf

            <button type="submit" class="btn btn-outline-info">

                Checkout

            </button>
            </form>



            <br>

            <a href="{{ route('cart') }}" class="nav-link ms-1">Cart View</a>
        </div>
    </div>





    <script src="{{ url('bootstrap-5.0.2-dist/js/bootstrap.min.js')}} "></script>
</body>

</html>