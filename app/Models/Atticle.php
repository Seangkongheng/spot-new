<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atticle extends Model
{
    use HasFactory;
    protected $table='Atticle';
    protected $primarykey='id';
    protected $fillable=[
        'cate_id',
        'Title',
        'Subtitle',
        'image',
        'decription',
        'author'
    ];
}
