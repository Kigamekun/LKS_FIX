<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_detail extends Model
{
    protected $fillable = ['produk_id','jumlah','transaksi_id'];
    
    use HasFactory;
}
