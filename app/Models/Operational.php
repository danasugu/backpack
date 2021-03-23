<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operational extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    // use CrudTrait;

    protected $table = 'operationals';
    protected $guarded = [
        'id',
        'name',
        'email',
        'phone',
        'created_at',
        'updated_at',
]; 
}       

