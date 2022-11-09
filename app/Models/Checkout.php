<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = "checkout";
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
