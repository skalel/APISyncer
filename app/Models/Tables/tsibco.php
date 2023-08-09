<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsibco extends Model
{
    use HasFactory;

    protected $table = 'tsibco';

    public $timestamps = false;

    protected $fillable = [
      'ABREVIATURA',
      'CODBCO',
      'NOMEBCO',
      'CTACMC7INI',
      'CTACMC7FIM',
    ];
}
