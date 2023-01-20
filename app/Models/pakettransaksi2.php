<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pakettransaksi2 extends Model
{
    use HasFactory;
    protected $table = 'pakettransaksi2';
    protected $fillable =['name','barang','paket','berat','grand_total','name_status'
];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
