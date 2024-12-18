<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'customer_name',
        'location',
        'contact',
        'items',
        'price',
        'discount',
        'total'
    ]; 
}
