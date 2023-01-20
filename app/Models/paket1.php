<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket1 extends Model
{
    use HasFactory;
    protected $table = 'paket1';

    protected $fillable =['id','name','harga'
];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
