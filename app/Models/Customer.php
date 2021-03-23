<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
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
