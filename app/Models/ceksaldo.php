<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ceksaldo extends Model
{
    use HasFactory;


    protected $table = 'ceksaldo';
    protected $primaryKey = 'id_user';


    protected $fillable = [
        'saldo',
        'nominal',
    ];
}
