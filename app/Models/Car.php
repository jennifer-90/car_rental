<?php

/*--------------------------------------------------*/
//app/Http/Controllers/CarController
//app/Models/Car.php
//database/migrations/...create_cars_table.php
/*--------------------------------------------------*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'slug',
        'image',
    ];
}
