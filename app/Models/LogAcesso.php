<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 */
class LogAcesso extends Model
{
    use HasFactory;
    protected $fillable = ['log'];
}
