<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    public $primaryKey = 'type';
    public $incrementing = false;
    public $fillable = ['type', 'count', 'image'];
}
