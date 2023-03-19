<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpasienpulangblt extends Model
{
    use HasFactory;
    
    protected $guarded = [];
<<<<<<< HEAD
    protected $dates = ['tgllahir','tglmasuk','tglkeluar','tglkontrol'];
    
=======
    protected $connection = 'mysql2';
    protected $table = 'rpasienpulangblts';
    protected $dates = ['tgllahir','tglmasuk','tglkeluar','tgldilakukan','tglkontrol'];
>>>>>>> 0775cabca8e370f498f17bd84f91e8aacb854e10
}
