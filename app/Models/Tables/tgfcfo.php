<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfcfo extends Model
{
    use HasFactory;

    protected $table = 'tgfcfo';

    public $timestamps = false;

    protected $fillable = [
      'CALCDIFICMS',
      'CODCFO',
      'CODCTACTB',
      'CONVPRODUZ',
      'DESCRCFO',
      'GRUPOCFO',
      'TIPICMS',
      'TIPO',
      'TRIBUTADASCIAP',
      'RECBRUTAEFDBLOCOP',
      'TIPOPERPRODEPE',
      'EMPCODSIT08EFD',
      'MOVIMFISICA',
    ];
}
