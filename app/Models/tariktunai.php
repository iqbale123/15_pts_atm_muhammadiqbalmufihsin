<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tariktunai extends Model
{
    use HasFactory;


    protected $table = 'tariktunai';
    protected $primaryKey = 'id_user';


    protected $fillable = [
        'id_penarikan',
        'no_rekening',
    ];

}
