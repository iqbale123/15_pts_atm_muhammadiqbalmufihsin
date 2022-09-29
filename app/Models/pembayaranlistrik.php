<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaranlistrik extends Model
{
    use HasFactory;

    protected $table = 'pembayaranlistrik';
    protected $primaryKey = 'id_user';


    protected $fillable = [
        'no_token',
        'nominal',
    ];
}
