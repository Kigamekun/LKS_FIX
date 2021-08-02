<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home',['produk'=>$produk]);
    }

    public function detail($id)
    {


        
        $recomen = Produk::all()->random(4);
        $produk = Produk::where('id',$id)->first();
        return view('detail',['produk'=>$produk,'recomen'=>$recomen]);
    }

    public function add_cart(Request $request)  
    {
        Cart::create([
            'customer_id'=>Auth::id(),
            'produk_id'=>$request->id,
            'jumlah'=>$request->jumlah
        ]);

        return redirect()->back()->with(['status'=>'has added to cart']);

    }

    public function search(Request $request)
    {
        return view('result',['produk'=>Produk::where('nama_produk','LIKE','%'.$request->search.'%')->get()]);

    } 
    public function beli(Request $request)
    {
        foreach (Cart::where('customer_id',Auth::id())->get() as $key => $value) {
           
           $s = 'INV/';
           
           $solve = $s.join('',explode('-',Carbon::now()->toDateString()));
            $transaksi = Transaksi::create([
                'customer_id'=>Auth::id(),
                'tanggal'=>Carbon::now(),
                'kode_transaksi'=>$solve

            ]);

            Transaksi::where('id',$transaksi->id)->update([
                'kode_transaksi'=>$solve.str_pad($transaksi->id,3,STR_PAD_LEFT)
            ]);

            Transaksi_detail::create([
                'produk_id'=>$value->produk_id,
                'jumlah'=>$value->jumlah,
                'transaksi_id'=>$transaksi->id,
            ]);
    
            
        }

        Cart::where('customer_id',Auth::id())->delete();

        return redirect()->back()->with(['status'=>'has been buyed']);


    }


    public function cart()
    {
        return view('cart',['produk',Cart::where('customer_id',Auth::id())->get()]);
    }


    public function all_product(Request $request)
    {
        $produk = Produk::all();
        return view('all',['produk'=>$produk]);
    }

    public function history(Request $request)
    {
        return view('history',['transaksi'=>Transaksi::where('customer_id',Auth::id())->get()]);
    }
}
