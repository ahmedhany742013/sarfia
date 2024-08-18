<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class CartProduct extends Model
{

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
