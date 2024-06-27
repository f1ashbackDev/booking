<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'status',
        'count',
        'sum',
        'services_id'
    ];

    public function products()
    {
        return $this->hasOne(Services::class, 'id', 'services_id');
    }
}
