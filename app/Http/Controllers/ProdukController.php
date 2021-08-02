<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produk = Produk::all();
        $kt = Kategori::all();

        $solve = [];
        foreach ($kt as $key => $value) {
            $solve[] = $value->id;
        }
        return view('produk',['produk'=>$produk,'kategori'=>$solve]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $thumb = $request->file('gambar');
        $thumbname = time().'-'.$thumb->getClientOriginalName();
        $thumb->move(public_path().'/thumb'.'/',$thumbname);
        Produk::create([

            'nama_produk'=>$request->nama_produk,

            'deskripsi'=>$request->deskripsi,

            'harga'=>$request->harga,

            'kategori_id'=>$request->kategori_id,
            'gambar'=>$thumbname
        ]);

        return response()->json(['success'=>'data has been created'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $kt = Kategori::all();

        $solve = [];
        foreach ($kt as $key => $value) {
            $solve[] = $value->id;
        }
        
        return view('update',['produk'=>Produk::where('id',$id)->first(),'kategori'=>$solve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
 

        if (is_null($request->gambar)) {
            Produk::where('id',$id)->update([

                'nama_produk'=>$request->nama_produk,
    
                'deskripsi'=>$request->deskripsi,
    
                'harga'=>$request->harga,
    
                'kategori_id'=>$request->kategori_id,
               
            ]);
        } else {
            $thumb = $request->file('gambar');
            $thumbname = time().'-'.$thumb->getClientOriginalName();
            $thumb->move(public_path().'/thumb'.'/',$thumbname);
            Produk::where('id',$id)->update([



                'nama_produk'=>$request->nama_produk,
    
                'deskripsi'=>$request->deskripsi,
    
                'harga'=>$request->harga,
    
                'kategori_id'=>$request->kategori_id,
                'gambar'=>$thumbname
            ]);
        }

        return redirect()->back()->with(['status'=>'success updated']);
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::where('id',$id)->delete();
        return redirect()->back()->with(['status'=>'success deleted']);
    }
}
