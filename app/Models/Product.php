<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // USe de HasFactory trait for factory support
    use HasFactory;
    // Define the table associated with the model
    protected $table = 'products';
    // Specify the primary key for the model
    protected $primaryKey = 'id';
    
}
