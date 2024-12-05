<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Footer extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'footer';  // Nama collection di MongoDB
    protected $fillable = ['title_judul', 'title_isi', 'copyright'];
}
