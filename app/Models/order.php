<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
public function order()
{
    order::create(['name'=>'Nael',
    'order_body'=>'lorem',
    'created_at'=>now(),
    'updated_at'=>now(),
]);}
protected $guarded = [];
}
