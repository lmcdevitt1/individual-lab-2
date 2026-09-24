<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'size',
        'price',
    ];

    public function toString(): string
    {
        return $this->name . ' - ' . $this->size . ' ($' . $this->price . ')';
    }
}
