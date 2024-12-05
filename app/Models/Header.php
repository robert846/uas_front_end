<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Header extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'home';  // Nama collection di MongoDB
    protected $fillable = ['title_judul', 'title_isi'];
}
