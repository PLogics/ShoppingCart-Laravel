<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function login()
    {
        return $this->belongsTo(Login::class);
    }
}
