<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpasienpulangblt extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $connection = 'mysql2';
    protected $table = 'rpasienpulangblts';
}
