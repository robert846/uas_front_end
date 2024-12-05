<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class About extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'about';  // Nama collection di MongoDB
    protected $fillable = ['title_judul', 'title_isi'];
}
