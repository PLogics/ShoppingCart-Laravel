<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    public $timestamps = false;
    public function cart()
    {
        return $this->hasone(Cart::class);
    }
}
